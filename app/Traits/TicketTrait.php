<?php

namespace App\Traits;

use App\Models\Ticket;
use Illuminate\Support\Str; // Import the Str class

trait TicketTrait {

    public function createTicket(array $data){
        $ticket = Ticket::create([
            'fname' => $data->customerFirstName,
            'lname' => $data->customerLastName,
            // 'email' => $data->customerEmail,
            'phone' => $data->customerMobileWallet,
            'trans_amount' => $data->transactionAmount,
            'fee_amount' => $data->feeAmount,
            'trans_rate' => $data->feePercentage,
            'actual_amount' => $data->amount,
            'ref' => $data->merchantReference,
            'msg' => $data->message,
            'status' => $data->status
            'ticketnum' => Str::uuid(5), // Generate a unique ticket number
            'email' => $data->email,
            'for_event_on' => $data->for_event_on
        ]);


        return $ticket->id;
    }
}