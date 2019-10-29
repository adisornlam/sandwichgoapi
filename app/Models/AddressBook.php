<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AddressBook extends Model
{
    protected $fillable = [
        'fullname',
        'mobile',
        'address',
        'subdistrict_id',
        'district_id',
        'province_id',
        'zipcode',
        'address_book_type_id'
    ];

    public function province()
    {
        return $this->hasOne(Province::class,'id','province_id');
    }

    public function district()
    {
        return $this->hasOne(District::class,'id','district_id');
    }

    public function subdistrict()
    {
        return $this->hasOne(Subdistrict::class,'id','subdistrict_id');
    }

    public function addressbooktype()
    {
        return $this->hasOne(AddressBookType::class,'id','address_book_type_id');
    }
}
