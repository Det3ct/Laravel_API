<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Speciality extends Model
{
    use HasFactory;

    protected $fillable = ['code', 'name'];

    public $timestamps = false;

    public function groups()
    {
        return $this->hasMany('App\Models\UserGroup', 'speciality_id');
    }
}
