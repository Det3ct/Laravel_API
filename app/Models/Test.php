<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'instruction', 'user_id'];
    protected $casts = [
        'settings' => 'array',
    ];

    public function variations()
    {
        return $this->hasMany('App\Models\Variation');
    }


    public function settings()
    {
        return $this->hasOne('App\Models\TestSettings', 'test_id');
    }

    public function invitations()
    {
        return $this->hasMany('App\Models\Invitation', 'test_id');
    }

    public function user()
    {
        return $this->belongsTo('App\Models\User', 'id');
    }
}
