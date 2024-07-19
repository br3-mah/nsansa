@extends('layouts.app')
@section('content')


<div class="content contentCanvas">
    <h2 class="text-lg font-medium mr-auto flex space-x-6 mt-8">
        <i data-lucide="files" class="w-6 h-6"></i>
        &nbsp;
        <span>Manage Patient Profiles</span>
    </h2>
    <div id="callback-message" class="toastify-content hidden">
        <div class="font-medium">A new Patient has signed up.</div>
        <div class="text-slate-500 mt-1">
            Check your notifications
        </div>
    </div>
    @if (Session::has('attention'))
    <div class="intro-x alert alert-secondary w-full alert-dismissible justify-center show flex items-center mb-2" role="alert"> 
        <i data-lucide="alert-octagon" class="w-6 h-6 mr-2"></i> 
        {{ Session::get('attention') }}
        <button type="button" class="btn-close" data-tw-dismiss="alert" aria-label="Close"> 
            <i data-lucide="x" class="w-4 h-4"></i> 
        </button> 
    </div>
    @elseif (Session::has('err_msg'))
    <div class="intro-x alert alert-danger w-full alert-dismissible justify-center show flex items-center mb-2" role="alert"> 
        <i data-lucide="alert-octagon" class="w-6 h-6 mr-2"></i> 
        {{ Session::get('err_msg') }}
        <button type="button" class="btn-close" data-tw-dismiss="alert" aria-label="Close"> 
            <i data-lucide="x" class="w-4 h-4"></i> 
        </button> 
    </div>
    @endif
    <div class="grid grid-cols-12 gap-6 mt-5">
        {{-- <div class="intro-y col-span-12 flex flex-wrap sm:flex-nowrap items-center mt-2">
            <button class="btn btn-primary shadow-md mr-2">Record Patient File</button>
            <div class="dropdown">
                <button class="dropdown-toggle btn px-2 box" aria-expanded="false" data-tw-toggle="dropdown">
                    <span class="w-5 h-5 flex items-center justify-center"> <i class="w-4 h-4" data-lucide="plus"></i> </span>
                </button>
                <div class="dropdown-menu w-40">
                    <ul class="dropdown-content">
                        <li>
                            <a href="" class="dropdown-item"> <i data-lucide="users" class="w-4 h-4 mr-2"></i> Add Group </a>
                        </li>
                        <li>
                            <a href="" class="dropdown-item"> <i data-lucide="message-circle" class="w-4 h-4 mr-2"></i> Send Message </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="hidden md:block mx-auto text-slate-500">Showing 1 to 3 of {{ sizeOf($my_patients) }} patients</div>
            <div class="w-full sm:w-auto mt-3 sm:mt-0 sm:ml-auto md:ml-0">
                <div class="w-56 relative text-slate-500">
                    <input type="text" class="form-control w-56 box pr-10" placeholder="Search...">
                    <i class="w-4 h-4 absolute my-auto inset-y-0 mr-3 right-0" data-lucide="search"></i> 
                </div>
            </div>
        </div> --}}
        <!-- BEGIN: Users Layout -->
        @forelse($counselors as $file)
        <div class="intro-y col-span-12 md:col-span-6 lg:col-span-4">
            <div class="box">
                <div class="flex items-start px-5 pt-5">
                    <div class="w-full flex flex-col lg:flex-row items-center">
                        <div class="w-16 h-16 image-fit">
                            @if($file->image_path == null)
                            <div class="font-bolder capitalize text-xs text-white w-4 h-4 sm:w-10 sm:h-10 rounded-full flex items-center justify-center text-slate-400 zoom-in tooltip" title="{{ $file->fname.' '.$file->lname  }}">
                                {{ $file->fname[0].' '.$file->lname[0] }}
                            </div>
                            @else
                            <img alt="{{$file->fname.' '.$file->lname}}" class="rounded-full" src="{{ asset('public/storage/'.$file->image_path) }}">
                            @endif
                        </div>
                        <div class="lg:ml-4 text-center lg:text-left mt-3 lg:mt-0">
                            <a target="_blank" href="{{ route('users.show', $file->id) }}" class="capitalize font-medium">{{$file->fname.' '.$file->lname}}</a> 
                            <div class="text-slate-500 text-xs mt-0.5">{{$file->department ?? 'Counselor'}}</div>
                        </div>
                    </div>
                    <div class="absolute right-0 top-0 mr-5 mt-3 dropdown">
                        {{-- <a class="dropdown-toggle w-5 h-5 block" href="javascript:;" aria-expanded="false" data-tw-toggle="dropdown"> <i data-lucide="more-horizontal" class="w-5 h-5 text-slate-500"></i> </a> --}}
                        <div class="dropdown-menu w-40">
                            <div class="dropdown-content">
                                <a href="{{ route('all-patient-files', $file->id) }}" class="dropdown-item"> <i data-lucide="edit-2" class="w-4 h-4 mr-2"></i> Manage Records </a>
                                @hasanyrole('admin')
                                    
                                    @if($file->assignedCounselor != null && $file->assignedCounselor->status == 1)
                                    <a href="{{ route('manual.remove.counselor', $file->assignedCounselor->id) }}" class="dropdown-item"> <i data-lucide="trash" class="w-4 h-4 mr-2"></i> Disable Counselor </a>
                                    @elseif($file->assignedCounselor != null && $file->assignedCounselor->status == 0)
                                    <a href="{{ route('manual.remove.counselor', $file->assignedCounselor->id) }}" class="dropdown-item"> <i data-lucide="recycle" class="w-4 h-4 mr-2"></i> Recover Counselor </a>
                                    @endif
                                @endhasanyrole
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center lg:text-left p-5">
                    {{-- <div>Condition</div> --}}
                    <a title="Send an email to {{ $file->fname.' '.$file->lname  }}" href="mailto:{{ $file->email }}" class="flex tooltip items-center justify-center lg:justify-start text-slate-500 mt-5"> <i data-lucide="mail" class="w-3 h-3 mr-2"></i> {{ $file->email }}</a>
                    <div title="View counselor" class="flex tooltip items-center justify-center lg:justify-start text-slate-500 mt-1"> <i data-lucide="calendar" class=" w-3 h-3 mr-2"></i> {{ $file->created_at }} </div>
                   
                </div>
                <div class="text-center w-full lg:text-right p-5 border-t border-slate-200/60 dark:border-darkmode-400">
                    <input title="Activate/ Deactivate Questionnaire" type="checkbox" data-id="{{ $file->id }}" name="status" class="js-switch tooltip" {{ $file->status == 1 ? 'checked' : '' }}>

                    <a target="_blank" title="View response to questionnaire" href="{{ route('user-survey-response', $file->guest_id) }}" class="tooltip btn btn-secondary text-primary py-1 px-2 mr-2">
                        <i data-lucide="folder-open" class="w-3 h-3 mr-2"></i>
                        Survey
                    </a>
                    <a href="{{ route('users.edit', $file->id) }}" class="btn py-1 px-2">
                        <i data-lucide="pencil" class="w-3 h-3 mr-2"></i>
                        Edit
                    </a>
                    <a title="View commissions" href="{{ route('counselor.details', $file->id) }}" class="tooltip btn btn-warning text-white py-1 px-2 mr-2">
                        <i data-lucide="folder-open" class="w-3 h-3 mr-2"></i>
                        Details
                    </a>
                </div>
            </div>
        </div>
        @empty
        <div class="intro-y col-span-12 md:col-span-12 lg:col-span-12">
            <div class="items-center justify-center centered" style="text-align: center">
                <img class="intro-y mx-auto" width="300" src="https://cdni.iconscout.com/illustration/free/thumb/empty-box-4085812-3385481.png">
                <h3>No Profiles Yet</h3>
            </div>
        </div>
        @endforelse 

        
        <!-- END: Users Layout -->
        <!-- BEGIN: Pagination -->
        <div class="intro-y col-span-12 flex flex-wrap sm:flex-row sm:flex-nowrap items-center">
            <nav class="w-full sm:w-auto sm:mr-auto">
                <ul class="pagination">
                    {{-- {!! $counselors->links('pagination::tailwind') !!} --}}
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

        
    </div>

@endsection
{{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> --}}
{{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> --}}
<script src="https://code.jquery.com/jquery-3.1.1.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/js/standalone/selectize.min.js" integrity="sha256-+C0A5Ilqmu4QcSPxrlGpaZxJ04VjsRjKu+G82kl5UJk=" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/css/selectize.bootstrap3.min.css" integrity="sha256-ze/OEYGcFbPRmvCnrSeKbRTtjG4vGLHXgOqsyLFTRjg=" crossorigin="anonymous" />
<script>
//   $(document).ready(function () {
//       $('select').selectize({
//           sortField: 'text'
//       });
//   });
    var counselor_id = 0;
    var patient_id = 0;

    function getId(id){
        // alert(id);
        $('#inputID').val(id);
        $('#this_patient').empty();
        $('#these_counselors').empty();
        $('#this_patient').append('<p>'+id+'</p>');
    }

    function getval(sel)
    {
        $('#these_counselors').empty();
        counselor_id = sel.value;
        // Get counselor with this specialty
        $.ajax({
            type:'GET',
            url:'{{ route("counselors-by-dept") }}',
            data: {
                counselor_id
            },
            success:function(data) {    
                console.log(data.result);
                if(Object.keys(data.result).length > 0){
                    for (const counselor of data.result){
                        console.log(counselor)
                        $('#these_counselors').append('<option value="'+counselor.id+'">'+counselor.fname+' '+counselor.lname+'</option>')
                    }
                }
                
            },
            
            error: function (msg) {
                console.log(msg);
                var errors = msg.responseJSON;
            }
        });
    }


    $(document).ready(function(){
        $('.js-switch').change(function () {
            let status = $(this).prop('checked') === true ? 1 : 0;
            let user_id = $(this).data('id');

            
            $.ajax({
                type: "GET",
                dataType: "json",
                cache: false,
                url: '{{ route('user.status') }}',
                data: {'status': status, 'user_id': user_id},
                success: function (data) {
                    console.log(data.message);
                }
            });
        });
    });
</script>