@extends('layouts.app')
<link rel="stylesheet" href="dist/css/app.css" />
@section('content')

<div class="content">
    <h2 class="intro-y flex text-lg font-medium mt-10">
        <i data-lucide="edit"></i>&nbsp; Edit 
        @hasanyrole('admin')
            User 
        @else
            Your 
        @endhasanyrole
        Information 
    </h2>
    <div class="container py-6 mx-auto">

        <form method="post" class="w-full" action="{{ route('users.update', $user->id) }}" enctype="multipart/form-data">
            @method('patch')
            @csrf
            <div class="grid grid-cols-12 gap-2 mt-5">
                {{-- @if($user->id == auth()->user()->id) --}}
                <div class="intro-y col-span-4 md:col-span-4 lg:col-span-4 xl:col-span-4">
                    <div class="w-full">
                        <h1 class="text-lg ">Personal Information</h1>
                        <small>Carefully edit your persnoal information details</small>
                    </div>
                    <div class="w-60">
                        <div class="border-2 border-dashed shadow-sm border-slate-200/60 dark:border-darkmode-400 rounded-md p-5">
                            <div class="h-40 relative image-fit cursor-pointer zoom-in mx-auto">
                                <img class="rounded-md" alt="Midone - HTML Admin Template" id="preview-image-before-upload" src="{{ asset('dist/images/profile-10.jpg') }}">
                                {{-- <div title="Remove this profile photo?" class="tooltip w-5 h-5 flex items-center justify-center absolute rounded-full text-white bg-danger right-0 top-0 -mr-2 -mt-2"> <i data-lucide="x" class="w-4 h-4"></i> </div> --}}
                            </div>
                            <div class="mx-auto cursor-pointer relative mt-5">
                               <button type="button" class="btn btn-primary w-full">Change Photo</button>
                                <input type="file" id="prof_image" name="image_path" class="w-full h-full top-0 left-0 absolute opacity-0"> 
                                {{-- <input type="file" name="image_path" class="w-full h-full"> --}}
                            </div>
                            <small>
                                @if ($errors->has('image_path'))
                                    <span class="text-danger text-left">{{ $errors->first('image_path') }}</span>
                                @endif
                            </small>
                        </div>
                    </div>
                </div>


                <div class="intro-y col-span-8 md:col-span-8 lg:col-span-8 xl:col-span-8">
                    <div class="mb-3">
                        <label for="name" class="form-label">First Name</label>
                        <input value="{{ $user->fname }}" 
                            type="text" 
                            class="form-control" 
                            name="fname" 
                            placeholder="First Name" required>
        
                        @if ($errors->has('fname'))
                            <span class="text-danger text-left">{{ $errors->first('fname') }}</span>
                        @endif
                    </div>
                    <div class="mb-3">
                        <label for="lname" class="form-label">Last Name</label>
                        <input value="{{ $user->lname }}" 
                            type="text" 
                            class="form-control" 
                            name="lname" 
                            placeholder="Last Name" required>
        
                        @if ($errors->has('lname'))
                            <span class="text-danger text-left">{{ $errors->first('lname') }}</span>
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
                    {{-- <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input value="{{ $user->email }}"
                            type="email" 
                            class="form-control" 
                            name="email" 
                            placeholder="Email address" required>
                        @if ($errors->has('email'))
                            <span class="text-danger text-left">{{ $errors->first('email') }}</span>
                        @endif
                    </div> --}}
                    <div class="mb-3">
                        <label for="nrc_id" class="form-label">ID No</label>
                        <input value="{{ $user->nrc_id }}"
                            type="text" 
                            class="form-control" 
                            name="nrc_id" 
                            placeholder="NRC ID">
                            @if ($errors->has('nrc_id'))
                                <span class="text-danger text-left">{{ $errors->first('nrc_id') }}</span>
                            @endif
                    </div>
                    <div class="mb-3">
                        <label for="mobile_no" class="form-label">Mobile No</label>
                        <input value="{{ $user->mobile_no }}"
                            type="text" 
                            class="form-control" 
                            name="mobile_no" 
                            placeholder="+260 888 8888 88">
                            @if ($errors->has('mobile_no'))
                                <span class="text-danger text-left">{{ $errors->first('mobile_no') }}</span>
                            @endif
                    </div>
                    <div class="mb-3">
                        <label for="address" class="form-label">Address</label>
                        <input value="{{ $user->address }}"
                            type="text" 
                            class="form-control" 
                            name="address" 
                            placeholder="Address">
                            @if ($errors->has('address'))
                                <span class="text-danger text-left">{{ $errors->first('address') }}</span>
                            @endif
                    </div>
                    <div class="mb-3">
                        <label for="country" class="form-label">Country</label>
                        <input value="{{ $user->country }}"
                            type="text" 
                            class="form-control" 
                            name="country" 
                            placeholder="Country">
                        @if ($errors->has('country'))
                            <span class="text-danger text-left">{{ $errors->first('country') }}</span>
                        @endif
                    </div>
                    <div class="mb-3">
                        <label for="state" class="form-label">State</label>
                        <input value="{{ $user->state }}"
                            type="text" 
                            class="form-control" 
                            name="state" 
                            placeholder="Sate">
                        @if ($errors->has('state'))
                            <span class="text-danger text-left">{{ $errors->first('state') }}</span>
                        @endif
                    </div>
                </div>

                @hasanyrole(['patient', 'admin'])
                <div class="intro-y col-span-4 md:col-span-4 lg:col-span-4 xl:col-span-4">
                    <div class="w-full">
                        <h1 class="text-lg ">Medical Information</h1>
                        <small>Carefully edit your medical information details for better therapy diagnosis</small>
                    </div>
                </div>
                <div class="intro-y col-span-8 md:col-span-8 lg:col-span-8 xl:col-span-8">
                    <div class="mb-3">
                        <label for="date_of_birth" class="form-label">Date of Birth</label>
                        <input value="{{ $user->date_of_birth ?? ''}}" 
                            type="text" 
                            class="form-control datepicker" 
                            data-single-mode="true" 
                            name="date_of_birth" 
                            placeholder="">
        
                        @if ($errors->has('date_of_birth'))
                            <span class="text-danger text-left">{{ $errors->first('date_of_birth') }}</span>
                        @endif
                    </div>
                    <div class="mb-3">
                        <label for="place_of_birth" class="form-label">Place of Birth</label>
                        <input value="{{ $user->place_of_birth ?? '' }}"
                            type="text" 
                            class="form-control" 
                            name="place_of_birth" 
                            placeholder="">
                        @if ($errors->has('place_of_birth'))
                            <span class="text-danger text-left">{{ $errors->first('place_of_birth') }}</span>
                        @endif
                    </div>
                    <div class="mb-3">
                        <label for="father_name" class="form-label">Father's Name</label>
                        <input value="{{ $user->father_name ?? '' }}"
                            type="text" 
                            class="form-control" 
                            name="father_name" 
                            placeholder="">
                        @if ($errors->has('father_name'))
                            <span class="text-danger text-left">{{ $errors->first('father_name') }}</span>
                        @endif
                    </div>
                    <div class="mb-3">
                        <label for="mother_name" class="form-label">Mother's Name</label>
                        <input value="{{ $user->mother_name ?? ''}}"
                            type="text" 
                            class="form-control" 
                            name="mother_name" 
                            placeholder="">
                        @if ($errors->has('mother_name'))
                            <span class="text-danger text-left">{{ $errors->first('mother_name') }}</span>
                        @endif
                    </div>
                    <div class="mb-3">
                        <label for="blood_group" class="form-label">Blood Group</label>
                        <select class="form-control" 
                            name="blood_group">
                            <option selected>{{ $user->blood_group ?? '' }}</option>
                            <option value="A">A</option>
                            <option value="A+">A+</option>
                            <option value="B">B</option>
                            <option value="B+">B+</option>
                            <option value="O">O</option>
                            <option value="AB">AB</option>
                            <option value="OB">OB</option>
                            <option value="OA">OA</option>
                        </select>
                    </div>
                </div>
                @endhasanyrole

                @hasanyrole(['counselor', 'admin'])
                <div class="intro-y col-span-4 md:col-span-4 lg:col-span-4 xl:col-span-4">
                    <div class="w-full">
                        <h1 class="text-lg ">Professional Information</h1>
                        <small>Carefully edit your professional information details for better therapy diagnosis</small>
                    </div>
                </div>
                <div class="intro-y col-span-8 md:col-span-8 lg:col-span-8 xl:col-span-8">
                    <div class="mb-3">
                        <label for="occupation" class="form-label">Occupation</label>
                        <input value="{{ $user->occupation }}" 
                            type="text" 
                            class="form-control" 
                            name="occupation" 
                            placeholder="Current Occupation">
        
                        @if ($errors->has('occupation'))
                            <span class="text-danger text-left">{{ $errors->first('occupation') }}</span>
                        @endif
                    </div>
                    
                    <div class="mb-3">
                        <label for="department" class="form-label">Area of Expertise</label>
                        <select class="form-control" 
                            name="department">
                            <option value="None">None</option>
                            <option value="Clinical Social Worker">Clinical Social Worker</option>
                            {{-- <option value="Marriage & Family Counselor">Couples, Marriage & Family Counselor</option> --}}
                            <option value="Peer-to-Peer Counselor">Peer-to-Peer Counselor</option>
                            {{-- <option value="Professional Counselor">Professional Counselor</option> --}}
                            <option value="Psychologist">Psychologist</option>
                        </select>
                    </div>
                    {{-- <div class="mb-3">
                        <label for="hourly_charge" class="form-label">Hourly Charge</label>
                        <small>Your charge per hour</small>
                        <input value="{{ old('hourly_charge') }}" 
                            type="text" 
                            class="form-control" 
                            name="hourly_charge" 
                            placeholder="Hourly Charge Amount (ZMK)">
    
                        @if ($errors->has('hourly_charge'))
                            <span class="text-danger text-left">{{ $errors->first('hourly_charge') }}</span>
                        @endif
                    </div>                        --}}
                    <div class="mb-3">
                        <label for="patient_limit" class="form-label">Patient Limit</label>
                        <select name="patient_limit" id="update-profile-form-2" data-search="true" class="tom-select w-full multiple">
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
                    <div class="mb-3">
                        <label for="work_status" class="form-label">Work Status</label>
                        <select name="work_status" id="update-profile-form-2" data-search="true" class="tom-select w-full multiple">
                            <option class="text-danger" value="0">Unavailable</option>
                            <option class="text-success" value="1">Available</option>
                        </select>
                        @if ($errors->has('work_status'))
                            <span class="text-danger text-left">{{ $errors->first('work_status') }}</span>
                        @endif
                    </div>
                </div>
                @endhasanyrole

                @hasanyrole('admin')
                <div class="intro-y col-span-4 md:col-span-4 lg:col-span-4 xl:col-span-4">
                    <div class="w-full">
                        <h1 class="text-lg ">Assign Role</h1>
                        <small>Assign a user role for privacy & access control</small>
                    </div>
                </div>
                <div class="intro-y col-span-8 md:col-span-8 lg:col-span-8 xl:col-span-8">
                    <div class="mb-3">
                        <label for="role" class="form-label">Role</label>
                        <select class="form-control" 
                            name="role">
                            <option value="">Select role</option>
                            @foreach($roles as $role)
                                <option value="{{ $role->id }}"
                                    {{ in_array($role->name, $userRole) 
                                        ? 'selected'
                                        : '' }}>{{ $role->name }}</option>
                            @endforeach
                        </select>
                        @if ($errors->has('role'))
                            <span class="text-danger text-left">{{ $errors->first('role') }}</span>
                        @endif
                    </div>
                </div>
                @endhasanyrole

            </div>

            <div class="intro-y col-span-12 w-full">
                <button type="submit" class="btn btn-primary w-24 ml-2">
                    <i data-lucide="save"></i>&nbsp;Update Profile
                </button>
            </div>
            {{-- <a href="{{ route('users.index') }}" class="btn btn-default">Cancel</a> --}}
        </form>

    </div>
</div>
<!-- END: Delete Confirmation Modal -->
@endsection
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

<script type="text/javascript">
     
$(document).ready(function (e) {
   $('#prof_image').change(function(){
    let reader = new FileReader();
    reader.onload = (e) => { 

      $('#preview-image-before-upload').attr('src', e.target.result); 
    }
    reader.readAsDataURL(this.files[0]); 
   });
});

</script>