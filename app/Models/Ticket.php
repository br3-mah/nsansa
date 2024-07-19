<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;
    protected $fillable = [
        'fname',
        'lname',
        'email',
        'phone',
        'trans_amount',
        'fee_amount',
        'trans_rate',
        'actual_amount',
        'ref',
        'status',
        'msg',
        'qty',
        'ticketnum',
        'for_event_on'
    ];
}





