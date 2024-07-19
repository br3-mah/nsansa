<?php

namespace App\Traits;

use App\Models\Ticket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;
trait SparcoTrait {

    public function verifyTransaction($merchantReference)
    {
        $curl = curl_init();
            curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://live.sparco.io/gateway/api/v1/transaction/query?merchantReference='.$merchantReference.'',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_HTTPHEADER => array(
                'token: eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJwdWJLZXkiOiJkZTdhZmQ2MTc2YmI0ZWZmOTkzMTZkY2Y1MDhlNWJlNiIsImlhdCI6MTY5MjcwNzIwOH0.Qi6KFBzFy7iST0bFylG-Vb5cpzVJ710lg1V296uRKck',
            ),
        ));
    
        $response = curl_exec($curl);
        $result = json_decode($response);
    
        curl_close($curl);
        return ($result);
    }  

    public function collect2(array $request){
        try {
            // dd($request);
            $curl = curl_init();
            $var = true;
    
            curl_setopt_array($curl, array(
                // CURLOPT_URL => 'https://live.sparco.io/gateway/api/v1/momo/debit',
                CURLOPT_URL => 'https://checkout.broadpay.io/gateway/api/v1/checkout',
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => '',
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 0,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => 'POST',
                CURLOPT_POSTFIELDS => '{
                    "transactionName": "Online Counseling Service",
                    "amount": "'.$request['amount'].'",
                    "currency": "'.$request['currency'].'",
                    "chargeMe": "true",
                    "customerAddr": "Lusaka",
                    "customerCity": "Lusaka",
                    "customerState": "Lusaka",
                    "customerCountryCode": "ZM",
                    "customerPostalCode": "10101",
                    "transactionReference": "'.$request['uuid'].'",
                    "customerFirstName": "'.$request['customerFirstName'].'",
                    "customerLastName": "'.$request['customerLastName'].'",
                    "customerEmail": "'.$request['customerEmail'].'",
                    "returnUrl": "'.$request['callback'].'",
                    "autoReturn": '.$var.',
                    "webhookUrl": "https://2150-165-58-129-124.ngrok.io/webhook?src=test",
                    "merchantPublicKey": "de7afd6176bb4eff99316dcf508e5be6"
                }',
                CURLOPT_HTTPHEADER => array(
                    'Content-Type: application/json',
                    'token: eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJwdWJLZXkiOiJkZTdhZmQ2MTc2YmI0ZWZmOTkzMTZkY2Y1MDhlNWJlNngiLCJpYXQiOjE3MDIyOTQwNjV9.Nr_rZOeLizmFTrTbIzf3Fc5dk9-qv-vu-qjenF-Rl3c',
                    'X-PUB-KEY; de7afd6176bb4eff99316dcf508e5be6' 
                ),
            ));
    
            $response = curl_exec($curl);
            $result = json_decode($response);
           
            curl_close($curl);
            // Check for cURL errors
            // if ($response === false) {
            //     $errorNumber = curl_errno($curl);
            //     $errorMessage = curl_error($curl);

            //     // Output error information
            //     dd("cURL Error ($errorNumber): $errorMessage");
            // }
            // eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJwdWJLZXkiOiJkZTdhZmQ2MTc2YmI0ZWZmOTkzMTZkY2Y1MDhlNWJlNiIsImlhdCI6MTY5MjcwNzIwOH0.Qi6KFBzFy7iST0bFylG-Vb5cpzVJ710lg1V296uRKck
            // Checkout link"customerPhone": "'.$request['wallet'].'",
                    // "wallet":  "'.$request['wallet'].'",
            // print_r($result);
            // Return checkout link or json data
            return $result;
        } catch (\Throwable $th) {
            dd($th);
        }   
    }


    public function collectTicket(array $request){
        try {
            $randomNumber = random_int(10000, 99999);
            $total_amount = $request['amount'] * $request['qty'];
            // Create the Ticket
            $ticket = Ticket::create([
                'fname' => $request['customerFirstName'],
                'lname' => $request['customerLastName'],
                'email' => $request['customerEmail'],
                'phone' => $request['wallet'],
                'actual_amount' => $total_amount,
                'status' => 'Unpaid',
                'qty' => $request['qty'],
                'ticketnum' => $randomNumber,
                'for_event_on' => $request['for_event_on']
            ]);
    

            $curl = curl_init();
            $var = true;
    
            curl_setopt_array($curl, array(
                // CURLOPT_URL => 'https://live.sparco.io/gateway/api/v1/momo/debit',
                CURLOPT_URL => 'https://checkout.broadpay.io/gateway/api/v1/checkout',
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => '',
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 0,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => 'POST',
                CURLOPT_POSTFIELDS => '{
                    "transactionName": "Event Ticket",
                    "amount": "'.$total_amount.'",
                    "currency": "'.$request['currency'].'",
                    "chargeMe": "true",
                    "wallet":  "'.$request['wallet'].'",
                    "customerAddr": "Test",
                    "customerCity": "Lusaka",
                    "customerState": "Lusaka",
                    "customerCountryCode": "ZM",
                    "customerPostalCode": "10101",
                    "transactionReference": "'.$request['uuid'].'",
                    "customerFirstName": "'.$request['customerFirstName'].'",
                    "customerLastName": "'.$request['customerLastName'].'",
                    "customerEmail": "'.$request['customerEmail'].'",
                    "customerPhone": "'.$request['wallet'].'",
                    "returnUrl": "'.$request['callback'].$ticket->id.'",
                    "autoReturn": '.$var.',
                    "webhookUrl": "https://2150-165-58-129-124.ngrok.io/webhook?src=test",
                    "merchantPublicKey": "de7afd6176bb4eff99316dcf508e5be6"
                }',
                CURLOPT_HTTPHEADER => array(
                    'Content-Type: application/json',
                    'token: eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJwdWJLZXkiOiJkZTdhZmQ2MTc2YmI0ZWZmOTkzMTZkY2Y1MDhlNWJlNiIsImlhdCI6MTY5MjcwNzIwOH0.Qi6KFBzFy7iST0bFylG-Vb5cpzVJ710lg1V296uRKck',
                    'X-PUB-KEY; de7afd6176bb4eff99316dcf508e5be6' 
                ),
            ));
    
            $response = curl_exec($curl);
            $result = json_decode($response);
            curl_close($curl);
    
            // Checkout link
            // Return checkout link or json data
            return $result;
        } catch (\Throwable $th) {
            dd($th);
        }   
    }

    public function disburse(array $request){
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://live.sparco.io/gateway/api/v1/momo/credit',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => $request,
            CURLOPT_HTTPHEADER => array(
                'X-PUB-KEY: de7afd6176bb4eff99316dcf508e5be6',
                'Content-Type: application/json',
                'token: eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJwdWJLZXkiOiJkZTdhZmQ2MTc2YmI0ZWZmOTkzMTZkY2Y1MDhlNWJlNiIsImlhdCI6MTY5MjcwNzIwOH0.Qi6KFBzFy7iST0bFylG-Vb5cpzVJ710lg1V296uRKck'
            ),
        ));
    
        $response = curl_exec($curl);
    
        curl_close($curl);
    
        return $response;
    }

    public function card(){

    }



}