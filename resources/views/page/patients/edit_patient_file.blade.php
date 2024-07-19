@extends('layouts.app')
@section('content')
<div class="content">
    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">
            Edit Patient Record

            <p class="font-large text-lg">{{ $p->name }}</p>
        </h2>
        <a href="{{ route('all-patient-files', $p->user_id ) }}" class="intro-x btn shadow-md mr-2">Back</a>
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
        <form method="post" action="{{ route('update-patient-file', $p->id) }}" class="col-span-12 lg:col-span-12 2xl:col-span-9">
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
                                        <label for="update-profile-form-1" class="form-label">Condition</label>
                                        <select value="{{ $p->condition }}" name="condition" id="update-profile-form-2" data-search="true" class="tom-select w-full">
                                            <option selected>{{ $p->condition  }}</option>
                                            <option value="None">None</option>
                                            <option value="Anxiety">Anxiety</option>
                                            <option value="Fobia">Fobia</option>
                                            <option value="Stress">Stress</option>
                                            <option value="Depression">Depression</option>
                                            <option value="Suicidal">Suicidal</option>
                                            <option value="Anger Management">Anger Management</option>
                                        </select>                                    
                                    </div>
                                    <div class="mt-3">
                                        <label for="update-profile-form-2" class="form-label">Treatment Method</label>
                                        <select value="{{ $p->treatment }}"  name="treatment" id="update-profile-form-2" data-search="true" class="tom-select w-full multiple">
                                            <option selected>{{ $p->treatment  }}</option>
                                            <option value="None">None</option>
                                            <option value="Lamba Pancture">Lamba Pancture</option>
                                            <option value="Kimo Therapy">Kimo Therapy</option>
                                            <option value="Group Therapy">Group Therapy</option>
                                            <option value="Couples Therapy">Couples Therapy</option>
                                            <option value="Individuals Therapy">Individuals Therapy</option>
                                            <option value="Child Therapy">Child Therapy</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-span-12 mt-2 2xl:col-span-6">
                                    <div>
                                        <label for="update-profile-form-1" class="form-label">Father's Names</label>
                                        <input name="father_names" id="update-profile-form-1" type="text" class="form-control" placeholder="Input text" value="Kevin Spacey" disabled>
                                    </div>
                                    <div class="mt-2">
                                        <label for="update-profile-form-1" class="form-label">Mother's Names</label>
                                        <input name="mother_names" id="update-profile-form-1" type="text" class="form-control" placeholder="Input text" value="Kevin Spacey" disabled>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="w-1/2 mx-auto xl:mr-0 xl:ml-6">
                            <div class="col-span-12 2xl:col-span-6">
                                <div class="">
                                    <label for="update-profile-form-2" class="form-label">Blood Pressure</label>
                                    <select value="{{ $p->bp_level }}"  name="bp_level" id="update-profile-form-2" data-search="true" class="tom-select w-full">
                             
                                        <option selected>{{ $p->bp_level }}</option>
                                        <option value="None">None</option>
                                        <option value="Low Normal">Low Normal</option>
                                        <option value="Normal Normal">Normal Normal</option>
                                        <option value="High Normal">High Normal</option>
                                        <option value="Abnormal">Abnormal</option>
                                        <option value="Critical">Critical</option>
                                    </select>
                                </div>
                                <div class="mt-3">
                                    <label for="update-profile-form-2" class="form-label">Infections</label>
                                    <select value="{{ $p->infection }}"  name="infection" id="update-profile-form-2" data-search="true" class="tom-select w-full multiple">
                                        <option selected>{{ $p->infection }}</option>
                                        <option value="none">None</option>
                                        <option value="STDs">STDs</option>
                                        <option value="Eye">Eye</option>
                                        <option value="Head">Head</option>
                                        <option value="Chest">Chest</option>
                                        <option value="Stomach">Stomach</option>
                                        <option value="Leg">Leg</option>
                                    </select>
                                </div>
                                <div class="mt-3 2xl:mt-0">
                                    <label for="update-profile-form-3" class="form-label">Blood Group</label>
                                    <select value="{{ $p->user->blood_group }}" name="blood_group" id="update-profile-form-3" data-search="true" class="tom-select w-full">
                                        <option selected>{{ $p->user->blood_group }}</option>
                                        <option value="A">A</option>
                                        <option value="A+">A+</option>
                                        <option value="B">B</option>
                                        <option value="B+">B+</option>
                                        <option value="AB">AB</option>
                                        <option value="O">O</option>
                                    </select>
                                </div>
                                <div class="mt-3">
                                    <label for="update-profile-form-4" class="form-label">Date of Birth</label>
                                    <input disabled  value="{{ $p->user->date_of_birth }}" id="update-profile-form-4" type="text" class="form-control date" placeholder="Input text">
                                    <input name="user_id" value="{{ $p->user->id ?? 'None' }}" id="update-profile-form-4" type="hidden" class="form-control date" placeholder="Input text">
                                    <input name="status_id" value="1" id="update-profile-form-4" type="hidden" class="form-control date" placeholder="Input text">
                                </div>
                                <div class="mt-3">
                                    <label for="update-profile-form-5" class="form-label">Place of Birth</label>
                                    <textarea disabled value="{{ $p->user->place_of_birth ?? 'None' }}" id="update-profile-form-5" class="form-control" placeholder="Adress"></textarea>
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
                                <input disabled value="{{ $p->user->email }}" id="update-profile-form-6" type="text" class="form-control" placeholder="Input text" value="kevinspacey@left4code.com" disabled>
                            </div>
                            <div class="mt-3">
                                <label for="update-profile-form-7" class="form-label">Name</label>
                                <input disabled value="{{ $p->user->fname.' '.$p->lname }}" id="update-profile-form-7" type="text" class="form-control" placeholder="Input text" value="Kevin Spacey" disabled>
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
                                <input disabled value="{{ $p->user->id_num }}" id="update-profile-form-9" type="text" class="form-control" placeholder="Input text" >
                            </div>
                        </div>
                        <div class="col-span-12 xl:col-span-6">
                            <div class="mt-3 xl:mt-0">
                                <label for="update-profile-form-10" class="form-label">Phone Number</label>
                                <input name="phone" value="{{ $p->user->mobile_no }}" id="update-profile-form-10" type="text" class="form-control" placeholder="+260 999 9999" >
                            </div>
                            <div class="mt-3">
                                <label for="update-profile-form-11" class="form-label">Address</label>
                                <input name="address" value="{{ $p->user->address }}" id="update-profile-form-11" type="text" class="form-control" placeholder="" >
                            </div>
                            
                            <div class="col-span-12 2xl:col-span-6">
                                <div class="mt-3">
                                    <label for="update-profile-form-4" class="form-label">Current Occupation</label>
                                    <input disabled name="occupation" value="{{ $p->user->occupation }}" id="update-profile-form-4" type="text" class="form-control">
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
                        <textarea name="comments" value="{{ $p->comments }}" class="editor"></textarea>
                        <div class="form-help text-right">Maximum character 0/2000</div>
                    </div>
                </div>
                <div class="col-span-12 flex">
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