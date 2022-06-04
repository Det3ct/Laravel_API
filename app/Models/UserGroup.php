<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserGroup extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function users()
    {
        return $this->hasMany('App\Models\User', 'user_group_id');
    }

    public function speciality()
    {
        return $this->belongsTo('App\Models\Speciality', 'speciality_id');
    }
}
