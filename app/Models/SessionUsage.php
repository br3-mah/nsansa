<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SessionUsage extends Model
{
    use HasFactory;
    protected $fillable = [
        'time',
        'rating',
        'chat_id',
        'patient_id',
        'counselor_id',
        'package_id'
    ];
}
