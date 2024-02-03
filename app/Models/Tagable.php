<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tagable extends Model
{
    use HasFactory;

    protected $table = "tagables";
    public $timestamps = false;
    protected $fillable = [
        'tag_id',
        'tagable_id',
        'tagable_type',
    ];
}
