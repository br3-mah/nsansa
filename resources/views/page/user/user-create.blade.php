<!-- BEGIN: Modal Content -->
@extends('layouts.app')
@section('content')
<div class="content">
    <div class="mt-8">
        <div class="w-full">
            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                    </ul>
                </div>
            @endif
            <form method="POST" class="w-full" action="{{ route('users.store') }}" enctype="multipart/form-data">
                @csrf
                <!-- BEGIN: Modal Header -->
                <div class="w-full lg:w-1/4 xl:w-1/4 intro-y ">
                    <div class="px-2 header">
                        <h2 class="font-medium text-base mr-auto">Add New User</h2> 
                        <small class="lead">
                            Create an account for a counselor, patient, etc ... 
                        </small>
                    </div> 
                    <div class="px-2 items-end fl-right">
                        <h5 class="font-medium text-base mr-auto">User Group</h5> 
                        <select name="user_group" id="user_group_select" data-search="true" class="tom-select w-full multiple">
                            <option value="counselor">Counselor</option>
                            <option value="patient">Patient</option>
                        </select>
                    </div> 
                </div>

                <!-- END: Modal Header -->
                <!-- BEGIN: Modal Body -->
                <div class="px-2 col-span-12 mt-5">
                    <h1 class="text-lg ">Personal Information</h1>
                    <small>Carefully edit your persnoal information details</small>
                </div>
                <br>
                @include('page.user._partials.personal_details')
                <div id="deskPersonalDetails">
                    <div class="flex col-span-12">
                        <div class="w-52">
                            <div class="border-2 border-dashed shadow-sm border-slate-200/60 dark:border-darkmode-400 rounded-md p-5">
                                <div class="h-40 relative image-fit cursor-pointer zoom-in mx-auto">
                                    <img class="rounded-md" alt="Midone - HTML Admin Template" id="preview-image-before-upload_create" src="{{ asset('dist/images/profile-10.jpg') }}">
                                    {{-- <div title="Remove this profile photo?" class="tooltip w-5 h-5 flex items-center justify-center absolute rounded-full text-white bg-danger right-0 top-0 -mr-2 -mt-2"> <i data-lucide="x" class="w-4 h-4"></i> </div> --}}
                                </div>
                                <div class="mx-auto cursor-pointer relative mt-5">
                                <button type="button" class="btn btn-primary w-full">Change Photo</button>
                                    <input type="file" id="prof_image_create" name="image_path" class="w-full h-full top-0 left-0 absolute opacity-0"> 
                                    {{-- <input type="file" name="image_path" class="w-full h-full"> --}}
                                </div>
                                <small>
                                    @if ($errors->has('image_path'))
                                        <span class="text-danger text-left">{{ $errors->first('image_path') }}</span>
                                    @endif
                                </small>
                            </div>
                        </div>
                        <div class="col-span-12 xl:col-span-6 md:col-span-6 p-2">
                            <div class="mb-3">
                                <label for="name" class="form-label">First Name</label>
                                <input value="{{ old('fname') }}" 
                                    type="text" 
                                    class="form-control" 
                                    name="fname" 
                                    placeholder="First Name" required>
                                @if ($errors->has('fname'))
                                    <span class="text-danger text-left">{{ $errors->first('fname') }}</span>
                                @endif
                            </div>
                            <div class="mb-3">
                                <label for="patient_limit" class="form-label">Gender</label>
                                <select name="gender" id="update-profile-form-2" data-search="true" class="tom-select w-full multiple">
                                    <option value="">-- select --</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                                @if ($errors->has('gender'))
                                    <span class="text-danger text-left">{{ $errors->first('gender') }}</span>
                                @endif
                            </div> 
                            <div class="mb-3">
                                <label for="date_of_birth" class="form-label">Date of Birth</label>
                                <input value="{{ old('date_of_birth') }}"
                                    type="text" 
                                    class="form-control datepicker" 
                                    data-single-mode="true"
                                    name="date_of_birth" 
                                    placeholder="Date of Birth" required>
                                @if ($errors->has('date_of_birth'))
                                    <span class="text-danger text-left">{{ $errors->first('date_of_birth') }}</span>
                                @endif
                            </div>
                        </div>

                        <div class="col-span-12 xl:col-span-6 md:col-span-6 p-2 ml-2">                 
                            <div class="mb-3">
                                <label for="name" class="form-label">Last Name</label>
                                <input value="{{ old('lname') }}" 
                                    type="text" 
                                    class="form-control" 
                                    name="lname" 
                                    placeholder="Last Name" required>
            
                                @if ($errors->has('name'))
                                    <span class="text-danger text-left">{{ $errors->first('lname') }}</span>
                                @endif
                            </div>
                            <div class="mb-3">
                                <label for="address" class="form-label">Address</label>
                                <input value="{{ old('address') }}" 
                                    type="text" 
                                    class="form-control" 
                                    name="address" 
                                    placeholder="Address" required>
            
                                @if ($errors->has('address'))
                                    <span class="text-danger text-left">{{ $errors->first('address') }}</span>
                                @endif
                            </div>
                            <div class="mb-3">
                                <label for="place_of_birth" class="form-label">Place of Birth</label>
                                <input value="{{ old('place_of_birth') }}"
                                    type="text" 
                                    data-single-mode="true"
                                    class="form-control" 
                                    name="place_of_birth" 
                                    placeholder="Place of Birth" required>
                                @if ($errors->has('place_of_birth'))
                                    <span class="text-danger text-left">{{ $errors->first('place_of_birth') }}</span>
                                @endif
                            </div>
                        </div>

                        <div class="col-span-12 xl:col-span-6 md:col-span-6 p-2 ml-2">        
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input value="{{ old('email') }}"
                                    type="email" 
                                    class="form-control" 
                                    name="email" 
                                    placeholder="Email address" required>
                                @if ($errors->has('email'))
                                    <span class="text-danger text-left">{{ $errors->first('email') }}</span>
                                @endif
                            </div>
                            <div class="mb-3">
                                <label for="username" class="form-label">Username</label>
                                <input value="{{ old('username') }}"
                                    type="text" 
                                    class="form-control" 
                                    name="username" 
                                    placeholder="Username" required>
                                @if ($errors->has('username'))
                                    <span class="text-danger text-left">{{ $errors->first('username') }}</span>
                                @endif
                            </div>
                            <div class="mb-3">
                                <label for="nrc_id" class="form-label">National ID</label>
                                <input value="{{ old('nrc_id') }}"
                                    type="text" 
                                    class="form-control" 
                                    name="nrc_id" 
                                    placeholder="NRC , PASSPORT, ID" required>
                                @if ($errors->has('nrc_id'))
                                    <span class="text-danger text-left">{{ $errors->first('nrc_id') }}</span>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                <!-- BEGIN: Modal Body -->
                <div id="medical_details">
                <div class="px-2 col-span-12 mt-5">
                    <h1 class="text-lg ">Medical Information</h1>
                    <small>Carefully edit your persnoal information details</small>
                </div>
                <br>
                <div class="lg:flex col-span-12">
                    <div class="col-span-12 xl:col-span-6 md:col-span-6 p-2">
                    
                        <div class="mb-3">
                            <label for="blood_group" class="form-label">Blood Group</label>
                            <select name="blood_group" id="update-profile-form-2" data-search="true" class="tom-select w-full multiple">
                                <option value="A">A</option>
                                <option value="A+">A+</option>
                                <option value="B">B</option>
                                <option value="B+">B+</option>
                                <option value="O">O</option>
                                <option value="AB">AB</option>
                                <option value="OB">OB</option>
                                <option value="OA">OA</option>
                            </select>
                            @if ($errors->has('blood_group'))
                                <span class="text-danger text-left">{{ $errors->first('blood_group') }}</span>
                            @endif
                        </div>     
                        <div class="mb-3">
                            <label for="patient_condition" class="form-label">Condition</label>
                            <input value="{{ old('patient_condition') }}" 
                                type="text" 
                                class="form-control" 
                                name="patient_condition" 
                                placeholder="Ex. Substance Use Disorder">
        
                            @if ($errors->has('patient_condition'))
                                <span class="text-danger text-left">{{ $errors->first('patient_condition') }}</span>
                            @endif
                        </div>
                        
                        
                    </div>

                    <div class="col-span-12 xl:col-span-6 md:col-span-6 p-2 ml-2">     
                        <div class="mb-3">
                            <label for="father_name" class="form-label">Father's Names</label>
                            <input value="{{ old('father_name') }}" 
                                type="text" 
                                class="form-control" 
                                name="father_name" 
                                placeholder="Father's Names">
        
                            @if ($errors->has('father_name'))
                                <span class="text-danger text-left">{{ $errors->first('father_name') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="col-span-12 xl:col-span-6 md:col-span-6 p-2 ml-2">  
                          
                        <div class="mb-3">
                            <label for="mother_name" class="form-label">Mother's Names</label>
                            <input value="{{ old('mother_name') }}" 
                                type="text" 
                                class="form-control" 
                                name="mother_name" 
                                placeholder="Mother's Names">
        
                            @if ($errors->has('mother_name'))
                                <span class="text-danger text-left">{{ $errors->first('mother_name') }}</span>
                            @endif
                        </div>
                    </div>
                </div>
                </div>
                <!-- BEGIN: Modal Body -->
                <div id="professional_details">
                    <div class="px-2 col-span-12 mt-5">
                        <h1 class="text-lg ">Professional Information</h1>
                        <small>Carefully edit your persnoal information details</small>
                    </div>
                    <br>
                    <div class="flex col-span-12">
                        <div class="col-span-12 xl:col-span-6 md:col-span-6 p-2">
                            
                            <div class="mb-3">
                                <label for="department" class="form-label">Department</label>
                                <select name="department" id="update-profile-form-2" data-search="true" class="tom-select w-full multiple">
                                    <option value="None">None</option>
                                    <option value="Peer Counseling">Peer Counseling</option>
                                    <option value="Clinical Social Worker">Clinical Social Worker</option>
                                    <option value="Marriage and Couples Couseling">Marriage and Couples Couseling</option>
                                    <option value="Mental Health Counselor">Mental Health Counselor</option>
                                    <option value="Professional Counselor">Professional Counselor</option>
                                    <option value="Psychologist">Psychologist</option>
                                </select>
            
                                @if ($errors->has('department'))
                                    <span class="text-danger text-left">{{ $errors->first('department') }}</span>
                                @endif
                            </div>                    
                            <div class="mb-3">
                                <label for="occupation" class="form-label">Liecense</label>
                                <input value="{{ old('liecense_number') }}" 
                                    type="text" 
                                    class="form-control" 
                                    name="liecense_number" 
                                    placeholder="Professional Liecense #">
                
                                @if ($errors->has('liecense_number'))
                                    <span class="text-danger text-left">{{ $errors->first('liecense_number') }}</span>
                                @endif
                            </div>
                        </div>

                        {{-- <div class="col-span-12 xl:col-span-6 md:col-span-6 p-2 ml-2">                 
                            
                            <div class="mb-3">
                                <label for="hourly_charge" class="form-label">Hourly Charge</label>
                                <input value="{{ old('hourly_charge') }}" 
                                    type="text" 
                                    class="form-control" 
                                    name="hourly_charge" 
                                    placeholder="Hourly Charge Amount (ZMK)">
            
                                @if ($errors->has('hourly_charge'))
                                    <span class="text-danger text-left">{{ $errors->first('hourly_charge') }}</span>
                                @endif
                            </div>
                        </div> --}}

                        <div class="col-span-12 xl:col-span-6 md:col-span-6 p-2 ml-2">        
                            
                            <div class="mb-3">
                                <label for="patient_limit" class="form-label">Patient Limit</label>
                                <select name="patient_limit" id="update-profile-form-2" data-search="true" class="tom-select w-full" multiple>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="10">6 - 10</option>
                                    <option value="15">10 - 15</option>
                                </select>
                                @if ($errors->has('patient_limit'))
                                    <span class="text-danger text-left">{{ $errors->first('patient_limit') }}</span>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END: Modal Body -->
                <!-- BEGIN: Modal Footer -->
                <div class="modal-footer"> 
                    <button type="button" data-tw-dismiss="modal" class="btn btn-outline-secondary w-20 mr-1">Cancel</button> 
                    <button type="submit" class="btn btn-primary w-30">Save User</button> 
                </div> <!-- END: Modal Footer -->
            </form>
        </div>
    </div>
</div>
@endsection
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script type="text/javascript">
$(document).ready(function (e) {
    $('#professional_details').show();
    $('#medical_details').hide();
   $('#prof_image_create').change(function(){
        let reader = new FileReader();
        reader.onload = (e) => { 

            $('#preview-image-before-upload_create').attr('src', e.target.result); 
        }
        reader.readAsDataURL(this.files[0]); 
    });

    const select = document.getElementById('user_group_select');

    select.addEventListener('change', function handleChange(event) {
        if(event.target.value == 'patient'){
            $('#professional_details').hide();
            $('#medical_details').show();
        }else{
            $('#professional_details').show();
            $('#medical_details').hide();
        }
    });
});

</script>