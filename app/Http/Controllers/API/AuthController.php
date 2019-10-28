<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use App\Models\User;

class AuthController extends ATC
{
    public function issueToken(ServerRequestInterface $request)
    {
        try {
            //get username (default is :email)
            $username = $request->getParsedBody()['username'];

            //get user
            //change to 'email' if you want
            $user = User::where('email', $username)->first();
            // $user = User::where('email', $username)->where('active', 1)->first();
            if(!$user) {
                return response()->json(['success' => false, 'message' => "User account was suspend"], 200);
            }

            //generate token
            $tokenResponse = parent::issueToken($request);

            //convert response to json string
            $content = $tokenResponse->getContent();

            //convert json to array
            $data = json_decode($content, true);

            $response['status'] = true;
            $response['data'] = $data;
            $response['type'] = 'account';
            $response['currentAuthority'] = $user->roles[0]->slug;
            return response()->json($response, 200);
        } catch (ModelNotFoundException $e) { // email notfound
            //return error message
            return response()->json(['success' => false, "message" => "User not found"], 200);
        } catch (OAuthServerException $e) { //password not correct..token not granted
            //return error message
            return response()->json(['success' => false, "message" => $e->getMessage()], 200);
            // return response(["message" => $e->getMessage()], 500);
            
            // return response(["message" => "The user credentials were incorrect.', 6, 'invalid_credentials"], 500);
        } catch (Exception $e) {
            ////return error message
            return response()->json(['success' => false, "message" => "error: " . $e], 200);
            // return response(["message" => "error: " . $e], 500);
        }
    }
}
