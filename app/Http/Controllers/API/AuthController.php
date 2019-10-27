<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use \Laravel\Passport\Http\Controllers\AccessTokenController AS ATC;
use Psr\Http\Message\ServerRequestInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use App\Models\User;
use Illuminate\Support\Facades\Log;

use App\Http\Resources\PermissoinResource;

class AuthController extends ATC
{
    public function issueToken(ServerRequestInterface $request)
    {
        Log::info($request->getParsedBody());
        try {
            //get username (default is :email)
            $username = $request->getParsedBody()['username'];

            //get user
            $user = User::where('email', $username)->first();
            if(!$user) {
                return response()->json(['success' => false, 'message' => 'User account not found.'], 200);
            }

            //generate token
            $tokenResponse = parent::issueToken($request);

            //convert response to json string
            $content = $tokenResponse->getContent();

            //convert json to array
            $data = json_decode($content, true);

            if (isset($data["error"])) {
                return response()->json(['success' => false, 'message' => 'Incorrect password, please try again or click "forgot password" to reset.'], 200);
            }
            
            $response['status'] = true;
            $response['data'] = $data;
            // $response['type'] = 'account';
            $response['roles'] = $user->roles->first()->slug;
            $response['permissions'] = PermissoinResource::collection($user->permissions);
            return response()->json($response, 200);
        } catch (ModelNotFoundException $e) { // email notfound
            //return error message
            return response()->json(['success' => false, "message" => "User not found"], 200);
        } catch (OAuthServerException $e) { //password not correct..token not granted
            //return error message
            return response()->json(['success' => false, "message" => $e->getMessage()], 200);
        } catch (Exception $e) {
            ////return error message
            return response()->json(['success' => false, "message" => "error: " . $e], 200);
        }
    }
}