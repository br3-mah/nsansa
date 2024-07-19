<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Availability extends Model
{
    use HasFactory;
    protected $fillable = [
        'av_date',
        'opening_time',
        'closing_time',
        'user_id'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
