<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserInfo extends Model
{
    protected $fillable = [
        'mobile',
        'gender',
        'taxid',
        'birthday'
    ];
    
}
