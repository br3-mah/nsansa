<?php

namespace App\Http\Controllers;

use App\Models\SiteRating;
use Illuminate\Http\Request;

class SiteRatingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        try {
            $data = $request->toArray();
            SiteRating::create([
                'user_id' => auth()->user()->id ?? $data['user_id'],
                'rating' =>  $data['rating'],
                'review' =>  $data['feedback']
            ]);
            return response()->json(['msg' => 'Submitted Successfully. Thank you!', 'code' => 200]);
        } catch (\Throwable $th) {
            return response()->json(['msg' => 'Failed, Check your entries and try again', 'code' => 500]);
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
    public function update(Request $request)
    {
        
        try {
            $review = SiteRating::where('id', $request->toArray()['id'])->first();
            $review->status =  $review->status == 0 ? 1 : 0;
            $review->save();
            return response()->json(['code' => 200]);
        } catch (\Throwable $th) {
            return response()->json(['code' => 500]);
        }
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
