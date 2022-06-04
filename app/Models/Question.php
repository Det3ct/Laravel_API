<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    protected $casts = [
        'answers' => 'array'
    ];

    protected $fillable = ['title', 'text', 'type', 'balls', 'order', 'answers'];


    public function variation()
    {
        return $this->belongsTo('App\Models\Variation');
    }

    public function versions()
    {
        return $this->hasMany('App\Models\QuestionVersion', 'question_id');
    }
}
