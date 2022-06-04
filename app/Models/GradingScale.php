<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GradingScale extends Model
{
    use HasFactory;

    protected $fillable = ['assessment', 'explanation', 'min_value'];

    public $timestamps = false;

    public function group()
    {
        return $this->belongsTo('App\Models\GradingGroup', 'grading_group_id');
    }
}
