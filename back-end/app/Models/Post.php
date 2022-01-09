<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $table = 'post';

    protected $fillable = [
        'title',
        'content'
    ];

    protected $timestamp = true;

    protected $date = [
        'created_at',
        'updated_at'
    ];
    
}
