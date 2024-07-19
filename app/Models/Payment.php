<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;
    protected $fillable = [
        'settled_amount',
        'transaction_ref',
        'payment_method',
        'user_id',
        'billing_id',
        'desc',
        'transaction_status',

        // probase structure
        "amount",
        "companyName",
        "firstName",
        "lastName",
        "customerType",
        "email",
        "expiryDate",
        "mobile",
        "responseMethod",
        "sourceInstitution",
        "paymentDescription",
        "paymentReference",
        "paymentType",
        "redirectUrl",  
        "systemId",
        "password",
        "tpin"
    ];

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }

    public function billing(){
        return $this->belongsTo(Billing::class, 'billing_id');
    }

}
