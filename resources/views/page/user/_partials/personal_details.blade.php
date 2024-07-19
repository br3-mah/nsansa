
<div id="mobilePersonalDetails" class="flex col-span-12">
    <div class="w-full">
        <div class="border-2 border-dashed shadow-sm border-slate-200/60 dark:border-darkmode-400 rounded-md p-5">
            <div class="h-40 relative image-fit cursor-pointer zoom-in mx-auto">
                <img class="rounded-md" alt="Midone - HTML Admin Template" id="preview-user-image-before-upload_create" src="{{ asset('dist/images/profile-10.jpg') }}">
                {{-- <div title="Remove this profile photo?" class="tooltip w-5 h-5 flex items-center justify-center absolute rounded-full text-white bg-danger right-0 top-0 -mr-2 -mt-2"> <i data-lucide="x" class="w-4 h-4"></i> </div> --}}
            </div>
            <div class="mx-auto cursor-pointer relative mt-5">
            <button type="button" class="btn btn-primary w-full">Change Photo</button>
                <input type="file" id="prof-user-image-create" name="image_path" class="w-full h-full top-0 left-0 absolute opacity-0"> 
                {{-- <input type="file" name="image_path" class="w-full h-full"> --}}
            </div>
            <small>
                @if ($errors->has('image_path'))
                    <span class="text-danger text-left">{{ $errors->first('image_path') }}</span>
                @endif
            </small>
        </div>
    </div>
    <div class="col-span-12">
        <div class="mb-3 w-full">
            <label for="name" class="form-label">First Name</label>
            <input value="{{ old('fname') }}" 
                type="text" 
                class="form-control w-full" 
                name="fname" 
                placeholder="First Name">
            @if ($errors->has('fname'))
                <span class="text-danger  text-left">{{ $errors->first('fname') }}</span>
            @endif
        </div>
        <div class="mb-3 w-full">
            <label for="name" class="form-label">Last Name</label>
            <input value="{{ old('lname') }}" 
                type="text" 
                class="form-control" 
                name="lname" 
                placeholder="Last Name">

            @if ($errors->has('name'))
                <span class="text-danger text-left">{{ $errors->first('lname') }}</span>
            @endif
        </div>
        <div class="mb-3 w-full">
            <label for="email" class="form-label">Email</label>
            <input value="{{ old('email') }}"
                type="email" 
                class="form-control" 
                name="email" 
                placeholder="Email address">
            @if ($errors->has('email'))
                <span class="text-danger text-left">{{ $errors->first('email') }}</span>
            @endif
        </div>
        <div class="mb-3 w-full">
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
        <div class="mb-3 w-full">
            <label for="date_of_birth" class="form-label">Date of Birth</label>
            <input value="{{ old('date_of_birth') }}"
                type="text" 
                class="form-control datepicker" 
                data-single-mode="true"
                name="date_of_birth" 
                placeholder="Date of Birth">
            @if ($errors->has('date_of_birth'))
                <span class="text-danger text-left">{{ $errors->first('date_of_birth') }}</span>
            @endif
        </div>
    </div>

    <div class="col-span-12">                 

        <div class="mb-3 w-full">
            <label for="address" class="form-label">Address</label>
            <input value="{{ old('address') }}" 
                type="text" 
                class="form-control" 
                name="address" 
                placeholder="Address">

            @if ($errors->has('address'))
                <span class="text-danger text-left">{{ $errors->first('address') }}</span>
            @endif
        </div>
        <div class="mb-3 w-full">
            <label for="place_of_birth" class="form-label">Place of Birth</label>
            <input value="{{ old('place_of_birth') }}"
                type="text" 
                data-single-mode="true"
                class="form-control" 
                name="place_of_birth" 
                placeholder="Place of Birth">
            @if ($errors->has('place_of_birth'))
                <span class="text-danger text-left">{{ $errors->first('place_of_birth') }}</span>
            @endif
        </div>
    </div>

    <div class="col-span-12">        

        <div class="mb-3 w-full">
            <label for="username" class="form-label">Username</label>
            <input value="{{ old('username') }}"
                type="text" 
                class="form-control" 
                name="username" 
                placeholder="Username">
            @if ($errors->has('username'))
                <span class="text-danger text-left">{{ $errors->first('username') }}</span>
            @endif
        </div>
        <div class="mb-3 w-full">
            <label for="nrc_id" class="form-label">National ID</label>
            <input value="{{ old('nrc_id') }}"
                type="text" 
                class="form-control" 
                name="nrc_id" 
                placeholder="NRC , PASSPORT, ID">
            @if ($errors->has('nrc_id'))
                <span class="text-danger text-left">{{ $errors->first('nrc_id') }}</span>
            @endif
        </div>
    </div>
</div>