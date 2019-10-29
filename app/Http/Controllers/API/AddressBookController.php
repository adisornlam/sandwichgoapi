<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\API\BaseController as BaseController;
use Illuminate\Http\Request;
use App\Models\AddressBook;
use App\Http\Resources\AddressBookResource;
use App\Http\Resources\AddressBookSearchResource;
use Validator;

class AddressBookController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $query = AddressBook::query();
        $addressbook = $query->latest()->paginate($request->input('limit', 20));
        $page = [
            'size_page' => $request->input('limit', 20),
            'current_page' => $addressbook->currentPage(),
            'last_page' => $addressbook->lastPage(),
            'item_total' => $addressbook->total(),
            'item_from' => $addressbook->firstItem(),
            'item_to' => $addressbook->lastItem()
        ];

        return $this->sendResponse(AddressBookSearchResource::collection($addressbook), 'Address Book retrieved successfully.', $page);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();

        $validator = Validator::make($input, [
            'fullname' => 'required|string|max:100',
            'mobile' => 'required|numeric',
            'address' => 'required',
            'subdistrict_id' => 'required',
            'district_id' => 'required',
            'province_id' => 'required',
            'address_book_type_id' => 'required',
        ]);

        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }

        try {
            $addressbook = new AddressBook;
            $addressbook->user_id = $request->user()->id;
            $addressbook->fullname = $request->input('fullname');
            $addressbook->mobile = $request->input('mobile');
            $addressbook->address = $request->input('address');
            $addressbook->subdistrict_id = $request->input('subdistrict_id');
            $addressbook->district_id = $request->input('district_id');
            $addressbook->province_id = $request->input('province_id');
            $addressbook->address_book_type_id = $request->input('address_book_type_id');
            $addressbook->save();

            return $this->sendResponse($addressbook, 'Address Book created successfully.');
        } catch (\Throwable $th) {
            return $this->sendError('Error.', $th->getMessage());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $addressbook = AddressBook::find($id);
        if (is_null($addressbook)) {
            return $this->sendError('Address Book not found.');
        }

        return $this->sendResponse(new AddressBookResource($addressbook), 'Address Book retrieved successfully.');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AddressBook $addressbook)
    {
        $input = $request->all();

        $validator = Validator::make($input, [
            'fullname' => 'required|string|max:100',
            'mobile' => 'required|numeric',
            'address' => 'required',
            'subdistrict_id' => 'required',
            'district_id' => 'required',
            'province_id' => 'required',
            'address_book_type_id' => 'required',
        ]);

        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }

        try {
            $addressbook->fullname = $request->input('fullname');
            $addressbook->mobile = $request->input('mobile');
            $addressbook->address = $request->input('address');
            $addressbook->subdistrict_id = $request->input('subdistrict_id');
            $addressbook->district_id = $request->input('district_id');
            $addressbook->province_id = $request->input('province_id');
            $addressbook->address_book_type_id = $request->input('address_book_type_id');
            $addressbook->save();

            return $this->sendResponse($addressbook, 'Address Book updated successfully.');
        } catch (\Throwable $th) {
            return $this->sendError('Error.', $th->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(AddressBook $addressbook)
    {
        $addressbook->delete();
        return $this->sendResponse($addressbook, 'Address Book deleted successfully.');
    }
}
