<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TestingQuestion extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $casts = [
        'answer' => 'array'
    ];

    public function testing()
    {
        return $this->belongsTo('App\Models\Testing');
    }

    public function version()
    {
        return $this->belongsTo('App\Models\QuestionVersion', 'question_version_id');
    }

}
