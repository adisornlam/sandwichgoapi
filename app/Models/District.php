<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    protected $fillable = ['code','name_th','name_en','latitude','longitude','district_id','zip_code'];
    public $timestamps = false;
    public function subdistricts()
    {
        return $this->hasMany(Subdistrict::class, 'district_id');
    }
}
