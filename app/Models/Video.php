<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'description',
        'thumbnail',
        'url_video',
        'user_id',
        'category_id',
        'level',
        'duration',
        'status',
        'commentable',
    ];
}
