<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    use HasFactory;
    protected $fillable = [
        'content',
        'comment_id',
        'follower_id',
        'user_id',
        'readed',
        'type_notification_id'
    ];
}
