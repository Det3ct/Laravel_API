<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuestionVersion extends Model
{
    use HasFactory;

    protected $casts = [
        'answers' => 'array'
    ];

    protected $fillable = ['title', 'text', 'type', 'balls', 'order', 'answers'];

    protected $hidden = ['laravel_through_key'];

    public function original()
    {
        return $this->belongsTo('App\Models\Question', 'question_id');
    }

    public function testingQuestions()
    {
        return $this->hasMany('App\Models\TestingQuestion');
    }
}
