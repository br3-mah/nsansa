@extends('layouts.app')
@section('content')
<style>
    /* Add visible effects for checked checkboxes */
    input[type="checkbox"] + span {
        padding: 2.5%;
        background-color: #eeeeee; 
        border-radius:3px;
        border:1px solid #065777
    }
    input[type="checkbox"]:checked + span {
        color: white; /* Change text color when checked */
        background-color: #065777; 
        padding: 2.5%;
        border-radius:3px;
    }
</style>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
<div class="content">
    <div class="intro-y mt-8 lg:flex justify-content-between justify-center">
        <h2 class="text-lg font-medium mr-auto flex space-x-6">
            <i data-lucide="calendar" class="w-6 h-6"></i>
            &nbsp;
            <span>Appointments</span>
        </h2>
        @hasrole('admin')
        <div class="w-full sm:w-auto flex mt-4 sm:mt-0">
            <a href="{{ route('appointments.manage') }}" class="btn btn-primary shadow-md mr-2"><i data-lucide="calendar" class="w-4 h-4 mr-2"></i>Manage Appointments</a>
        </div>
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
                <a href="{{ route('appointment.create', ['type' => 'phone']) }}" class="btn btn-success text-white w-full mt-2"> <i class="w-4 h-4 mr-2" data-lucide="phone-call"></i> New Phone Call Appointment </a>
                @endhasanyrole
                @hasrole('patient')
                <button data-sidebar="check-time-sidebar" data-sidebar="check-time-sidebar" href="#" class="check-time-trigger btn btn-primary w-full mt-2"> <i class="w-4 h-4 mr-2" data-lucide="video"></i> Make an Appointment <button>
                @endhasanyrole
                <div class="border-t border-b border-slate-200/60 dark:border-darkmode-400 mt-6 mb-5 py-3" id="calendar-events">
                    @hasrole('admin')
                    @include('page.appointments._partials.admin-setapp')
                    @endhasrole
                    @include('page.appointments._partials.appointments')
                    @include('page.appointments._partials.incoming-apps')
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


@include('page.appointments._partials.add-availability-sidebar')

@include('page.appointments._partials.patient-make-appointment')

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
        const peer2_field = document.getElementById('peer2_link_id');
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
            peer2_field.value = id;

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
            // HasPaid  
            var hasPaid = "{{ App\Models\Billing::has_no_bill() }}";
            // alert(hasPaid == '');
            if(hasPaid == ''){
                var sidebarId = $(this).data("sidebar");
                $("#" + sidebarId).css("transform", "translateX(0)");
            }else{
                window.location.href = "{{ route('pay') }}";
            }
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
                
        // Function to populate time slots based on the selected date
        function populateTimeSlots(dateId) {
            // Replace this with an actual AJAX request to fetch available time slots
            $.ajax({
                url: 'get-available-time-slots', // Replace with your API endpoint
                method: 'GET',
                data: { dateId: dateId }, // Include any necessary data
                dataType: 'json',
                success: function(response) {
                        console.log(response.data);
                        var availableTimeSlots = response.data; // Assuming the response contains an array of time slots

                        var selectStartTime = $("select[id=start_time_" + dateId + "]");
                        var selectStopTime = $("select[id=stop_time_" + dateId + "]");

                        // Clear previous options
                        selectStartTime.empty();
                        selectStopTime.empty();

                        // Populate start time options
                        $.each(availableTimeSlots, function(index, timeSlot) {
                            selectStartTime.append($('<option>', {
                                value: timeSlot,
                                text: timeSlot
                            }));
                        });

                        // Populate stop time options
                        $.each(availableTimeSlots, function(index, timeSlot) {
                            selectStopTime.append($('<option>', {
                                value: timeSlot,
                                text: timeSlot
                            }));
                        });
                },
                error: function(xhr, status, error) {
                    console.error("AJAX Error: " + error);
                }
            });
        }


        // Event listener for checkbox changes
        $("input[type=checkbox]").change(function() {
            var dateId = $(this).val();
            populateTimeSlots(dateId);
        });

        // Function to toggle visibility of date_selector divs
        function toggleDateSelectors(dateId) {
            var checkbox = $("#date_picked" + dateId);
            var dateSelector1 = $("#date_selector" + dateId);
            var dateSelector2 = $("#date_selector2" + dateId);

            if (checkbox.prop("checked")) {
                dateSelector1.show();
                dateSelector2.show();
            } else {
                dateSelector1.hide();
                dateSelector2.hide();
            }
        }

        // Event listener for checkbox changes
        $("input[type=checkbox]").change(function() {
            var dateId = $(this).val();
            toggleDateSelectors(dateId);
        });

        // Initially hide all date_selector divs
        $("div[id^='date_selector']").hide();

        // Optionally, toggle visibility for any pre-checked checkboxes
        $("input[type=checkbox]:checked").each(function() {
            var dateId = $(this).val();
            toggleDateSelectors(dateId);
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