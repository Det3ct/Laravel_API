<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TestSettings extends Model
{
    use HasFactory;

    protected $fillable = ['random_variation_drop', 'random_order_of_questions', 'time_limit'];

    public $timestamps = false;

    protected $casts = [
        'random_variation_drop' => 'boolean',
        'random_order_of_questions' => 'boolean',
        'time_limit' => 'integer',
    ];

    public function test()
    {
        return $this->belongsTo('App\Models\Test', 'test_id');
    }
}
