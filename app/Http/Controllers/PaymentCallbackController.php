<?php

namespace App\Http\Controllers;

use App\Traits\BillingTrait;
use App\Traits\PaymentTrait;
use App\Traits\SparcoTrait;
use Illuminate\Http\Request;

class PaymentCallbackController extends Controller
{
    use PaymentTrait, BillingTrait, SparcoTrait;
    public function index($id, $billing_id, $uuid){
        // dd($billing_id);
        $data = $this->verifyTransaction($uuid);
        $data = $this->recordSparcoTransaction($id, $billing_id, $data);
        return redirect()->route('patient');
    }
}
