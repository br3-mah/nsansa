<!-- Add Availability Sidebar -->
<div class="sidebar w-full" id="add-time-sidebar">
    <!-- Close button for the sidebar -->
    <div class="">
        <button class="btn btn-primary" id="close-sidebar">X</button>
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