<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class AddressBookResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'fullname' => $this->fullname,
            'mobile' => $this->mobile,
            'address' => $this->address,
            'subdistrict' => $this->subdistrict,
            'district' => $this->district,
            'province' => $this->province,
            'zipcode' => $this->subdistrict->zip_code,
            'addressbooktype' => $this->addressbooktype
        ];
    }
}
