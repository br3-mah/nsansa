@extends('layouts.app')
@section('content')
<div class="content">
    <h2 class="text-lg font-medium mr-auto flex space-x-6 mt-8">
        <i data-lucide="ticket" class="w-6 h-6"></i>
        &nbsp;
        <span>Tickets Sold</span>
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
        </div>
        <!-- BEGIN: Data List -->
        <div class="intro-y col-span-12 overflow-auto 2xl:overflow-visible">
            @if(!empty($tickets->toArray()))
            <table class="table table-report -mt-2">
                <thead>
                    <tr>
                        <th class="whitespace-nowrap">STATUS</th>
                        <th class="whitespace-nowrap">EVENT</th>
                        <th class="whitespace-nowrap">TCIKET#</th>
                        <th class="whitespace-nowrap">QTY</th>
                        <th class="text-center whitespace-nowrap">CUSTOMER NAMES</th>
                        <th class="text-center whitespace-nowrap">COMMING ON</th>
                        <th class="whitespace-nowrap">PHONE#</th>
                        <th class="whitespace-nowrap">EMAIL</th> 
                        <th class="whitespace-nowrap">AMOUNT SETTLED</th>
                        <th class="whitespace-nowrap">TXN FEE</th>
                        <th class="whitespace-nowrap">TXN RATE</th>
                        <th class="whitespace-nowrap">INITIAL AMOUNT</th>
                        <th class="whitespace-nowrap"></th>
                    </tr>
                </thead>
                <tbody>
                    
                    @forelse ($tickets as $ticket)
                    
                        <tr class="intro-x">
                                <td class="w-40 text-bold badge badge-primary text-sm">
                                    {{ $ticket->status }}
                                </td>
                                <td class="w-40 text-sm">
                                    Serenity Festival 2023
                                </td>
                                <td>
                                    <div class="text-slate-500 text-xs whitespace-nowrap mt-0.5">
                                        {{ $ticket->ticketnum ?? 'None' }}
                                    </div>
                                </td>
                                <td class="text-center">
                                    <div class="flex items-center justify-center whitespace-nowrap text-info"> 
                                         {{ $ticket->qty ?? '1' }} 
                                    </div>
                                </td>
                                <td>
                                    <div class="text-primary-500 font-extrabold text-md whitespace-nowrap mt-0.5">
                                        {{ $ticket->fname.' '.$ticket->lname }}
                                    </div>
                                </td>
                                <td>
                                    <div class="text-primary-500 font-extrabold text-md whitespace-nowrap mt-0.5">
                                        {{ $ticket->for_event_on }}
                                    </div>
                                </td>
                                <td>
                                    <div class="text-primary-500 font-bold text-xs whitespace-nowrap mt-0.5">
                                        {{ $ticket->phone }}
                                    </div>
                                </td>
                                <td>
                                    <div class="text-primary-500 font-bold text-xs whitespace-nowrap mt-0.5">
                                        {{ $ticket->email }}
                                    </div>
                                </td>
                                <td>
                                    <div class="text-success font-extrabold text-sm whitespace-nowrap mt-0.5">
                                        K{{ $ticket->actual_amount }}
                                    </div>
                                </td>
                                <td>
                                    <div class="text-slate-500  font-bold text-sm whitespace-nowrap mt-0.5">
                                        K{{ $ticket->fee_amount }}
                                    </div>
                                </td>
                                <td>
                                    <div class="text-slate-500  font-bold text-sm whitespace-nowrap mt-0.5">
                                        %{{ $ticket->trans_rate }}
                                    </div>
                                </td>
                                <td>
                                    <div class="text-slate-500  font-bold text-sm whitespace-nowrap mt-0.5">
                                        K {{ $ticket->trans_amount }}
                                    </div>
                                </td>
                                <td>
                                    <div class="text-slate-500  font-bold text-xs whitespace-nowrap mt-0.5">
                                        <a href="{{ route('ticket-status', $ticket->id) }}">View</a>
                                    </div>
                                </td>
                        </tr>                        
                    @empty
                 
                    @endforelse
                    
                </tbody>
            </table>
            @else 
            <div class="items-center justify-center centered" style="text-align: center">
                <img class="intro-y mx-auto" width="300" src="https://cdni.iconscout.com/illustration/free/thumb/empty-box-4085812-3385481.png">
                <h3>No Ticket Yet</h3>
            </div>
            @endif
        </div>
        <!-- END: Data List -->
        @if($tickets  != [])
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
    // $('.js-switch').change(function () {
    //     let status = $(this).prop('checked') === true ? 0 : 1;
    //     let activity_id = $(this).data('id');

    //     console.log(activity_id);
    //     $.ajax({
    //         type: "GET",
    //         dataType: "json",
    //         cache: false,
    //         url: '{{ route('activity.status') }}',
    //         data: {'status': status, 'act_id': activity_id},
    //         success: function (data) {
    //             console.log(data.message);
    //         }
    //     });
    // });
});
</script>