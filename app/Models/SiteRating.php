<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SiteRating extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'rating',
        'review',
        'status'
    ];

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }


}
