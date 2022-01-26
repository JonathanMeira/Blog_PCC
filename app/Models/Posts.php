<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'created_at',
        'updated_at',
        'user_id',
        'photo_id',
        'lead'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
}
