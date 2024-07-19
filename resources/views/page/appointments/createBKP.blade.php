@extends('layouts.app')
@section('content')
<style>
    /* Add visible effects for checked checkboxes */
    input[type="checkbox"]:checked + span {
        padding: 4%;
    }
    input[type="checkbox"]:checked + span {
        color: white; /* Change text color when checked */
        background-color: #065777; 
        padding: 4%;
        border-radius:2px;
    }
</style>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
<div class="content">
    <div class="intro-y mt-8 flex justify-content-between justify-center">
        <h2 class="text-lg font-medium mr-auto flex space-x-6">
            <i data-lucide="calendar" class="w-6 h-6"></i>
            &nbsp;
            <span>Appointments</span>
        </h2>
        @hasrole('admin')
        <div class="w-full sm:w-auto flex mt-4 sm:mt-0">
            <button  class="add-time-trigger btn btn-danger shadow-md mr-2" data-sidebar="setapp-sidebar" data-sidebar="setapp-sidebar"><i data-lucide="plus" class="w-4 h-4 mr-2"></i>Set Appointment</button>
        </div>
        @endhasrole
        @hasrole('counselor')
        <div class="w-full sm:w-auto flex mt-4 sm:mt-0">
            <button  class="add-time-trigger btn btn-primary shadow-md mr-2" data-sidebar="add-time-sidebar" data-sidebar="add-time-sidebar"><i data-lucide="plus" class="w-4 h-4 mr-2"></i>Add Available Time</button>
        </div>
        @endhasrole
    </div>
    @if (Session::has('attention'))
    <div class="intro-x alert alert-secondary w-full alert-dismissible justify-center show flex items-center mb-2" role="alert"> 
        <i data-lucide="alert-octagon" class="w-6 h-6 mr-2"></i> 
        {{ Session::get('attention') }}
        <button type="button" class="btn-close" data-tw-dismiss="alert" aria-label="Close"> 
            <i data-lucide="x" class="w-4 h-4"></i> 
        </button> 
    </div>
    @elseif (Session::has('error_msg'))
    <div class="intro-x alert alert-danger w-full alert-dismissible justify-center show flex items-center mb-2" role="alert"> 
        <i data-lucide="alert-octagon" class="w-6 h-6 mr-2"></i> 
        {{ Session::get('error_msg') }}
        <button type="button" class="btn-close" data-tw-dismiss="alert" aria-label="Close"> 
            <i data-lucide="x" class="w-4 h-4"></i> 
        </button> 
    </div>
    @endif
    <div class="grid grid-cols-12 gap-5 mt-5">
        <!-- BEGIN: Calendar Side Menu -->
        <div class="col-span-12 xl:col-span-4 2xl:col-span-3">
            <div class="box p-5 intro-y">
                @hasanyrole(['counselor'])
                <a href="{{ route('appointment.create', ['type' => 'video']) }}" class="btn btn-primary w-full mt-2"> <i class="w-4 h-4 mr-2" data-lucide="video"></i> New Video Call Appointment </a>
                {{-- <a href="{{ route('appointment.create', ['type' => 'phone']) }}" class="btn btn-primary w-full mt-2"> <i class="w-4 h-4 mr-2" data-lucide="phone-call"></i> Add New Phone Call Appointment </a> --}}
                @endhasanyrole
                @hasrole('patient')
                <button data-sidebar="check-time-sidebar" data-sidebar="check-time-sidebar" href="#" class="check-time-trigger btn btn-primary w-full mt-2"> <i class="w-4 h-4 mr-2" data-lucide="video"></i> Make an Appointment <button>
                @endhasanyrole
                <div class="border-t border-b border-slate-200/60 dark:border-darkmode-400 mt-6 mb-5 py-3" id="calendar-events">
                    
                    @forelse ($appointments as $appointment)
                    
                        @if (!empty($appointments->toArray()))
                        <div class="items-center flex transition rounded-md p-2 duration-300 ease-in-out hover:bg-slate-100 dark:hover:bg-darkmode-400">
                            <div class="event p-3 -mx-3 flex items-center">
                                {{-- @if($appointment->status !== 0)
                                <div class="w-2 h-2 bg-pending rounded-full"></div>
                                @endif --}}
                                <a target="_blank" href="{{ route('appointment.show', ['id' => $appointment->id ]) }}">
                                    <div class="pr-10">
                                        <div class="event__title">
                                            {{ $appointment->title }}
                                            @if($appointment->status == 0)
                                            (<span class="text-danger">Cancelled</span>)
                                            @endif
                                        </div>
                                    
                                        <small class="text-slate-500 text-xs mt-0.5"> 
                                            {{ $appointment->start_date }} 
                                            <span class="mx-1">•</span>{{ $appointment->start_time ?? '' }}
                                        </small>
                                        {{-- <a title="view" href="{{ route('appointment.activate', ['id' => $appointment->id ]) }}" class="flex items-center absolute top-0 bottom-0 my-auto right-0" href=""> <i data-lucide="eye" class="w-4 h-4 text-slate-500"></i> </a> --}}
                                    </div>
                                </a>
                            </div>
                            {{-- <a class="flex items-center absolute top-0 bottom-0 right-2" href=""> <i data-lucide="edit" class="w-4 h-4 text-slate-500"></i> </a> --}}
                            
                            <div class="flex items-center space-x-3 justify-end">
                                {{-- @if($appointment->status == 0)
                                <a title="Reactivate" href="{{ route('appointment.activate', ['id' => $appointment->id ]) }}" class="flex zoom-in tooltip items-center absolute top-0 bottom-0 my-auto right-0" href=""> <i data-lucide="redo" class="w-4 h-4 text-slate-500"></i> </a>
                                @else
                                <a title="Cancel"  href="{{ route('appointment.deactivate', ['id' => $appointment->id ]) }}" class="flex zoom-in tooltip items-center absolute top-0 bottom-0 my-auto right-0" href=""> 
                                    <i data-lucide="x" class="w-4 h-4 text-slate-500"></i> 
                                </a>
                                @endif --}}
                                @if($appointment->status !== 0)
                                    <a title="Delete Permanently"  href="{{ route('appointment.destroy', ['id' => $appointment->id ]) }}" class="tooltip btn btn-secondary text-white">
                                        <i data-lucide="trash" class="w-4 h-4 text-danger"></i> 
                                    </a>
                                    <a title="Edit Appointment" href="{{ route('appointment.edit', ['id' => $appointment->id ]) }}" class="tooltip btn mx-1">
                                        <i data-lucide="edit-2" class="w-4 h-4 text-green-500"></i> 
                                    </a>
                                    @if($appointment->guests !== null)
                                    <a href="/therapy-session-appointment/{{ auth()->user()->id }}/{{ $appointment->guests->first()->chat_id ?? 0 }}/sender/patient/{{ $appointment->video_link }}" title="Join Video Call" class="tooltip btn btn-danger text-white">
                                        <i data-lucide="video" class="w-4 h-4 text-white"></i> 
                                    </a>
                                    @endif
                                @endif
                            </div>
                        </div>
                        @endif
                    @empty
                    <div class="text-slate-500 p-3 text-center hidden" id="calendar-no-events">No Appointments Made</div>
                    @endforelse

                    
                    @if(!empty($incoming_appointments->toArray()))
                    {{-- @dd($incoming_appointments->toArray()) --}}
                    @forelse ($incoming_appointments as $app)
                    @if($app->appointment != null)
                    <div class="relative items-center flex transition rounded-md p-2">
                        <div class="event p-3 -mx-3 {{  $app->appointment->status == 0 ? 'disabled bg-slate-200 italic' : 'cursor-pointer' }} flex items-center">
                            {{-- @if($app->appointment->status != 0)
                            <div class="w-2 h-2 bg-pending rounded-full mr-3"></div>
                            @endif --}}
                            <a target="_blank" href="{{ route('appointment.show', ['id' => $app->appointment->id ]) }}">
                                <div class="pr-10">
                                    <div class="event__title">
                                        {{ $app->appointment->title }}
                                        @if($app->appointment->status == 0)
                                        (<span class="text-danger">Cancelled</span>)
                                        @endif
                                    </div>
                                
                                    <div class="text-slate-500 text-xs mt-0.5"> 
                                        <!-- <span class="event__days">2</span>--> 
                                        {{ $app->appointment->start_date }} <span class="mx-1">•</span>{{ $app->appointment->start_time ?? '' }}
                                    </div>
                                    {{-- <a title="view" href="{{ route('appointment.activate', ['id' => $appointment->id ]) }}" class="flex items-center absolute top-0 bottom-0 my-auto right-0" href=""> <i data-lucide="eye" class="w-4 h-4 text-slate-500"></i> </a> --}}
                                </div>
                            </a>
                        </div>                        
                        <div class="flex items-center space-x-3 justify-end">
                            {{-- @if($appointment->status == 0)
                            <a title="Reactivate" href="{{ route('appointment.activate', ['id' => $appointment->id ]) }}" class="flex zoom-in tooltip items-center absolute top-0 bottom-0 my-auto right-0" href=""> <i data-lucide="redo" class="w-4 h-4 text-slate-500"></i> </a>
                            @else
                            <a title="Cancel"  href="{{ route('appointment.deactivate', ['id' => $appointment->id ]) }}" class="flex zoom-in tooltip items-center absolute top-0 bottom-0 my-auto right-0" href=""> 
                                <i data-lucide="x" class="w-4 h-4 text-slate-500"></i> 
                            </a>
                            @endif --}}
                            @if($app->appointment->status == 1)
                            {{-- <a title="Delete Permanently"  href="{{ route('appointment.destroy', ['id' => $app->appointment->id ]) }}" class="btn btn-secondary text-white">
                                <i data-lucide="trash" class="w-4 h-4 text-danger"></i> 
                            </a> --}}
                            {{-- <a title="Edit" href="{{ route('appointment.edit', ['id' => $app->appointment->id ]) }}" class="btn mx-1">
                                <i data-lucide="edit-2" class="w-4 h-4 text-green-500"></i> 
                            </a> --}}
                            <a href="/therapy-session-appointment/{{ auth()->user()->id }}/{{ $app->chat_id ?? 0 }}/receiver/patient/{{ $app->appointment->video_link }}" title="Join Video Call" class="btn btn-danger text-white">
                                <i data-lucide="video" class="w-4 h-4 text-white"></i> 
                            </a>
                            @else
                            <a href="#" style="background-color: #393b3b" title="Waiting for counselor to accept" class="btn btn-secondary text-white">
                                <i data-lucide="video" class="w-4 h-4 text-white"></i> 
                            </a>
                            @endif
                        </div>
                    </div>
                    @endif
                    @empty
                    <div class="text-slate-500 p-3 text-center hidden" id="calendar-no-events">No Appointments Made</div>
                    
                    @endforelse
                    @else 
                    <div class="items-center justify-center centered" style="text-align: center">
                            {{-- <img class="intro-y mx-auto" width="300" src="https://cdni.iconscout.com/illustration/free/thumb/empty-box-4085812-3385481.png">
                            <h3>No Appointments</h3> --}}
                    </div>
                    @endif
                    
                </div>
                {{-- <div class="form-check form-switch flex">
                    <label class="form-check-label" for="checkbox-events">Notify me</label>
                    <input class="show-code form-check-input ml-auto" type="checkbox" id="checkbox-events">
                </div> --}}
            </div>
        </div>
        <!-- END: Calendar Side Menu -->
        <!-- BEGIN: Calendar Content -->
        <div class="col-span-12 xl:col-span-8 2xl:col-span-9">
            <div class="box p-5">
                <div class="full-calendar" id="calendar"></div>
            </div>
        </div>
        <!-- END: Calendar Content -->
    </div>
</div>


<!-- Add Availability Sidebar -->
<div class="sidebar" id="add-time-sidebar">
    <!-- Close button for the sidebar -->
    <div class="close-sidebar">
        <button class="btn btn-primary" id="close-sidebar">Close</button>
    </div>
    <!-- Sidebar content goes here -->
    <div class="px-10 container mt-10 pt-8">
        <h2 class="text-lg font-semibold mb-4">Add Available Time</h2>
        <form action="{{ route('availabilities.store') }}" method="POST" id="formAvailability" onsubmit="submitForm(); return false;">
            @csrf
            <div class="mb-4">
                <label for="datepicker" class="block text-sm font-medium text-gray-700">Select a Date:</label>
                <input type="date" id="datepicker" name="av_date" class="mt-1 p-2 block w-full rounded-md border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                
            </div>
            <div class="mb-4">
                <label for="timepicker" class="block text-sm font-medium text-gray-700">Select a Opening Time:</label>
                <input type="text" id="timepicker" name="opening_time" class="flatpickr mt-1 p-2 block w-full rounded-md border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                <input type="hidden" name="user_id" value="{{auth()->user()->id}}">
            </div>
            <div class="mb-4">
                <label for="timepicker" class="block text-sm font-medium text-gray-700">Select a Closing Time:</label>
                <input type="text" id="timepicker" name="closing_time" class="flatpickr mt-1 p-2 block w-full rounded-md border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
               
            </div>
            <div class="flex justify-end">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </form>

        <ul id="availabilityList" class="mt-4 space-y-2">

        </ul>
    </div>
</div>

<!-- Check Availability Sidebar -->
<div class="sidebar" id="check-time-sidebar">
    <!-- Close button for the sidebar -->
    <div class="close-sidebar">
        <button class="btn btn-primary" id="close-sidebar2">Close</button>
    </div>
    <!-- Sidebar content goes here -->
    <div class="px-10 container mt-10 pt-8">
        <h2 class="text-lg font-semibold mb-4">Setup An Appointment</h2>
        <h6 class="text-xs mb-4">Fill up all the fields below:</h6>
        <form action="{{ route('appointment.save') }}" method="POST" id="formAvailability">
            @csrf
            
            <div class="w-full mt-3 xl:mt-0 flex-1">
                <input id="appointment-name" name="title" type="text" class="form-control" placeholder="Appointment Title">
                <div class="form-help text-right">Maximum character 0/70</div>
                <input type="hidden" id="_peer_link_id" name="video_link" />
            </div>
            <br>
            <label for="timepicker" class="block text-sm font-medium text-gray-700">Pick a date below:</label>

            <div class="flex py-4 gap-2">

                @if(!empty($av_dates))
                    @forelse ($av_dates as $index => $adate)
                    {{-- @dd($av_dates) --}}
                    <label class="w-1/4 relative border inline-flex items-center cursor-pointer p-3">
                        <input type="checkbox" name="setdate[]" value="{{ $adate->id }}" class="hidden absolute h-5 w-5 appearance-none bg-white border border-gray-300 rounded-md checked:bg-blue-500 checked:border-transparent focus:outline-none">
                        <span class="pl-2 transition-colors duration-300" id="thur-text">
                            <h3 class="font-bold">
                                @php 
                                    $humanReadableDate = date("F j, Y", strtotime($adate->av_date));
                                    echo $humanReadableDate;
                                @endphp
                            </h3>
                            <p>{{ $adate->opening_time.' to '.$adate->closing_time }}</p>
                        </span>
                        {{-- <span class="pl-2 transition-colors duration-300" id="thur-text{{ $index }}">THUR 24/2023</span> --}}
                    </label>
                    @empty
                        <p>Seems the counselor is a bit preoccupied at the moment. </p>
                    @endforelse
                    <br><br>
                @else
                    <p>You have not been assigned to any counselor yet. </p>
                @endif
            </div>
            <br>
            <br>
            <div class="w-full">
                <button type="submit" class="btn btn-primary">Create</button>
            </div>
        </form>

        <ul id="checkAvailabilityList" class="mt-4 space-y-2">

        </ul>
    </div>
</div>

@include('page.appointments._partials.setapp-sidebar')
{{-- @include('page.modals.create-appointment-modal') --}}
<script>
    var evnt = @json($calendar);
</script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script src="https://unpkg.com/peerjs@1.4.7/dist/peerjs.min.js"></script>
<script th:inline="javascript">
$(document).ready(function() {
      
        const peer_field = document.getElementById('_peer_link_id');
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
        // -------------------- Open the sidebar when clicking "Add Available Time"
        $(".add-time-trigger").on("click", function (e) {
            e.preventDefault();
            var sidebarId = $(this).data("sidebar");
            $("#" + sidebarId).css("transform", "translateX(0)");
        });

        // Close the sidebar when clicking the close button
        $("#close-sidebar").on("click", function () {
            var sidebarId = $(this).closest(".sidebar").attr("id");
            $("#" + sidebarId).css("transform", "translateX(100%)");
        });

        // ------------------ Open the sidebar when clicking "Add Available Time"
        $(".check-time-trigger").on("click", function (e) {
            e.preventDefault();
            var sidebarId = $(this).data("sidebar");
            $("#" + sidebarId).css("transform", "translateX(0)");
        });

        // Close the sidebar when clicking the close button
        $("#close-sidebar2").on("click", function () {
            var sidebarId = $(this).closest(".sidebar").attr("id");
            $("#" + sidebarId).css("transform", "translateX(100%)");
        });

        // ------------------ Open the sidebar when clicking "Set Appointment"
        $(".setapp-trigger").on("click", function (e) {
            e.preventDefault();
            var sidebarId = $(this).data("sidebar");
            $("#" + sidebarId).css("transform", "translateX(0)");
        });

        // Close the sidebar when clicking the close button
        $("#close-sidebar3").on("click", function () {
            var sidebarId = $(this).closest(".sidebar").attr("id");
            $("#" + sidebarId).css("transform", "translateX(100%)");
        });

        // ---------------------- Initialize Flatpickr for the time input field
        flatpickr("#timepicker", {
            enableTime: true,
            noCalendar: true,
            dateFormat: "H:i", // Format for displaying time (hours and minutes)
            time_24hr: true // Use 24-hour format
        });
    });

    function submitForm() {
        const form = document.getElementById("formAvailability");
        const formData = new FormData(form);

        fetch(form.getAttribute("action"), {
            method: "POST",
            body: formData,
        })
        .then((response) => response.json())
        .then((data) => {
            // Handle the response data as needed
            console.log(data.data.av_date);
            // Create a new list item
            const listItem = document.createElement("li");
            listItem.className = "border rounded p-2";

            // Build the content of the list item using the response data
            listItem.innerHTML = `
                Date: ${data.data.av_date}<br>
                Opening Time: ${data.data.opening_time}<br>
                Closing Time: ${data.data.closing_time}
            `;

            // Get the list element by its ID
            const list = document.getElementById("availabilityList");

            // Append the new list item to the list
            list.appendChild(listItem);
            // Optionally, reset the form
            form.reset();
        })
        .catch((error) => {
            // Handle any errors that occur during the fetch
            console.error(error);
        });
    }


    // Function to fetch list items from the server
    function fetchListItems() {
        fetch('{{ route("availabilities.index") }}')
        .then((response) => response.json())
        .then((data) => {
            // Get the list element by its ID
            const list = document.getElementById("availabilityList");
            // console.log(data);
            // Iterate through the fetched data and create list items
            data.data.forEach((item) => {
                // Create a new list item
                const listItem = document.createElement("li");
                listItem.className = "border rounded p-2";

                // Build the content of the list item using the fetched data
                listItem.innerHTML = `
                    Date: ${item.av_date}<br>
                    Opening Time: ${item.opening_time}<br>
                    Closing Time: ${item.closing_time}
                `;

                // Append the new list item to the list
                list.appendChild(listItem);
            });
        })
        .catch((error) => {
            // Handle any errors that occur during the fetch
            console.error(error);
        });
    }

    // Call the fetchListItems function when the page loads
    window.addEventListener("load", fetchListItems);
</script>
@endsection