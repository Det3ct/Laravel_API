<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InvitedUser extends Model
{
    use HasFactory;

    protected $fillable = ['accepted'];

    protected $casts = ['accepted' => 'boolean'];

    public $timestamps = false;

    public function invitationDetails()
    {
        return $this->belongsTo('App\Models\Invitation', 'invitation_id');
    }

    public function user()
    {
        return $this->belongsTo('App\Models\User', 'user_id');
    }
}
