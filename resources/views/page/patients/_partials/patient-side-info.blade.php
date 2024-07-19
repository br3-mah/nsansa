<div class="intro-y col-span-12 lg:col-span-4 xl:col-span-3">
    <div class="box mt-5">
        <div class="p-5">
            <a class="flex items-center text-primary font-medium"> <i data-lucide="user" class="w-4 h-4 mr-2"></i> {{ $user->fname.' '.$user->lname }} </a>
            <a class="flex items-center mt-5 capitalize"> <i data-lucide="lock" class="w-4 h-4 mr-2"></i> {{ $user->type }} </a>
            <a class="flex items-center mt-5"> <i data-lucide="mail" class="w-4 h-4 mr-2"></i>{{ $user->email }}</a>
            <a href="{{ route('all-patient-files', $user->id) }}" class="btn btn-warning text-white flex items-center mt-5 capitalize">
                <i data-lucide="folder-open" class="w-3 h-3 mr-2"></i>
                Patient Files
            </a>   
            <a target="_blank" title="View response to questionnaire" href="{{ route('user-survey-response', $user->guest_id) }}" class="tooltip btn mt-2 btn-secondary text-primary py-1 px-2 mr-2">
                <i data-lucide="folder-open" class="w-3 h-3 mr-2"></i>
                Survey
            </a>
        </div>
        @if($user->type == 'patient')
            {{-- <div class="p-5 border-t border-slate-200/60 dark:border-darkmode-400">
                <a class="flex items-center"> <i data-lucide="credit-card" class="w-4 h-4 mr-2"></i> {{ App\Models\Billing::running_balance($user->id)->desc ?? 'No Subscription'}}  </a>
                <a class="flex items-center mt-5"> <i data-lucide="box" class="w-4 h-4 mr-2"></i> Current Balance ZMK {{ App\Models\Billing::running_balance($user->id)->balance}}</a>
            </div> --}}
            
            <div class="p-5 border-t border-slate-200/60 dark:border-darkmode-400">
                <a class="flex items-center font-bold"> Assigned Counselor</a>
                @if(App\Models\PatientFile::counselorAssigned($user->id) !== null)
                    <a class="flex items-center mt-5" href=""> <i data-lucide="user" class="w-4 h-4 mr-2"></i> 
                        @if(App\Models\PatientFile::counselorAssigned($user->id)->counselor !== null)
                            {{App\Models\PatientFile::counselorAssigned($user->id)->counselor->fname.' '.App\Models\PatientFile::counselorAssigned($user->id)->counselor->lname}}<br>
                        @endif
                    </a>
                    <a class="flex items-center mt-5"> <i data-lucide="user-plus" class="w-4 h-4 mr-2"></i> {{App\Models\PatientFile::counselorAssigned($user->id)->counselor->department }} </a>
                    <a class="flex items-center mt-5" href="mailto:{{App\Models\PatientFile::counselorAssigned($user->id)->counselor->email }}"> <i data-lucide="mail" class="w-4 h-4 mr-2"></i> {{App\Models\PatientFile::counselorAssigned($user->id)->counselor->email }} </a>
                @else
                    <p>No Counselor Assigned</p>
                    <a href="{{ route('patient-files') }}" class="py-2 btn btn-sm flex d-flex">
                        <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="side-menu__title">Patient Profiles</div>
                    </a>
                @endif
                     
            </div>
        @endif
    </div>
</div>