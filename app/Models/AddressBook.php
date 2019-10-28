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
}
