<?php

namespace App\Http\Livewire\Admin\Patient;

use App\Models\PatientQuestionnaires;
use App\Models\User;
use App\Traits\CoreTrait;
use App\Traits\CounselorTrait;
use App\Traits\PatientTrait;
use Livewire\Component;

class PatientQuestionView extends Component
{
    use CoreTrait, CounselorTrait;
    public $index, $create, $update, $users;

    public function render()
    {
        if($this->my_role() == 'patient'){
            $user_id = $this->getMyCounselor(auth()->user()->id);
            if($user_id !== 'null'){
                $questionnaires = PatientQuestionnaires::where('user_id', $user_id)
            ->with('questions')->paginate(7);
            }
        }else{
            $questionnaires = PatientQuestionnaires::where('user_id', auth()->user()->id)
            ->with('questions')->paginate(7);
        }
        $u = auth()->user();
        $this->users =  User::role('patient')->whereHas('assignedCounselor', function ($query) use ($u) {
            $query->where('counselor_id', $u->id);
        })->get();
        return view('livewire.admin.patient.patient-question-view',[
            'questionnaires' => $questionnaires
        ]);
    }
}
