@extends('layouts.app')
@section('content')

<div class="content">
    <div class="flex items-center mt-8">
        <h2 class="intro-y text-lg font-medium mr-auto">
            Survey Questionnaires
        </h2>
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
    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="intro-y col-span-12 flex flex-wrap sm:flex-nowrap items-center mt-2">
            <a href="{{ route('questionaires.create') }}" class="btn btn-primary shadow-md mr-2">Create New Questionnaire</a>
            {{-- <div class="dropdown">
                <button class="dropdown-toggle btn px-2 box" aria-expanded="false" data-tw-toggle="dropdown">
                    <span class="w-5 h-5 flex items-center justify-center"> <i class="w-4 h-4" data-lucide="plus"></i> </span>
                </button>
                <div class="dropdown-menu w-40">
                    <ul class="dropdown-content">
                        <li>
                            <a href="" class="dropdown-item"> <i data-lucide="printer" class="w-4 h-4 mr-2"></i> Print </a>
                        </li>
                        <li>
                            <a href="" class="dropdown-item"> <i data-lucide="file-text" class="w-4 h-4 mr-2"></i> Export to Excel </a>
                        </li>
                        <li>
                            <a href="" class="dropdown-item"> <i data-lucide="file-text" class="w-4 h-4 mr-2"></i> Export to PDF </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="hidden md:block mx-auto text-slate-500">Showing 1 to 10 of {{ $questionaires->count() }} entries</div>
            <div class="w-full sm:w-auto mt-3 sm:mt-0 sm:ml-auto md:ml-0">
                <div class="w-56 relative text-slate-500">
                    <input type="text" class="form-control w-56 box pr-10" placeholder="Search...">
                    <i class="w-4 h-4 absolute my-auto inset-y-0 mr-3 right-0" data-lucide="search"></i> 
                </div>
            </div> --}}
        </div>
        <!-- BEGIN: Data List -->

        <div class="intro-y col-span-12 overflow-auto lg:overflow-visible">
            <table class="table table-report -mt-2">
                <thead>
                    <tr>
                        <th class="whitespace-nowrap font-extrabold">QUESTIONNAIRE</th>
                        <th class="whitespace-nowrap font-extrabold">AUDIENCE</th>
                        <th class="text-center whitespace-nowrap font-extrabold">QUESTIONS</th>
                        <th class="text-center whitespace-nowrap font-extrabold">STATUS</th>
                        <th class="text-center whitespace-nowrap font-extrabold">ACTIONS</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($questionaires as $q)
                    <tr class="intro-x">
                        <td class="w-40">
                            <div class="flex">
                                {{ $q->name }}
                            </div>
                        </td>
                        <td>
                            <a href="" class="capitalize font-medium whitespace-nowrap">{{ $q->group_assigned }}</a> 
                            <div class="text-slate-500 text-xs whitespace-nowrap mt-0.5">Group</div>
                        </td>
                        <td class="text-center">{{ $q->questions->count() }}</td>
                        <td class="w-40 items-center" >
                            <input title="Activate/ Deactivate Questionnaire" type="checkbox" data-id="{{ $q->id }}" name="status" class="js-switch tooltip" {{ $q->status_id == 1 ? 'checked' : '' }}>
                            {{-- <div id="item{{ $q->id }}" onclick="changeQuestionaireStatus('{{ $q->id }}')" class="flex items-center justify-center text-danger"> <i data-lucide="check-square" class="w-4 h-4 mr-2"></i> Activate </div> --}}
                        </td>
                        <td class="w-full flex">
                            <a title="Add answers to the Questions" class="flex tooltip items-center text-xs btn btn-primary btn-xs text-white mr-3" href="{{ route('questionaires.show', $q->id) }}"> 
                                Manage Questions 
                            </a>
                            
                            <button title="Change who should answer this questionnaire" onclick="getID('{{ $q->id }}');"  data-tw-toggle="modal" data-tw-target="#change-survey-audience-modal" class="flex tooltip items-center text-xs btn btn-success btn-xs text-white mr-3"> 
                                Change Audience 
                            </button>
                            {!! Form::open(['method' => 'DELETE','route' => ['questionaires.destroy', $q->id],'style'=>'display:inline']) !!}
                            {!! Form::submit('Delete', ['class' => 'mt-2.5 tooltip text-danger cursor', 'title'=> 'Are you sure you want to permanently delete questionnaire']) !!}
                            {!! Form::close() !!}
                        </td>
                    </tr>
                    @empty
                        
                    @endforelse
                </tbody>
            </table>
        </div>
        <!-- END: Data List -->
        <!-- BEGIN: Pagination -->
        <div class="intro-y col-span-12 flex flex-wrap sm:flex-row sm:flex-nowrap items-center">
            <nav class="w-full sm:w-auto sm:mr-auto">
                <ul class="pagination">
                    {!! $questionaires->links() !!}
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
    </div>
    <!-- BEGIN: Delete Confirmation Modal -->
    <div id="change-survey-audience-modal" class="modal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog" id="modalMobile" style="margin-top:20%">
            <div class="modal-content">
                <!-- BEGIN: Modal Header -->
                <div class="modal-header bg-primary">
                    <h2 class="font-extrabold text-white mr-auto">Change Audience</h2> 
                </div>
                
                <form method="POST" action="{{ route('change-audience') }}">
                    @csrf
                    <div class="modal-body">
                        <div class="col-span-12 sm:col-span-6"> 
                            <input type="hidden" name="q_id" id="qustnnaire_id">
                            <label for="modal-form-6" class="form-label font-extrabold">Audience</label> 
                            <select name="audience" class="form-select">
                                <option value="none">None</option>
                                <option value="patient">Patients</option>
                                <option value="counselor">Counselors</option>
                            </select>
                        </div>
                        <div class="modal-footer"> 
                            {{-- <div id="this_patient"></div> --}}
                            <button type="button" data-tw-dismiss="modal" class="btn btn-outline-secondary w-20 mr-1">Cancel</button> 
                            <button type="submit" class="btn btn-primary w-auto">Save Changes</button> 
                        </div>
                    </div>
                </form>
            </div>
        </div> 
    </div> 
</div>
<style>
    #toogle {
    display: none;
    }

    .toogle-button {
    font-weight: bold;
    font-size: 10PX;
    display: inline-block;
    width: 75px;
    height: 35px;
    background-color: #E7E2CD;
    border-radius: 30px;
    position: relative;
    cursor: pointer;
    }

    .toogle-button::after {
    content: attr(data-label-off);
    width: 40px;
    height: 40px;
    color: #E7E2CD;
    background-color: #B4223C;
    border: 2px solid #E7E2CD;
    border-radius: 50%;
    box-shadow: 0 0 5px rgba(0, 0, 0, .25);
    position: absolute;
    top: -5px;
    left: 0;
    line-height: 0;
    display: grid;
    place-content: center;
    transition: all .5s;
    transform: 1s ease-in;
    }

    #toogle:checked + .toogle-button::after {
    content: attr(data-label-on);
    background-color: #2D4064;
    transform: translateX(35px) rotate(360deg);
    }
</style>
@endsection
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
function getID(id){
    var input = document.getElementById("qustnnaire_id");
    input.value = id;
}
$(document).ready(function(){
    $('.js-switch').change(function () {
        let status = $(this).prop('checked') === true ? 1 : 0;
        let questionaire_id = $(this).data('id');

        console.log(questionaire_id);
        $.ajax({
            type: "GET",
            dataType: "json",
            cache: false,
            url: '{{ route('questionaire.status') }}',
            data: {'status': status, 'user_id': questionaire_id},
            success: function (data) {
                console.log(data.message);
            }
        });
    });
});
</script>