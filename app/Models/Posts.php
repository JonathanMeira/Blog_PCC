<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'likes',
        'dislikes',
        'description',
        'created_at',
        'updated_at',
        'user_id'
    ];

    
}
