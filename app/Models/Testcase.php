<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\File;
class Testcase extends Model
{
    use HasFactory;

    protected $fillable=[
        'title',
        'author',
        'executor',
        'priority',
        'short_description',
        'test_steps',
        'test_data',
        'expected_result',
        'actual_result',
        'comments',
        'pre_conditions',
        'reference'
    ];

    public function files(){
        return $this->hasMany(File::class);
    }
}
