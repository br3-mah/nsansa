<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use App\Traits\SparcoTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;
use App\Mail\TicketCreated; // Assuming you have a Mailable class for the ticket email

class TicketController extends Controller
{
    use SparcoTrait;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function callback($uuid, $ticket_id)
    {
        try {
            $data = $this->verifyTransaction($uuid);
            // if($data->status == 'TXN_AUTH_SUCCESSFUL' || $data->status == 'TXN_SUCCESSFUL' || $data->status == 'TXN_PROCESSING'){
            $ticket = Ticket::where('id', $ticket_id)->first();
            // dd($data);
            
            if ($ticket) {
                $ticket->update([
                    'phone' => $data->customerMobileWallet,
                    'trans_amount' => $data->transactionAmount,
                    'fee_amount' => $data->feeAmount,
                    'trans_rate' => $data->feePercentage,
                    'actual_amount' => $data->amount,
                    'ref' => $data->merchantReference,
                    'msg' => $data->message,
                    'status' => $data->status
                ]);
            }
            // }
            // Send an email to the user
            Mail::to($ticket->email)->send(new TicketCreated($ticket));

            return redirect()->route('ticket-status',  $ticket->id);
        } catch (\Throwable $th) {
            dd($th);
            // return redirect()->back();
        }
    }
    public function index()
    {
        $tickets = Ticket::latest()->get();
        return view('page.tickets.index', compact('tickets'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function response_back($id)
    {
        $ticket = Ticket::where('id', $id)->first();
        // dd($ticket);
        return view('page.print-ticket', compact('ticket'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
