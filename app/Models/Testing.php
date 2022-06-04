<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testing extends Model
{
    use HasFactory;

    protected $casts = [
        'data' => 'array'
    ];

    public $timestamps = false;

    protected $dates = ['started_at', 'ended_at'];

    public function getRouteKey()
    {
        return $this->token;
    }

    public function questions()
    {
        return $this->hasMany('App\Models\TestingQuestion');
    }

    public function gradingGroup()
    {
        return $this->belongsTo('App\Models\GradingGroup', 'grading_group_id');
    }

    public function user()
    {
        return $this->belongsTo('App\Models\User', 'user_id');
    }
}
