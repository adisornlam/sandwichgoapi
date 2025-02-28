<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Models\Permissions\HasPermissionsTrait;
use Laravel\Passport\HasApiTokens;


class User extends Authenticatable
{
    use HasApiTokens, Notifiable, HasPermissionsTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function roles()
    {
        return $this->belongsToMany(Role::class,'users_roles');
    }

    public function permissions()
    {
        return $this->belongsToMany(Permission::class, 'users_permissions');
    }

    public function userinfo()
    {
        return $this->hasOne(UserInfo::class);
    }

    public function addressbook()
    {
        return $this->hasMany(AddressBook::class);
    }
}
