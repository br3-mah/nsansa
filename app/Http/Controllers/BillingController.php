<?php

namespace App\Http\Controllers;

use App\Models\Billing;
use App\Models\Plan;
use App\Models\PlanItem;
use App\Traits\BillingTrait;
use App\Traits\CoreTrait;
use App\Traits\SubscriptionTrait;
use Illuminate\Http\Request;
use Session;

class BillingController extends Controller
{
    use BillingTrait, SubscriptionTrait, CoreTrait;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */        
    public  $plan;
    public  $plan_item;
     /**
      * Display a listing of the resource.
      *
      * @return \Illuminate\Http\Response
      */
    public function __construct(Plan $plan, PlanItem $pi)
     {
         $this->plan = $plan;
         $this->plan_item = $pi;
     }
    public function index()
    {
        // if($this->my_role() == 'patient'){
        //     $this->autoAssign();
        // }
        $bills = $this->get_my_billings();
        return view('page.billing.index', compact('bills'));
    }

    public function byPassPayments($id){
        $data = Billing::where('id', $id)->get()->first();
        $data->status = 1;
        $data->save();
        return redirect()->back();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('page.patients.billing');
    }    

    public function create_subscription(){
        return view('page.settings.__crud.subscription.create');
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

    public function store_subscription(Request $request){
        try{
            $plan = $this->plan->create([
                'name'=>$request->name,
                'price'=>$request->price,
                'duration'=>$request->duration,
                'per'=>$request->per,
                'user_id'=>auth()->user()->id
            ]);
            
            foreach ($request->feature as $value) {
                $this->plan_item->create([
                    'desc' => $value,
                    'user_id' => auth()->user()->id,
                    'plan_id' => $plan->id,
                    'price' => 0.00
                ]);
            }
            Session::flash('attention', "Subscription created successfully.");
            return redirect()->route('settings.index');
        }catch (\Throwable $th) {
            Session::flash('error_msg', "Oops something went wrong again.");
            return redirect()->route('settings.index');
        }
    }

    public function remove_billing($id){
        try {
            $this->plan_item->where('plan_id', $id)->delete();
            $this->plan->where('id', $id)->delete();
            return redirect()->back();
        } catch (\Throwable $th) {
            dd($th);
        }
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
