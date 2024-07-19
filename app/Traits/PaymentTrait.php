<?php

namespace App\Traits;

use App\Models\Billing;
use App\Models\Payment;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

trait PaymentTrait {

    public function recordSparcoTransaction($user_id, $billing_id, $data){
          // Get the last two elements from the array
          // dd($data);
      try{
          // Remove the comma from the string
          $numericValue = str_replace(',', '', $data->amount);
          $amount = (float) $numericValue;
          if($data->status == 'TXN_AUTH_SUCCESSFUL' || $data->status == 'TXN_SUCCESSFUL' || $data->status == 'TXN_PROCESSING' || $data->status != 'TXN_AUTH_UNSUCCESSFUL'){
            $status = $data->status ;
            $bool = 2;
            $can_peer = 'true';
          }else{
            $status = $data->status ;
            $bool = 3;
            $can_peer = 'false';
          }
          
          Payment::create([
            'settled_amount' => $amount,
            'amount' => $data->amount,
            // 'transaction_ref' => $data->merchantReference,
            'paymentReference' => $data->reference,
            'payment_method' => $data->customerMobileWallet,
            'paymentType' => 'Mobile Money',
            'user_id' => (int) $user_id,
            'billing_id' => $billing_id,
            'desc' => 'Nsansa Wellness Counseling Services',
            'transaction_status'=> $status
            // 'is_paid'=> 'F'
          ]);

          // Update billing status
          $billing = Billing::where('id', $billing_id)->first();
          $billing->status = $bool;
          $billing->can_video_call = $can_peer;
          $billing->balance = $billing->charge_amount - $amount;
          $billing->save();

          return true;
      } catch (\Throwable $th) {
        // dd($th);
        return false;
      }
    }

    public function recordTransaction($data){
      try {
        // dd($data);
          // Explode the string by slashes
          $segments = explode('/', $data->getRequestUri());

          // Get the last two elements from the array
          $billing_id = end($segments);
          $user_id = prev($segments);
          // Remove the comma from the string
          $numericValue = str_replace(',', '', $data['amount']);
          $amount = (float) $numericValue;
          if($data['paymentStatus'] == 'S' || $data['paymentStatus'] == 's'){
            $status = 'Success';
            $bool = 2;
          }else{
            $status = 'Failed';
            $bool = 3;
          }
          Auth::loginUsingId($user_id);
          Payment::create([
            'settled_amount' => $amount,
            'amount' => $data['amount'],
            // 'transaction_ref' => $data['paymentReference'],
            'paymentReference' => $data['paymentReference'],
            'payment_method' => $data['paymentChannel'],
            'paymentType' => $data['paymentChannel'],
            'user_id' => (int) $user_id,
            'billing_id' => $billing_id,
            'desc' => 'Nsansa Wellness Counseling Services',
            'transaction_status'=> $status
            // 'is_paid'=> 'F'
          ]);

          // Update billing status
          $billing = Billing::where('id', (int) $billing_id)->first();
          $billing->status = $bool;
          $billing->balance = $billing->charge_amount - $amount;
          $billing->save();

          return redirect()->route('patient');
      } catch (\Throwable $th) {
        dd($th);
      }
    }
}

// "",
// "companyName",
// "firstName",
// "lastName",
// "customerType",
// "email",
// "expiryDate",
// "mobile",
// "responseMethod",
// "sourceInstitution",
// "paymentDescription",
// "paymentReference",
// "",
// "redirectUrl",  
// "systemId",
// "password",
// "tpin"