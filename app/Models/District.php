<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    public $timestamps = false;
    public function subdistricts()
    {
        return $this->hasMany(Subdistrict::class, 'district_id');
    }
}
