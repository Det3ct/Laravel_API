<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GradingGroup extends Model
{
    use HasFactory;

    protected $fillable = ['type', 'exposed', 'variation_id'];

    protected $casts = [
        'exposed' => 'boolean'
    ];

    public function scales()
    {
        return $this->hasMany('App\Models\GradingScale', 'grading_group_id')->orderBy('min_value');
    }

    public function variation()
    {
        return $this->belongsTo('App\Models\Variation', 'variation_id');
    }

    public function testings()
    {
        return $this->hasMany('App\Models\Testing', 'grading_group_id');
    }
}
