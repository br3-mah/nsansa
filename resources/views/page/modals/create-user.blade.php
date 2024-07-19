<!-- BEGIN: Modal Content -->
<div id="create-user-modal" style="padding-top:28%" class="modal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-2xl col-span-9 w-full" style="width: 80%" >
        <div class="modal-content modal-xl  col-span-9 w-full" style="width: 80%" >
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
            <form method="POST" class="w-full" action="{{ route('users.store') }}">
                @csrf
                <!-- BEGIN: Modal Header -->
                <div class="modal-header">
                    <h2 class="font-medium text-base mr-auto">Add Counselor</h2> 
                    <br>
                    <p class="lead">
                        Add a New Counselor
                    </p>
                </div> 
                <!-- END: Modal Header -->
                <!-- BEGIN: Modal Body -->
                <div class="modal-body">
                    <div class="flex mx-auto">
                        <div class="col-sm-12 col-lg-8 col-md-8 col-xl-8 p-2">
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
                        </div>

                        <div class="col-sm-12 col-lg-6 col-md-6 p-2 ml-2">                 
                            <div class="mb-3">
                                <label for="patient_limit" class="form-label">Gender</label>
                                <select name="patient_limit" id="update-profile-form-2" data-search="true" class="tom-select w-full multiple" required>
                                    <option value="">-- select --</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                                @if ($errors->has('patient_limit'))
                                    <span class="text-danger text-left">{{ $errors->first('patient_limit') }}</span>
                                @endif
                            </div> 
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
                                <label for="department" class="form-label">Department</label>
                                <select name="department" id="update-profile-form-2" data-search="true" class="tom-select w-full multiple">
                                    <option value="None">None</option>
                                    <option value="Clinical Social Worker">Clinical Social Worker</option>
                                    <option value="Marriage & Family Therapist">Marriage & Family Therapist</option>
                                    <option value="Mental Health Counselor">Mental Health Counselor</option>
                                    <option value="Professional Counselor">Professional Counselor</option>
                                    <option value="Psychologist">Psychologist</option>
                                </select>
            
                                @if ($errors->has('department'))
                                    <span class="text-danger text-left">{{ $errors->first('department') }}</span>
                                @endif
                            </div>
                            <div class="mb-3">
                                <label for="hourly_charge" class="form-label">Hourly Charge</label>
                                <input value="{{ old('hourly_charge') }}" 
                                    type="text" 
                                    class="form-control" 
                                    name="hourly_charge" 
                                    placeholder="Hourly Charge Amount (ZMK)" required>
            
                                @if ($errors->has('hourly_charge'))
                                    <span class="text-danger text-left">{{ $errors->first('hourly_charge') }}</span>
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