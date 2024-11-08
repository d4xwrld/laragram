<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Participant extends Model
{
    protected $fillable = [
        'chat_id',
        'username',
        'first_name', 
        'last_name',
        'is_bot'
    ];

    protected $casts = [
        'is_bot' => 'boolean',
    ];
}