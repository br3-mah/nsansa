@extends('layouts.app')
@section('content')
<div class="content">
    <div class="intro-y flex items-center mt-8">
        <div class="text-lg font-medium flex mr-auto">
            <i data-lucide="calendar" class="w-6 h-6"></i>
            &nbsp;
            <span class="bloack">
                <p>Create {{ request()->get('type') }} Appointment</p>
                <p class="capitalize text-sm font-medium mr-auto">
                    {{ request()->get('type') }} Appointment
                </p>
            </span>
        </div>
        <a href="{{ route('appointment') }}" class="intro-x btn shadow-md mr-2">Back to Appointments</a>
    </div>

    <div class="intro-y flex flex-col sm:flex-row items-center mt-2">
        <div class="col-span-12 w-full">
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
            <form style="max-width: 100%" class="col-span-12" method="POST" action="{{ route('appointment.store') }}">
                @csrf
                <div class="intro-y box p-5 mt-5">
                    <div class="border border-slate-200/60 dark:border-darkmode-400 rounded-md p-5">
                        <div class="font-medium text-base flex items-center border-b border-slate-200/60 dark:border-darkmode-400 pb-5"> <i data-lucide="chevron-down" class="w-4 h-4 mr-2"></i> Appointment Information </div>
                        <div class="mt-5">
                            <div class="form-inline items-start flex-col xl:flex-row mt-5 pt-5 first:mt-0 first:pt-0">
                                <div class="form-label xl:w-64 xl:!mr-10">
                                    <div class="text-left">
                                        <div class="flex items-center">
                                            <div class="font-medium">Appointment Title</div>
                                            <div class="ml-2 px-2 py-0.5 bg-slate-200 text-slate-600 dark:bg-darkmode-300 dark:text-slate-400 text-xs rounded-md">Required</div>
                                        </div>
                                        {{-- <div class="leading-relaxed text-slate-500 text-xs mt-3"> Include min. 40 characters to make it more attractive and easy for buyers to find, consisting of product type, brand, and information such as color, material, or type. </div> --}}
                                    </div>
                                </div>
                                <div class="w-full mt-3 xl:mt-0 flex-1">
                                    <input id="appointment-name" name="title" type="text" class="form-control" placeholder="Appointment Title">
                                    <div class="form-help text-right">Maximum character 0/70</div>
                                </div>
                            </div>
                            {{-- <div class="form-inline items-start flex-col xl:flex-row mt-5 pt-5 first:mt-0 first:pt-0">
                                <div class="form-label xl:w-64 xl:!mr-10">
                                    <div class="text-left">
                                        <div class="flex items-center">
                                            <div class="font-medium">Subject</div>
                                            <div class="ml-2 px-2 py-0.5 bg-slate-200 text-slate-600 dark:bg-darkmode-300 dark:text-slate-400 text-xs rounded-md">Required</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="w-full mt-3 xl:mt-0 flex-1">
                                    <select id="category" class="form-select">
                                        <option value="Fashion &amp; Make Up">Stress Management</option>
                                        <option value="Sport &amp; Outdoor">Anxiety Disorder</option>
                                        <option value="Hobby">Grieving</option>
                                    </select>
                                </div>
                            </div> --}}
                            <div class="form-inline items-start flex-col xl:flex-row mt-5 pt-5 first:mt-0 first:pt-0">
                                <div class="form-label xl:w-64 xl:!mr-10">
                                    <div class="text-left">
                                        <div class="flex items-center">
                                            <div class="font-medium">Invite Guests</div>
                                        </div>
                                        <div class="leading-relaxed text-slate-500 text-xs mt-3"> You can choose from the existing user list. </div>
                                    </div>
                                </div>
                                <div class="w-full mt-3 xl:mt-0 flex-1">
                                    <select name="guest_id[]" id="subcategory" data-placeholder="Guest" class="tom-select w-full" multiple>
                                        {{-- <option value="Fashion &amp; Make Up">Fashion &amp; Make Up</option> --}}
                                        @forelse ($users as $u)
                                            @if($u->id != auth()->user()->id)
                                                <option value="{{ $u->id }}">{{ $u->fname.' '.$u->lname }}</option>
                                            @endif
                                        @empty
                                            
                                        @endforelse
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END: Product Information -->
                <!-- BEGIN: Product Detail -->
                <div class="intro-y box p-5 mt-5">
                    <div class="border border-slate-200/60 dark:border-darkmode-400 rounded-md p-5">
                        <div class="font-medium text-base flex items-center border-b border-slate-200/60 dark:border-darkmode-400 pb-5"> <i data-lucide="chevron-down" class="w-4 h-4 mr-2"></i> Appointment Detail </div>
                        <div class="mt-5">
                            <div class="form-inline items-start flex-col xl:flex-row mt-5 pt-5 first:mt-0 first:pt-0">
                                <div class="form-label xl:w-64 xl:!mr-10">
                                    <div class="text-left">
                                        <div class="flex items-center">
                                            <div class="font-medium">Start Time</div>
                                            {{-- <div class="ml-2 px-2 py-0.5 bg-slate-200 text-slate-600 dark:bg-darkmode-300 dark:text-slate-400 text-xs rounded-md">Required</div> --}}
                                        </div>
                                    </div>
                                </div>
                                <div class="w-full mt-3 xl:mt-0 flex-1">
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
                            </div>
                            <div class="form-inline items-start flex-col xl:flex-row mt-5 pt-5 first:mt-0 first:pt-0">
                                <div class="form-label xl:w-64 xl:!mr-10">
                                    <div class="text-left">
                                        <div class="flex items-center">
                                            <div class="font-medium">Closing Time</div>
                                            {{-- <div class="ml-2 px-2 py-0.5 bg-slate-200 text-slate-600 dark:bg-darkmode-300 dark:text-slate-400 text-xs rounded-md">Required</div> --}}
                                        </div>
                                    </div>
                                </div>
                                <div class="w-full mt-3 xl:mt-0 flex-1">
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
                            </div>
                            <div class="form-inline items-start flex-col xl:flex-row mt-5 pt-5 first:mt-0 first:pt-0">
                                <div class="form-label xl:w-64 xl:!mr-10">
                                    <div class="text-left">
                                        <div class="flex items-center">
                                            <div class="font-medium">Start Date</div>
                                            {{-- <div class="ml-2 px-2 py-0.5 bg-slate-200 text-slate-600 dark:bg-darkmode-300 dark:text-slate-400 text-xs rounded-md">Required</div> --}}
                                        </div>
                                    </div>
                                </div>
                                <div class="w-full mt-3 xl:mt-0 flex-1">
                                    <div id="basic-datepicker">
                                        <div class="preview">
                                            <input type="text" name="start_date" id="start_date" class="datepicker form-control" data-single-mode="true">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-inline items-start flex-col xl:flex-row mt-5 pt-5 first:mt-0 first:pt-0">
                                <div class="form-label xl:w-64 xl:!mr-10">
                                    <div class="text-left">
                                        <div class="flex items-center">
                                            <div class="font-medium">End Date</div>
                                            {{-- <div class="ml-2 px-2 py-0.5 bg-slate-200 text-slate-600 dark:bg-darkmode-300 dark:text-slate-400 text-xs rounded-md">Required</div> --}}
                                        </div>
                                    </div>
                                </div>
                                <div class="w-full mt-3 xl:mt-0 flex-1">
                                    <div id="basic-datepicker">
                                        <div class="preview">
                                            <input type="text" name="end_date" id="end_date" class="datepicker form-control" data-single-mode="true">
                                        </div>
                                    </div>
                                </div>
                                <input type="hidden" id="user_id" value="{{ Auth::user()->id }}" name="user_id" class="form-control"/>
                                <input type="hidden" id="type" value="{{ request()->get('type') }}" name="type" class="form-control"/>
                                <input type="hidden" id="status" value="1" name="status" class="form-control"/>

                            </div>
                            {{-- <div class="form-inline items-start flex-col xl:flex-row mt-5 pt-5 first:mt-0 first:pt-0">
                                <div class="form-label xl:w-64 xl:!mr-10">
                                    <div class="text-left">
                                        <div class="flex items-center">
                                            <div class="font-medium">Condition</div>
                                            <div class="ml-2 px-2 py-0.5 bg-slate-200 text-slate-600 dark:bg-darkmode-300 dark:text-slate-400 text-xs rounded-md">Required</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="w-full mt-3 xl:mt-0 flex-1">
                                    <div class="flex flex-col sm:flex-row">
                                        <div class="form-check mr-4">
                                            <input id="condition-new" class="form-check-input" type="radio" name="horizontal_radio_button" value="horizontal-radio-chris-evans">
                                            <label class="form-check-label" for="condition-new">New</label>
                                        </div>
                                        <div class="form-check mr-4 mt-2 sm:mt-0">
                                            <input id="condition-second" class="form-check-input" type="radio" name="horizontal_radio_button" value="horizontal-radio-liam-neeson">
                                            <label class="form-check-label" for="condition-second">Second</label>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}
                            <div class="form-inline items-start flex-col xl:flex-row mt-5 pt-5 first:mt-0 first:pt-0">
                                <div class="form-label xl:w-64 xl:!mr-10">
                                    <div class="text-left">
                                        <div class="flex items-center">
                                            <div class="font-medium">Comments & Notes</div>
                                            {{-- <div class="ml-2 px-2 py-0.5 bg-slate-200 text-slate-600 dark:bg-darkmode-300 dark:text-slate-400 text-xs rounded-md">Required</div> --}}
                                        </div>
                                        <div class="leading-relaxed text-slate-500 text-xs mt-3">
                                            {{-- <div>Make sure the product description provides a detailed explanation of your product so that it is easy to understand and find your product.</div> --}}
                                            {{-- <div class="mt-2">It is recommended not to enter info on mobile numbers, e-mails, etc. into the product description to protect your personal data.</div> --}}
                                        </div>
                                    </div>
                                </div>
                                <div class="w-full mt-3 xl:mt-0 flex-1">
                                    <textarea name="comments" class="editor"></textarea>
                                    {{-- <div class="form-help text-right">Maximum character 0/2000</div> --}}
                                </div>
                            </div>
                            {{-- <div class="form-inline items-start flex-col xl:flex-row mt-5 pt-5 first:mt-0 first:pt-0">
                                <div class="form-label xl:w-64 xl:!mr-10">
                                    <div class="text-left">
                                        <div class="flex items-center">
                                            <div class="font-medium">Product Video</div>
                                        </div>
                                        <div class="leading-relaxed text-slate-500 text-xs mt-3"> Add a video so that buyers are more interested in your product. <a href="https://themeforest.net/item/midone-jquery-tailwindcss-html-admin-template/26366820" class="text-primary font-medium" target="blank">Learn more.</a> </div>
                                    </div>
                                </div>
                                <div class="w-full mt-3 xl:mt-0 flex-1">
                                    <button class="btn btn-outline-secondary w-40"> <i data-lucide="plus" class="w-4 h-4 mr-2"></i> Add Video URL </button>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                </div>
                <input type="hidden" name="video_link" id="peer_link_id">
                <div class="flex justify-end flex-col md:flex-row gap-2 mt-5">
                    <button type="submit" class="btn py-3 btn-primary w-full md:w-52">Save & Send</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://unpkg.com/peerjs@1.4.7/dist/peerjs.min.js"></script>
<script th:inline="javascript">
$(document).ready(function() {
      
    const peer_field = document.getElementById('peer_link_id');
    var peer = new Peer();
    

    navigator.mediaDevices.getUserMedia({ video: false, audio: false}).then(stream =>{
          localStream = stream;
          localVideo.srcObject = localStream;
          localVideo.onloadedmetadata = () => localVideo.play();
    });

    // Generate an ID (Link)
    peer.on('open', id => {
        // Save the ID for Later User
        peer_field.value = id;

    });
});
</script>