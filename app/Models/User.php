<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;


    protected $fillable = [
        'firstName', 'lastName', 'patronymic', 'email', 'password', 'user_group_id','password' ,"picture"
    ];

    protected $hidden = [
 'remember_token', 'role_id', 'email_verified_at'
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function group()
    {
        return $this->belongsTo('App\Models\UserGroup', 'user_group_id');
    }

    public function role()
    {
        return $this->belongsTo('App\Models\Role', 'role_id');
    }

//    public function hasRole(String $role) {
//        return $this->role->slug == $role ? true : false;
//    }

    public function testings()
    {
        return $this->hasMany('App\Models\Testing', 'user_id')->orderBy('started_at', 'desc');
    }

    public function invitations() // inbox
    {
        return $this->hasMany('App\Models\InvitedUser', 'user_id')->where('accepted', false)->orderBy('id', 'desc');
    }

    public function outboxInvitations()
    {
        return $this->hasMany('App\Models\Invitation', 'inviter_id');
    }

    public function tests()
    {
        return $this->hasMany('App\Models\Test', 'user_id');
    }

}
