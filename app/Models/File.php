<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Testcase;
class File extends Model
{
    use HasFactory;

    protected $table = 'files';
    protected $fillable =[
        'testcase_id',
        'name',
        'type',
        'size',
        'slug'
    ];

    public function testcase(){
        return $this->belongsTo(Testcase::class);
    }
}
