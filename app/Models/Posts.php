<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Posts extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'title',
        'description',
        'created_at',
        'updated_at',
        'user_id',
        'lead',
        'category_id',
        'photo'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
}
