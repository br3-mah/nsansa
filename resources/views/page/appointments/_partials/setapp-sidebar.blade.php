<div class="sidebar w-full" id="setapp-sidebar">
    <!-- Close button for the sidebar -->
    <div class="">
        <button class="btn btn-primary rounded-full" id="close-sidebar3">X</button>
    </div>
    <!-- Sidebar content goes here -->
    <div class="px-10 container pt-8">
        <h2 class="text-lg font-semibold">Create Appointments</h2>
        <small>Make appointment on behalf of counselors and patients</small>
        <br>
        <form action="{{ route('appointment.proxy') }}" method="POST" id="formAvailability">
            @csrf
            
            <div class="w-full mt-2 flex-1">
                <input id="appointment-name" name="title" type="text" class="form-control" placeholder="Appointment Title">
                <div class="form-help text-right">Maximum character 0/70</div>
            </div>
            
            <div class="w-full mt-2 flex-1">
                <label for="datepicker" class="block text-sm font-medium text-gray-700">Find Patient</label>
                <select name="guest_id" id="subcategory" data-placeholder="Guest" class="tom-select w-full">
                    {{-- <option value="Fashion &amp; Make Up">Fashion &amp; Make Up</option> --}}
                    @forelse ($patients as $u)
                        @if($u->id != auth()->user()->id)
                            <option value="{{ $u->id }}">{{ $u->fname.' '.$u->lname }}</option>
                        @endif
                    @empty
                        
                    @endforelse
                </select>
            </div>
            
            <div class="w-full mt-2 flex-1">
                <label for="datepicker" class="block text-sm font-medium text-gray-700">Find Counselor</label>
                <select name="counselor_id" id="subcategory" data-placeholder="Guest" class="tom-select w-full">
                    {{-- <option value="Fashion &amp; Make Up">Fashion &amp; Make Up</option> --}}
                    @forelse ($counselors as $u)
                        @if($u->id != auth()->user()->id)
                            <option value="{{ $u->id }}">{{ $u->fname.' '.$u->lname }}</option>
                        @endif
                    @empty
                        
                    @endforelse
                </select>
            </div>

            <div class="w-full mt-2 flex-1">
                <label for="datepicker" class="block text-sm font-medium text-gray-700">Start Time</label>
                <select name="start_time" id="start_time" class="form-control w-full">
                    <option value="00:00">00:00</option>
                    <option value="00:15">00:15</option>
                    <option value="00:30">00:30</option>
                    <option value="00:45">00:45</option>
                    <option value="01:00">01:00</option>
                    <option value="01:15">01:15</option>
                    <option value="01:30">01:30</option>
                    <option value="01:45">01:45</option>
                    <option value="02:00">02:00</option>
                    <option value="02:15">02:15</option>
                    <option value="02:30">02:30</option>
                    <option value="02:45">02:45</option>
                    <option value="03:00">03:00</option>
                    <option value="03:15">03:15</option>
                    <option value="03:30">03:30</option>
                    <option value="03:45">03:45</option>
                    <option value="04:00">04:00</option>
                    <option value="04:15">04:15</option>
                    <option value="04:30">04:30</option>
                    <option value="04:45">04:45</option>
                    <option value="05:00">05:00</option>
                    <option value="05:15">05:15</option>
                    <option value="05:30">05:30</option>
                    <option value="05:45">05:45</option>
                    <option value="06:00">06:00</option>
                    <option value="06:15">06:15</option>
                    <option value="06:30">06:30</option>
                    <option value="06:45">06:45</option>
                    <option value="07:00">07:00</option>
                    <option value="07:15">07:15</option>
                    <option value="07:30">07:30</option>
                    <option value="07:45">07:45</option>
                    <option value="08:00">08:00</option>
                    <option value="08:15">08:15</option>
                    <option value="08:30">08:30</option>
                    <option value="08:45">08:45</option>
                    <option value="09:00">09:00</option>
                    <option value="09:15">09:15</option>
                    <option value="09:30">09:30</option>
                    <option value="09:45">09:45</option>
                    <option value="10:00">10:00</option>
                    <option value="10:15">10:15</option>
                    <option value="10:30">10:30</option>
                    <option value="10:45">10:45</option>
                    <option value="11:00">11:00</option>
                    <option value="11:15">11:15</option>
                    <option value="11:30">11:30</option>
                    <option value="11:45">11:45</option>
                    <option value="12:00">12:00</option>
                    <option value="12:15">12:15</option>
                    <option value="12:30">12:30</option>
                    <option value="12:45">12:45</option>
                    <option value="13:00">13:00</option>
                    <option value="13:15">13:15</option>
                    <option value="13:30">13:30</option>
                    <option value="13:45">13:45</option>
                    <option value="14:00">14:00</option>
                    <option value="14:15">14:15</option>
                    <option value="14:30">14:30</option>
                    <option value="14:45">14:45</option>
                    <option value="15:00">15:00</option>
                    <option value="15:15">15:15</option>
                    <option value="15:30">15:30</option>
                    <option value="15:45">15:45</option>
                    <option value="16:00">16:00</option>
                    <option value="16:15">16:15</option>
                    <option value="16:30">16:30</option>
                    <option value="16:45">16:45</option>
                    <option value="17:00">17:00</option>
                    <option value="17:15">17:15</option>
                    <option value="17:30">17:30</option>
                    <option value="17:45">17:45</option>
                    <option value="18:00">18:00</option>
                    <option value="18:15">18:15</option>
                    <option value="18:30">18:30</option>
                    <option value="18:45">18:45</option>
                    <option value="19:00">19:00</option>
                    <option value="19:15">19:15</option>
                    <option value="19:30">19:30</option>
                    <option value="19:45">19:45</option>
                    <option value="20:00">20:00</option>
                    <option value="20:15">20:15</option>
                    <option value="20:30">20:30</option>
                    <option value="20:45">20:45</option>
                    <option value="21:00">21:00</option>
                    <option value="21:15">21:15</option>
                    <option value="21:30">21:30</option>
                    <option value="21:45">21:45</option>
                    <option value="22:00">22:00</option>
                    <option value="22:15">22:15</option>
                    <option value="22:30">22:30</option>
                    <option value="22:45">22:45</option>
                    <option value="23:00">23:00</option>
                    <option value="23:15">23:15</option>
                    <option value="23:30">23:30</option>
                    <option value="23:45">23:45</option>
                </select>
            </div>

            <div class="w-full mt-2 flex-1">
                <label for="datepicker" class="block text-sm font-medium text-gray-700">End Time</label>
                <select name="end_time" id="end_time" class="form-control w-full">
                    <option value="00:00">00:00</option>
                    <option value="00:15">00:15</option>
                    <option value="00:30">00:30</option>
                    <option value="00:45">00:45</option>
                    <option value="01:00">01:00</option>
                    <option value="01:15">01:15</option>
                    <option value="01:30">01:30</option>
                    <option value="01:45">01:45</option>
                    <option value="02:00">02:00</option>
                    <option value="02:15">02:15</option>
                    <option value="02:30">02:30</option>
                    <option value="02:45">02:45</option>
                    <option value="03:00">03:00</option>
                    <option value="03:15">03:15</option>
                    <option value="03:30">03:30</option>
                    <option value="03:45">03:45</option>
                    <option value="04:00">04:00</option>
                    <option value="04:15">04:15</option>
                    <option value="04:30">04:30</option>
                    <option value="04:45">04:45</option>
                    <option value="05:00">05:00</option>
                    <option value="05:15">05:15</option>
                    <option value="05:30">05:30</option>
                    <option value="05:45">05:45</option>
                    <option value="06:00">06:00</option>
                    <option value="06:15">06:15</option>
                    <option value="06:30">06:30</option>
                    <option value="06:45">06:45</option>
                    <option value="07:00">07:00</option>
                    <option value="07:15">07:15</option>
                    <option value="07:30">07:30</option>
                    <option value="07:45">07:45</option>
                    <option value="08:00">08:00</option>
                    <option value="08:15">08:15</option>
                    <option value="08:30">08:30</option>
                    <option value="08:45">08:45</option>
                    <option value="09:00">09:00</option>
                    <option value="09:15">09:15</option>
                    <option value="09:30">09:30</option>
                    <option value="09:45">09:45</option>
                    <option value="10:00">10:00</option>
                    <option value="10:15">10:15</option>
                    <option value="10:30">10:30</option>
                    <option value="10:45">10:45</option>
                    <option value="11:00">11:00</option>
                    <option value="11:15">11:15</option>
                    <option value="11:30">11:30</option>
                    <option value="11:45">11:45</option>
                    <option value="12:00">12:00</option>
                    <option value="12:15">12:15</option>
                    <option value="12:30">12:30</option>
                    <option value="12:45">12:45</option>
                    <option value="13:00">13:00</option>
                    <option value="13:15">13:15</option>
                    <option value="13:30">13:30</option>
                    <option value="13:45">13:45</option>
                    <option value="14:00">14:00</option>
                    <option value="14:15">14:15</option>
                    <option value="14:30">14:30</option>
                    <option value="14:45">14:45</option>
                    <option value="15:00">15:00</option>
                    <option value="15:15">15:15</option>
                    <option value="15:30">15:30</option>
                    <option value="15:45">15:45</option>
                    <option value="16:00">16:00</option>
                    <option value="16:15">16:15</option>
                    <option value="16:30">16:30</option>
                    <option value="16:45">16:45</option>
                    <option value="17:00">17:00</option>
                    <option value="17:15">17:15</option>
                    <option value="17:30">17:30</option>
                    <option value="17:45">17:45</option>
                    <option value="18:00">18:00</option>
                    <option value="18:15">18:15</option>
                    <option value="18:30">18:30</option>
                    <option value="18:45">18:45</option>
                    <option value="19:00">19:00</option>
                    <option value="19:15">19:15</option>
                    <option value="19:30">19:30</option>
                    <option value="19:45">19:45</option>
                    <option value="20:00">20:00</option>
                    <option value="20:15">20:15</option>
                    <option value="20:30">20:30</option>
                    <option value="20:45">20:45</option>
                    <option value="21:00">21:00</option>
                    <option value="21:15">21:15</option>
                    <option value="21:30">21:30</option>
                    <option value="21:45">21:45</option>
                    <option value="22:00">22:00</option>
                    <option value="22:15">22:15</option>
                    <option value="22:30">22:30</option>
                    <option value="22:45">22:45</option>
                    <option value="23:00">23:00</option>
                    <option value="23:15">23:15</option>
                    <option value="23:30">23:30</option>
                    <option value="23:45">23:45</option>
                </select>                                
            </div>
            <div class="w-full mt-2 flex-1">
                <label for="datepicker" class="block text-sm font-medium text-gray-700">Start Date</label>
                <div id="basic-datepicker">
                    <div class="preview">
                        <input type="text" name="start_date" id="start_date" class="datepicker form-control" data-single-mode="true">
                    </div>
                </div>
            </div>
            <div class="w-full mt-2 flex-1">
                <label for="datepicker" class="block text-sm font-medium text-gray-700">End Date</label>
                <div id="basic-datepicker">
                    <div class="preview">
                        <input type="text" name="end_date" id="end_date" class="datepicker form-control" data-single-mode="true">
                    </div>
                </div>
            </div>
            {{-- <div class="w-full mt-3 xl:mt-0 flex-1">
                <label for="datepicker" class="block text-sm font-medium text-gray-700">Remarks</label>
                <textarea name="comments" class="editor"></textarea>
                <div class="form-help text-right">Maximum character 0/2000</div>
            </div> --}}
            <input type="hidden" name="video_link" id="peer2_link_id">
            <div class="flex justify-end mt-3">
                <button type="submit" class="btn btn-primary"> 
                    <i data-lucide="save" class="w-4 h-4"></i>
                    &nbsp;Save
                </button>
            </div>
        </form>

        <ul id="jsonAppointmentList" class="mt-4 space-y-2">

        </ul>
    </div>
</div>