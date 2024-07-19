<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commission extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id', //counselor ID
        'payment_id',
        'amount',
        'owner',
        'status'
    ];

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }

    public function payment(){
        return $this->belongsTo(Payment::class, 'payment_id');
    }
}
