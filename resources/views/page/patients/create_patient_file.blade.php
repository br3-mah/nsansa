@extends('layouts.app')
@section('content')
<div class="content">
    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">
            Enter Patient Record
        </h2>
        <a href="{{ route('all-patient-files', $p->id)  }}" class="intro-x btn shadow-md mr-2">Back to Records</a>
    </div>
    <div class="grid grid-cols-12 gap-6">
        <!-- BEGIN: Profile Menu -->
        {{-- <div class="col-span-12 lg:col-span-4 2xl:col-span-3 flex lg:block flex-col-reverse">
            <div class="intro-y box mt-5">
                <div class="relative flex items-center p-5 border-t border-slate-200/60 dark:border-darkmode-400">
                    <div class="w-12 h-12 image-fit">
                        <img alt="Midone - HTML Admin Template" class="rounded-full" src="dist/images/profile-10.jpg">
                    </div>
                    <div class="ml-4 mr-auto">
                        <div class="font-medium text-base">Anxiety</div>
                        <div class="text-slate-500">Child Therapy</div>
                    </div>
                </div>
                <div class="relative flex items-center p-5 border-t border-slate-200/60 dark:border-darkmode-400">
                    <div class="w-12 h-12 image-fit">
                        <img alt="Midone - HTML Admin Template" class="rounded-full" src="dist/images/profile-10.jpg">
                    </div>
                    <div class="ml-4 mr-auto">
                        <div class="font-medium text-base">AA Meeting</div>
                        <div class="text-slate-500">Group Therapy</div>
                    </div>
                </div>
                <div class="relative flex items-center p-5 border-t border-slate-200/60 dark:border-darkmode-400">
                    <div class="w-12 h-12 image-fit">
                        <img alt="Midone - HTML Admin Template" class="rounded-full" src="dist/images/profile-10.jpg">
                    </div>
                    <div class="ml-4 mr-auto">
                        <div class="font-medium text-base">Bipola</div>
                        <div class="text-slate-500">Individual Therapy</div>
                    </div>
                </div>
                
                <div class="p-5 border-t border-slate-200/60 dark:border-darkmode-400 flex">
                    <button type="button" class="btn btn-primary py-1 px-2">New Group</button>
                    <button type="button" class="btn btn-outline-secondary py-1 px-2 ml-auto">New Quick Link</button>
                </div>
            </div>
        </div> --}}


        <!-- END: Profile Menu -->
        <form method="post" action="{{ route('add-patient-file') }}" class="col-span-12 lg:col-span-12 2xl:col-span-9">
            @csrf
            <!-- BEGIN: Medical Information -->
            <div id="medical_info" class="intro-y box lg:mt-5">
                <div class="flex items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="font-medium text-base mr-auto">
                        Medical Information
                    </h2>
                </div>
                <div class="p-5">
                    <div class="flex flex-col-reverse xl:flex-row flex-col">
                        <div class="flex-1 mt-6 xl:mt-0">
                            <div class="grid grid-cols-12 gap-x-5">
                                <div class="col-span-12 2xl:col-span-6">
                                    <div>
                                        <label for="update-profile-form-1" class="form-label">File Name</label>
                                        <input name="name" id="update-profile-form-1" type="text" class="form-control" placeholder="Therapy Initial Assessment, Therapy Progress Note, or Therapy Discharge Summary">
                                    </div>
                                    <div class="mt-3">
                                        <label for="update-profile-form-1" class="form-label">Condition</label>
                                        <select name="condition" id="update-profile-form-2" data-search="true" class="tom-select w-full" required>
                                            <option value="None">None</option>
                                            <option value="anxiety">Anxiety</option>
                                            <option value="fobia">Fobia</option>
                                            <option value="substance use disorder">Substance Use Disorder</option>
                                            <option value="attention deficit hyperactivity disorder">Attention Deficit Hyperactivity Disorder</option>
                                            <option value="obsessive compulsive disorder (OCD)">Obsessive Compulsive Disorder (OCD)</option>
                                            <option value="oppositional and defiant behavior">Oppositional and Defiant Behavior</option>
                                            <option value="stress management">Stress Management</option>
                                            <option value="paranoid personality (PPD)">Paranoid personality (PPD)</option>
                                            <option value="paranoia">Paranoia</option>
                                            <option value="Grief, Loss, and Bereavement">Grief, Loss, and Bereavement</option>
                                            <option value="depression">Depression</option>
                                            <option value="Pregnancy and Childbirthing">Pregnancy and Childbirthing</option>
                                            <option value="Agoraphobia">Agoraphobia (crowded place, confined spaces)</option>
                                            <option value="antisocial personality disorder (ASPD)">antisocial personality disorder (ASPD)</option>
                                            <option value="Academic concerns">Academic concerns (learning difficulties, bulling)</option>
                                            <option value="obsessive compulsive disorder">Obsessive Compulsive Disorder</option>
                                            <option value="post-Traumatic stress disorder">Post-Traumatic Stress Disorder</option>
                                            <option value="career confusion">Career Confusion</option>
                                            <option value="Sex Addiction Therapy">Sex Addiction</option>
                                            <option value="anger management">Anger Management</option>
                                        </select>                                    
                                    </div>
                                    <div class="mt-3">
                                        <label for="update-profile-form-2" class="form-label">Treatment Method</label>
                                        <select name="treatment" id="update-profile-form-2" data-search="true" class="tom-select w-full" multiple>
                                            <option value="None">None</option>
                                            <option value="Existential therapy">Existential therapy</option>
                                            <option value="Kimo Therapy">Kimo Therapy</option>
                                            <option value="Person-centered therapy">Person-centered therapy</option>
                                            <option value="Gestalt therapy">Gestalt therapy</option>
                                            <option value="Dialectical behavioral therapy">Dialectical behavioral therapy</option>
                                            <option value="Rational emotive therapy">Rational emotive therapy</option>
                                            <option value="Systematic desensitization">Systematic desensitization</option>
                                            <option value="Aversion therapy">Aversion therapyy</option>
                                            <option value="Psychodynamic therapy">Psychodynamic therapy</option>
                                            <option value="Family therapy">Family therapy</option>
                                            <option value="Flooding">Mindfulness-based therapy</option>
                                            <option value="Play therapy">Play therapy</option>
                                            <option value="creative arts therapy">Creative arts therapy</option>
                                            <option value="emotion-focused therapy">Emotion-focused therapy</option>
                                            <option value="exposure therapy">Exposure therapy</option>
                                            <option value="sex addiction therapy">Sex Addiction Therapy</option>
                                            <option value="Co-dependency">Co-dependency</option>
                                            <option value="Flooding">Flooding</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-span-12 mt-2 2xl:col-span-6">
                                    <div>
                                        <label for="update-profile-form-1" class="form-label">Father's Names</label>
                                        <input name="father_names" id="update-profile-form-1" type="text" class="form-control" placeholder="" value="{{ $p->father_name ?? 'None' }}" disabled>
                                    </div>
                                    <div class="mt-2">
                                        <label for="update-profile-form-1" class="form-label">Mother's Names</label>
                                        <input name="mother_names" id="update-profile-form-1" type="text" class="form-control" placeholder="" value="{{ $p->mother_name ?? 'None' }}" disabled>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="w-1/2 mx-auto xl:mr-0 xl:ml-6">
                            <div class="col-span-12 2xl:col-span-6">
                                <div class="">
                                    <label for="update-profile-form-2" class="form-label">Blood Pressure Level</label>
                                    <select name="bp_level" id="update-profile-form-2" data-search="true" class="tom-select w-full">
                                        <option value="None">None</option>
                                        <option value="Low"> Low</option>
                                        <option value="Normal">Normal</option>
                                        <option value="Elevated">Elevated</option>
                                        <option value="High (Stage 1)">High (Stage 1)</option>
                                        <option value="High (Stage 2)">High (Stage 2)</option>
                                        <option value="High (Stage 3)">High (Crisis)</option>
                                    </select>
                                </div>
                                <div class="mt-3">
                                    <label for="update-profile-form-2" class="form-label">Infections <small>(If any)</small></label>
                                    <select name="infection" id="update-profile-form-2" data-search="true" class="tom-select w-full multiple">
                                        <option value="none">None</option>
                                        <option value="Viral infection">Viral infection</option>
                                        <option value="Eye infection">Eye infection</option>
                                        <option value="Fungal infection">Fungal infection</option>
                                        <option value="Skin contacthest">Skin contact</option>
                                        <option value="Stomach">Stomach</option>
                                        <option value="Other infections">Other infections</option>
                                    </select>
                                </div>
                                <div class="mt-3 2xl:mt-0">
                                    <label for="update-profile-form-3" class="form-label">Blood Group</label>
                                    <select value="{{ $p->blood_group ?? 'None' }}" name="blood_group" id="update-profile-form-3" data-search="true" class="tom-select w-full">
                                        <option value="O-">O-</option>
                                        <option value="O+">O+</option>
                                        <option value="A-">A</option>
                                        <option value="A+">A+</option>
                                        <option value="B-">B-</option>
                                        <option value="B+">B+</option>
                                        <option value="AB-">AB-</option>
                                        <option value="AB+">AB+</option>
                                    </select>
                                </div>
                                <div class="mt-3">
                                    <label for="update-profile-form-4" class="form-label">Date of Birth</label>
                                    <input disabled  value="{{ $p->date_of_birth }}" id="update-profile-form-4" type="text" class="form-control date" placeholder="1999-01-01">
                                    <input name="user_id" value="{{ $p->id ?? 'None' }}" id="update-profile-form-4" type="hidden" class="form-control date" placeholder="">
                                    <input name="status_id" value="1" id="update-profile-form-4" type="hidden" class="form-control date" placeholder="National ID">
                                </div>
                                <div class="mt-3">
                                    <label for="update-profile-form-5" class="form-label">Place of Birth</label>
                                    <input disabled value="{{ $p->place_of_birth ?? 'None' }}" id="update-profile-form-5" class="form-control" placeholder=""/>
                                </div>
                            </div>
                            
                            <div class="col-span-12">
                                <a href="#personal_information" class="next btn btn-primary w-1/2 mt-3">Next </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Display Information -->
            <!-- BEGIN: Personal Information -->
            <div id="personal_info" class="intro-y box mt-5">
                <div class="flex items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="font-medium text-base mr-auto">
                        Personal Information
                    </h2>
                </div>
                <div class="p-5">
                    <div class="grid grid-cols-12 gap-x-5">
                        <div class="col-span-12 xl:col-span-6">
                            <div>
                                <label for="update-profile-form-6" class="form-label">Email</label>
                                <input disabled value="{{ $p->email }}" id="update-profile-form-6" type="text" class="form-control" placeholder="Input text" value="kevinspacey@left4code.com" disabled>
                            </div>
                            <div class="mt-3">
                                <label for="update-profile-form-7" class="form-label">Name</label>
                                <input disabled value="{{ $p->fname.' '.$p->lname }}" id="update-profile-form-7" type="text" class="form-control" placeholder="Input text" value="Kevin Spacey" disabled>
                            </div>
                            {{-- <div class="mt-3">
                                <label for="update-profile-form-8" class="form-label">ID Type</label>
                                <select name="id_type" id="update-profile-form-8" class="form-select">
                                    <option value="None">None</option>
                                    <option value="NRC">NRC</option>
                                    <option value="IC">IC</option>
                                    <option value="FIN">FIN</option>
                                    <option value="Passport">Passport</option>
                                </select>
                            </div> --}}
                            <div class="mt-3">
                                <label for="update-profile-form-9" class="form-label">ID/NRC Number</label>
                                <input disabled value="{{ $p->nrc_id }}" id="update-profile-form-9" type="text" class="form-control" placeholder="Input text" >
                            </div>
                        </div>
                        <div class="col-span-12 xl:col-span-6">
                            <div class="mt-3 xl:mt-0">
                                <label for="update-profile-form-10" class="form-label">Phone Number</label>
                                <input name="phone" value="{{ $p->mobile_no }}" id="update-profile-form-10" type="text" class="form-control" placeholder="+260 999 9999" >
                            </div>
                            <div class="mt-3">
                                <label for="update-profile-form-11" class="form-label">Address</label>
                                <input name="address" value="{{ $p->address }}" id="update-profile-form-11" type="text" class="form-control" placeholder="" >
                            </div>
                            
                            <div class="col-span-12 2xl:col-span-6">
                                <div class="mt-3">
                                    <label for="update-profile-form-4" class="form-label">Current Occupation</label>
                                    <input disabled name="occupation" value="{{ $p->occupation }}" id="update-profile-form-4" type="text" class="form-control">
                                </div>
                                <div class="col-span-12 mt-4 flex">
                                    <a href="#medical_information" class="prev btn btn-default w-1/3">Previous</a>
                                    <a href="#notes" style="float: right" class="ml-6 btn btn-primary w-1/3 next-final">Next</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Personal Information -->

            <div id="notes" class="intro-y box mt-5">
                <div class="flex items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="font-medium text-base mr-auto">
                        Notes
                    </h2>
                </div>
                <div class="p-5">
                    <div class="w-full mt-3 xl:mt-0 flex-1">
                        <textarea name="comments" class="editor"></textarea>
                        <div class="form-help text-right">Maximum character 0/2000</div>
                    </div>
                </div>
                <div class="intro-y col-span-12 flex items-center justify-center sm:justify-end p-4">
                    <a href="#personal_information" class="prev-final btn btn-default w-1/3">Previous</a>
                    <button type="submit" style="float: right" class="ml-6 btn btn-primary w-1/3">Save</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
    $('#personal_info').hide();
    $('#notes').hide();
    $('.next').click(() => {
        $('#medical_info').hide();
        $('#personal_info').show();
        $('#notes').hide();
    });
    $('.next-final').click(() => {
        $('#medical_info').hide();
        $('#personal_info').hide();
        $('#notes').show();
    });
    $('.prev').click(() => {
        $('#medical_info').show();
        $('#personal_info').hide();
        $('#notes').hide();
    });
    $('.prev-final').click(() => {
        $('#medical_info').hide();
        $('#personal_info').show();
        $('#notes').hide();
    });
    // $('.js-switch').change(function () {
    //     let status = $(this).prop('checked') === true ? 1 : 0;
    //     let questionaire_id = $(this).data('id');

    //     console.log(questionaire_id);
    //     $.ajax({
    //         type: "GET",
    //         dataType: "json",
    //         cache: false,
    //         url: '{{ route('questionaire.status') }}',
    //         data: {'status': status, 'user_id': questionaire_id},
    //         success: function (data) {
    //             console.log(data.message);
    //         }
    //     });
    // });
});
</script>