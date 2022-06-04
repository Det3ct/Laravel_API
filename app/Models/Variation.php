<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Variation extends Model
{
    use HasFactory;

    protected $attributes = [
        'name' => 'Вариант',
    ];
    protected $fillable = ['name'];

    public function test()
    {
        return $this->belongsTo('App\Models\Test');
    }

    public function questions()
    {
        return $this->hasMany('App\Models\Question')->orderBy('order');
    }

    public function gradingGroups()
    {
        return $this->hasMany('App\Models\GradingGroup', 'variation_id');
    }
}
