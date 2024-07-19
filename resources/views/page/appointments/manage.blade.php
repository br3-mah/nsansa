@extends('layouts.app')
@section('content')
<div class="content">
    <h2 class="text-lg font-medium mr-auto flex space-x-6 mt-8">
        <i data-lucide="calendar-days" class="w-6 h-6"></i>
        &nbsp;
        <span>
            <a href="{{ route('appointment') }}" class="intro-x btn shadow-md mr-2">
                <i data-lucide="chevron-left" class="w-4 h-4"></i> 
            </a>Manage Appointments
        </span>
        {{-- <a href="{{ route('appointment') }}" class="btn btn-sm btn-primary"> 
            Schedule Appointments
        </a>  --}}
    </h2>
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
    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="intro-y col-span-12 flex flex-wrap xl:flex-nowrap items-center mt-2">
            <div class="sm:w-auto">
                <form class="flex w-full gap-2" action="{{ route('appointments.filter') }}" method="GET">
                    <div class="w-48 relative text-slate-500">
                        <input type="date" name="start_date" class="form-control w-48 box pr-10">
                    </div>
                    <div class="w-48 relative text-slate-500">
                        <input type="date" name="end_date" class="form-control w-48 box pr-10"> 
                    </div>
                    <button type="submit" class="btn btn-primary btn-sm">
                        <i data-lucide="search" class="w-4 h-4"></i> 
                    </button>
                </form>
                {{-- <select class="form-select box ml-2">
                    <option>Latest Activities</option>
                    <option>Incomplete</option>
                    <option>Completed</option>
                </select> --}}
            </div>
            {{-- <div class="hidden xl:block mx-auto text-slate-500">Showing 1 to 2 of 2 entries</div> --}}
            <div class="w-full xl:w-auto flex items-center mt-3 xl:mt-0">
                @hasrole('counselor')
                <a href="" class="btn btn-primary shadow-md mr-2"> <i data-lucide="plus" class="w-4 h-4 mr-2"></i> New Activity </a>
                @endhasrole
            </div>
        </div>
        {{-- @dd($activities  == []) --}}
        <!-- BEGIN: Data List -->
        <div class="intro-y col-span-12 overflow-auto 2xl:overflow-visible">
            @if(!empty($appointments->toArray()))
            <table class="table table-report -mt-2">
                <thead>
                    <tr>
                        {{-- <th class="whitespace-nowrap">
                            <input class="form-check-input" type="checkbox">
                        </th> --}}
                        {{-- <th class="whitespace-nowrap">INVOICE</th> --}}
                        <th class="whitespace-nowrap">TITLE</th>
                        <th class="text-center whitespace-nowrap">START DATE</th>
                        <th class="text-center whitespace-nowrap">CLOSE DATE</th>
                        <th class="whitespace-nowrap">START TIME</th>
                        <th class="whitespace-nowrap">CLOSING TIME</th>
                        <th class="whitespace-nowrap">COUNSELOR</th>
                        <th class="whitespace-nowrap">PATIENT(S)</th>
                        {{-- <th class="text-right whitespace-nowrap">
                            <div class="pr-16">REMARKS</div>
                        </th> --}}
                        <th class="text-center whitespace-nowrap">ACTIONS</th>
                    </tr>
                </thead>
                <tbody>
                    
                    @forelse ($appointments as $appointment)
                    
                        <tr class="intro-x">
                            {{-- <td class="w-10">
                                <input class="form-check-input" type="checkbox">
                            </td> --}}
                            <a href="">
                                <td class="w-40">
                                    {{ $appointment->title }}           
                                </td>
                                <td class="text-center">
                                    {{ $appointment->start_date }} 
                                </td>
                                <td class="text-center">
                                    {{ $appointment->end_date }} 
                                </td>
                                <td class="w-40 !py-4"> 
                                    {{ $appointment->start_time ?? '' }}
                                </td>
                                <td class="w-40 !py-4"> 
                                    {{ $appointment->end_time ?? '' }}
                                </td>
                                <td>
                                    <div class="flex justify-center items-center">
                                        @if (App\Models\Appointment::appointmentCounselor($appointment->id) !== null)
                                            {{ App\Models\Appointment::appointmentCounselor($appointment->id)->fname.' '.App\Models\Appointment::appointmentCounselor($appointment->id)->lname }}
                                        @else
                                            <p>No Assigned</p>
                                        @endif
                                    </div>
                                </td>
                                <td class="table-report__appion">
                                    <div class="flex justify-center items-center">
                                        @if (App\Models\Appointment::appointmentPatients($appointment->id) !== null)
                                            @foreach (App\Models\Appointment::appointmentPatients($appointment->id) as $patient)
                                            {{ $patient['fname'].' '.$patient['lname'] }}

                                            @endforeach
                                        @else
                                            <p>No Assigned</p>
                                        @endif
                                    </div>
                                </td>
                                <td class="table-report__appion flex justify-center items-center space-x-3 justify-end">
                                    @if($appointment->status !== 0)
                                        <a title="Delete Permanently"  href="{{ route('appointment.destroy', ['id' => $appointment->id ]) }}" class="tooltip btn btn-secondary text-white">
                                            <i data-lucide="trash" class="w-4 h-4 text-danger"></i> 
                                        </a>
                                        <a title="Edit Appointment" href="{{ route('appointment.edit', ['id' => $appointment->id ]) }}" class="tooltip btn mx-1">
                                            <i data-lucide="edit-2" class="w-4 h-4 text-green-500"></i> 
                                        </a>
                                    @endif
                                </td>
                            </a>
                        </tr>                        
                    @empty
                 
                    @endforelse
                    
                </tbody>
            </table>
            @else 
            <div class="items-center justify-center centered" style="text-align: center">
                <img class="intro-y mx-auto" width="300" src="https://cdni.iconscout.com/illustration/free/thumb/empty-box-4085812-3385481.png">
                <h3>No Activties Yet</h3>
            </div>
            @endif
        </div>
        <!-- END: Data List -->
        @if($app  != [])
        <!-- BEGIN: Pagination -->
        <div class="intro-y col-span-12 block">
            <nav class="w-full sm:w-auto sm:mr-auto block">
                <ul class="pagination">
                    {{-- {!! $activities->links('pagination::tailwind') !!} --}}
                    {{-- <li class="page-item">
                        <a class="page-link" href="#"> <i class="w-4 h-4" data-lucide="chevrons-left"></i> </a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#"> <i class="w-4 h-4" data-lucide="chevron-left"></i> </a>
                    </li>
                    <li class="page-item"> <a class="page-link" href="#">...</a> </li>
                    <li class="page-item"> <a class="page-link" href="#">1</a> </li>
                    <li class="page-item active"> <a class="page-link" href="#">2</a> </li>
                    <li class="page-item"> <a class="page-link" href="#">3</a> </li>
                    <li class="page-item"> <a class="page-link" href="#">...</a> </li>
                    <li class="page-item">
                        <a class="page-link" href="#"> <i class="w-4 h-4" data-lucide="chevron-right"></i> </a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#"> <i class="w-4 h-4" data-lucide="chevrons-right"></i> </a>
                    </li> --}}
                </ul>
            </nav>
            {{-- <select class="w-20 form-select box mt-3 sm:mt-0">
                <option>10</option>
                <option>25</option>
                <option>35</option>
                <option>50</option>
            </select> --}}
        </div>
        <!-- END: Pagination -->
        @endif
    </div>
    <!-- BEGIN: Delete Confirmation Modal -->
    <div id="delete-confirmation-modal" class="modal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body p-0">
                    <div class="p-5 text-center">
                        <i data-lucide="x-circle" class="w-16 h-16 text-danger mx-auto mt-3"></i> 
                        <div class="text-3xl mt-5">Are you sure?</div>
                        <div class="text-slate-500 mt-2">
                            Do you really want to delete these records? 
                            <br>
                            This process cannot be undone.
                        </div>
                    </div>
                    <div class="px-5 pb-8 text-center">
                        <button type="button" data-tw-dismiss="modal" class="btn btn-outline-secondary w-24 mr-1">Cancel</button>
                        <button type="button" class="btn btn-danger w-24">Delete</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END: Delete Confirmation Modal -->
</div>
@endsection
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
    $('.js-switch').change(function () {
        let status = $(this).prop('checked') === true ? 0 : 1;
        let activity_id = $(this).data('id');

        console.log(activity_id);
        $.ajax({
            type: "GET",
            dataType: "json",
            cache: false,
            url: '{{ route('activity.status') }}',
            data: {'status': status, 'act_id': activity_id},
            success: function (data) {
                console.log(data.message);
            }
        });
    });
});
</script>