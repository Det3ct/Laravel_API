<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invitation extends Model
{
    use HasFactory;

    const UPDATED_AT = null;

    protected $fillable = ['message'];

    protected $hidden = ['test_id', 'inviter_id'];

    protected $dates = ['created_at'];

    public function inviter()
    {
        return $this->belongsTo('App\Models\User', 'inviter_id');
    }

    public function invitedUsers()
    {
        return $this->hasMany('App\Models\InvitedUser', 'invitation_id');
    }

    public function test()
    {
        return $this->belongsTo('App\Models\Test', 'test_id');
    }
}
