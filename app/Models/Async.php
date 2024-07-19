<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Async extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'value',
        'chat_id',
        'user_id',
        'status'
    ];
}
