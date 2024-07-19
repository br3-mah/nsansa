<?php

namespace App\Http\Controllers;

use App\Models\Billing;
use App\Models\Payment;
use App\Models\User;
use App\Traits\BillingTrait;
use App\Traits\CounselorTrait;
use App\Traits\PaymentTrait;
use App\Traits\SparcoTrait;
use App\Traits\SubscriptionTrait;
use Illuminate\Http\Request;

class PaymentController extends Controller
{    
    use SubscriptionTrait, BillingTrait, CounselorTrait, PaymentTrait, SparcoTrait;
    public $users, $payments, $plans;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(User $users, Payment $payments)
    {
        $this->plans = $this->get_subscriptions();
        $this->payments = $payments;
        $this->users = $users;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        return view('page.payments',[
            'plans' => $this->plans
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Create a Payment
        $payload = [
            'name' => $request->fname.' '.$request->lname,
            'invoice_id' => $request->invoice_id,
            'total' => $request->total,
            'phone' => $request->phone,
            'email' => $request->email,
            ''
        ];
    }

    public function bill($id){
        $gateway = 'sparco';
        try {
            $billing = $this->create_billing($id);
            if($billing !== false){
                return view('page.payment-summary',[
                    'billing' => $billing,
                    'gateway' => $gateway
                ]);
            }else{
                return redirect()->back();
            }
        } catch (\Throwable $th) {
            return redirect()->back();
        }
    }

    public function gateway(Request $request){

        $data = $this->requestPayment($request);
        $data = $this->getAllTransactions();
        return $data;
    }

    public function sparco_collect(Request $request){
        $jarr = json_decode($request->getContent(), true);
        $data = $this->collect2($jarr);
        if ($data !== null) {
            return response()->json(['data' => $data->paymentUrl], 200);
        }else{
            return response()->json(['data' => 0], 200);
        }
    }

    public function ticket_collect(Request $request){
        
        $data = $this->collectTicket($request->toArray());
        
        if ($data !== null) {
            return response()->json(['data' => $data->paymentUrl], 200);
        }else{
            return response()->json(['data' => 0], 200);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // API
    public function show($id)
    {
        try {
            $payment = $this->payments->where('billing_id', $id)->first();
            return response()->json(['data' => $payment], 200);
        } catch (\Exception $ex) {
            return response()->json(['error' => 'Payment not found'], 404);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
