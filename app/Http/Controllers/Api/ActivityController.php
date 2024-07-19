<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Activity;
use App\Traits\ActivityTrait;
use Illuminate\Http\Request;

class ActivityController extends Controller
{
    use ActivityTrait;
    public function index($id){
        $activities = $this->getActivitiesForPatientApi($id);
        return response()->json(['activities' => $activities], 200);
    }

    public function markComplete(Request $request){
        $q = Activity::where('id', $request->act_id)->first();
        $q->status_id = $request->status;
        $q->save();
        return response()->json(['success' => 'Task updated successfully']);
    }
}
