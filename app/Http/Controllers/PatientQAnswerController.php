<?php

namespace App\Http\Controllers;

use App\Models\PatientQResult;
use App\Models\PatientQuestionnaires;
use Illuminate\Http\Request;

class PatientQAnswerController extends Controller
{
    public function store(Request $request)
    {
        PatientQResult::where('user_id', $request->request->all()[0]['user_id'])
                        ->where('questionnaire_id', $request->request->all()[0]['questionnaire_id'])->delete();

        foreach ($request->request as $value) {
            
            PatientQResult::create([
                'user_answer' => $value['answer'],
                'question_id' => $value['question_id'],
                'user_id' => $value['user_id'],
                'questionnaire_id' => $value['questionnaire_id'],
                'published' => 1
            ]);
        }
        
        return response()->json(['message' => 'Survey Completed']);
    }
}
