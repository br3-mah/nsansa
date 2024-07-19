@extends('layouts.app')
@section('content')
<div class="content">
    <h2 class="text-lg font-medium mr-auto flex space-x-6 mt-8">
        <i data-lucide="person-standing" class="w-6 h-6"></i>
        &nbsp;
        <span>Activities</span>
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
            {{-- <div class="flex w-full sm:w-auto">
                <div class="w-48 relative text-slate-500">
                    <input type="text" class="form-control w-48 box pr-10" placeholder="Search Activity">
                    <i class="w-4 h-4 absolute my-auto inset-y-0 mr-3 right-0" data-lucide="search"></i> 
                </div>
                <select class="form-select box ml-2">
                    <option>Latest Activities</option>
                    <option>Incomplete</option>
                    <option>Completed</option>
                </select>
            </div> --}}
            {{-- <div class="hidden xl:block mx-auto text-slate-500">Showing 1 to 2 of 2 entries</div> --}}
            <div class="w-full xl:w-auto flex items-center mt-3 xl:mt-0">
                @hasrole('counselor')
                <a href="{{ route('activities.create') }}" class="btn btn-primary shadow-md mr-2"> <i data-lucide="plus" class="w-4 h-4 mr-2"></i> New Activity </a>
                @endhasrole
            </div>
        </div>
        {{-- @dd($activities  == []) --}}
        <!-- BEGIN: Data List -->
        <div class="intro-y col-span-12 overflow-auto 2xl:overflow-visible">
            @if(!empty($activities->toArray()))
            <table class="table table-report -mt-2">
                <thead>
                    <tr>
                        {{-- <th class="whitespace-nowrap">
                            <input class="form-check-input" type="checkbox">
                        </th> --}}
                        {{-- <th class="whitespace-nowrap">INVOICE</th> --}}
                        <th class="whitespace-nowrap">ACTIVITY</th>
                        <th class="text-center whitespace-nowrap">STATUS</th>
                        <th class="whitespace-nowrap">PATIENTS</th>
                        {{-- <th class="text-right whitespace-nowrap">
                            <div class="pr-16">TOTAL TRANSACTION</div>
                        </th> --}}
                        <th class="text-center whitespace-nowrap">ACTIONS</th>
                    </tr>
                </thead>
                <tbody>
                    
                    @forelse ($activities as $act)
                    
                        <tr class="intro-x">
                            {{-- <td class="w-10">
                                <input class="form-check-input" type="checkbox">
                            </td> --}}
                            <a href="{{ route('activities.show', $act->activities->id) }}">
                                <td class="w-40">
                                    <a href="{{ route('activities.show', $act->activities->id) }}" title="View details" class="tooltip font-medium whitespace-nowrap">{{ $act->activities->desc}}</a> 
                                    {{-- <div class="text-slate-500 text-xs whitespace-nowrap mt-0.5">Ohio, Ohio</div> --}}
                                </td>
                                <td class="text-center">
                                    @if ($act->activities->status_id == 1)
                                        <div class="flex items-center justify-center whitespace-nowrap text-success"> 
                                            <i data-lucide="clock" class="w-4 h-4 mr-2"></i> In Progress 
                                        </div>
                                    @else
                                        <div class="flex items-center justify-center whitespace-nowrap text-info"> 
                                            <i data-lucide="check-square" class="w-4 h-4 mr-2"></i> Completed 
                                        </div>
                                    @endif
                                </td>
                                {{-- <td class="w-40 !py-4"> <a href="" class="underline decoration-dotted whitespace-nowrap">#INV-25807556</a> </td> --}}
                
                                <td>
                                    <div class="text-slate-500 text-xs whitespace-nowrap mt-0.5">
                                        @forelse (App\Models\Activity::assignedPatients($act->activities->id) as $user)
                                            @if ($user->users !== null)
                                            {{ $user->users->fname.' '.$user->users->lname }}
                                            @else
                                            <span class="badge badge-danger bg-red-500 p-3">Invalid</span>
                                            @endif
                                        @empty
                                            
                                        @endforelse
                                    </div>
                                </td>
                                
                                {{-- <td class="w-40 text-right">
                                    <div class="pr-16">$25,000,00</div>
                                </td>  --}}
                                @hasrole('counselor')
                                <td class="table-report__action">
                                    <div class="flex justify-center items-center">
                                        
                                        @can('activities.destroy')
                                        {!! Form::open(['method' => 'DELETE','route' => ['activities.destroy', $act->activities->id],'style'=>'display:inline']) !!}
                                        {!! Form::submit('Delete', ['class' => 'btn btn-sm mt-2 btn-danger mr-2 tooltip zoom-out', 'title' => 'Delete Activity']) !!}
                                        {!! Form::close() !!}    
                                        @endcan                            
                                    </div>
                                </td>
                                @endhasrole
                                @hasrole('patient')
                                <td title="Mark as Complete" class="flex tooltip justify-center items-center">
                                    <input type="checkbox" data-id="{{ $act->activities->id }}" name="status" class="js-switch" {{ $act->activities->status_id == 0 ? 'checked' : '' }}>
                                </td>
                                @endhasrole
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
        @if($activities  != [])
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