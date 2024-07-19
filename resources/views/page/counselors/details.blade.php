@extends('layouts.app')
@section('content')
<div class="content">
    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">
            Counselor Activities 
        </h2>
    </div>
    <div class="intro-y col-span-12 flex flex-wrap xl:flex-nowrap mt-2">
        <div class="flex w-full sm:w-auto">
            <div class="w-48 relative text-slate-500">
                {{-- <input type="text" class="form-control w-48 box pr-10" placeholder="Search Role">
                <i class="w-4 h-4 absolute my-auto inset-y-0 mr-3 right-0" data-lucide="search"></i>  --}}
            </div>
        </div>
        <div class="hidden xl:block mx-auto text-slate-500"></div>
        <div class="w-full xl:w-auto flex mt-3 xl:mt-0">
            @can('users.destroy')
            {!! Form::open(['method' => 'DELETE','route' => ['users.destroy', $user->id],'style'=>'display:inline']) !!}
            {!! Form::submit('Deactivate', ['class' => 'btn btn-danger btn-md  mr-2']) !!}
            {!! Form::close() !!}
            {{-- <a class="btn btn-primary shadow-md mr-2"  href="{{ route('roles.create') }}"> <i data-lucide="file-text" class="w-4 h-4 mr-2"></i> Add Role </a> --}}
            @endcan
        
        </div>
    </div>
    <!-- BEGIN: Profile Info -->
    <div class="intro-y box px-5 pt-5 mt-5">
                  
        <div class="flex flex-col lg:flex-row border-b border-slate-200/60 dark:border-darkmode-400 pb-5 -mx-5">
            <div class="flex flex-1 px-5 items-center justify-center lg:justify-start">
                <div class="w-20 h-20 sm:w-24 sm:h-24 flex-none lg:w-32 lg:h-32 image-fit relative">  
                    @if($user->image_path == null)
                        <div style="width: 80%; height: 15vh;" class="font-bolder text-lg bg-success text-white w-16 h-16 sm:w-10 sm:h-10 rounded-full flex items-center justify-center border dark:border-darkmode-400 ml-2 zoom-in tooltip" title="{{ $user->fname.' '.$user->lname  }}">
                            {{ $user->fname[0].' '.$user->lname[0] }}
                        </div>
                    @else
                    <img alt="{{ $user->lname.' '.$user->lname }}" class="rounded-full" src="{{ asset('public/storage/'.$user->image_path) }}">
                    @endif
                    {{-- <div class="absolute mb-1 mr-1 flex items-center justify-center bottom-0 right-0 bg-primary rounded-full p-2"> <i class="w-4 h-4 text-white" data-lucide="camera"></i> </div> --}}
                </div>
                <div class="ml-5">
                    <div class="capitalize w-24 sm:w-40 truncate sm:whitespace-normal font-medium text-lg">{{ $user->fname.' '.$user->lname}}</div>
                    <div class="capitalize text-slate-500"> {{ $user->gender ?? '' }}</div>
                    @can('users.edit')
                    <a href="{{ route('users.edit', $user->id) }}" class="btn btn-xs p-2 w-full"><i data-lucide="edit"></i>&nbsp;Assign Role</a>
                    @endcan
                </div>

            </div>
            <div class="mt-6 lg:mt-0 flex-1 px-5 border-l border-r border-slate-200/60 dark:border-darkmode-400 border-t lg:border-t-0 pt-5 lg:pt-0">
                <div class="font-medium text-center lg:text-left lg:mt-3">Personal Details</div>
                <div class="flex flex-col justify-center items-center lg:items-start mt-2">
                    <div class="truncate sm:whitespace-normal flex items-center"> <i data-lucide="hash" class="w-4 h-4 mr-2"></i> {{ $user->nrc_id ?? 'No NRC ID' }} </div>
                    <a href="mailto:{{$user->email}}" class="truncate sm:whitespace-normal flex items-center"> <i data-lucide="mail" class="w-4 h-4 mr-2"></i> {{ $user->email ?? '' }} </a>
                    <div class="truncate sm:whitespace-normal flex items-center"> <i data-lucide="map" class="w-4 h-4 mr-2"></i> {{ $user->address ?? 'No Address' }} </div>
                </div>
            </div>
            @if ($user->type == 'patient')
            <div class="mt-6 lg:mt-0 flex-1 px-5 border-l border-r border-slate-200/60 dark:border-darkmode-400 border-t lg:border-t-0 pt-5 lg:pt-0">
                <div class="font-medium text-center lg:text-left lg:mt-3">Medical Details</div>
                <div class="flex flex-col justify-center items-center lg:items-start mt-2">
                    <div class="truncate sm:whitespace-normal flex items-center"> <i data-lucide="thermometer" class="w-4 h-4 mr-2"></i> {{ $user->blood_group ?? 'No Blood Group' }} </div>
                    <div class="truncate sm:whitespace-normal flex items-center"> <i data-lucide="user" class="w-4 h-4 mr-2"></i> {{ $user->father_name ?? 'No Father Name' }} </div>
                    <div class="truncate sm:whitespace-normal flex items-center"> <i data-lucide="user" class="w-4 h-4 mr-2"></i> {{ $user->mother_name ?? 'No Mother Name' }} </div>
                </div>
            </div>
            @else
            <div class="mt-6 lg:mt-0 flex-1 px-5 border-l border-r border-slate-200/60 dark:border-darkmode-400 border-t lg:border-t-0 pt-5 lg:pt-0">
                <div class="font-medium text-center lg:text-left lg:mt-3">Professional Details</div>
                <div class="flex flex-col justify-center items-center lg:items-start mt-2">
                    <div class="truncate sm:whitespace-normal flex items-center"> <i data-lucide="thermometer" class="w-4 h-4 mr-2"></i> {{ $user->occupation ?? 'No Occupation' }} </div>
                    <div class="truncate sm:whitespace-normal flex items-center"> <i data-lucide="building" class="w-4 h-4 mr-2"></i> {{ $user->department ?? 'No Department' }} </div>
                    <div class="truncate sm:whitespace-normal flex items-center"> <i data-lucide="shield" class="w-4 h-4 mr-2"></i> {{ $user->liecense_number ?? 'No Liecense Number' }} </div>
                </div>
            </div>
            @endif
      
        </div>
        <ul class="nav nav-link-tabs flex-col sm:flex-row justify-center lg:justify-start text-center" role="tablist" >
            {{-- <li id="dashboard-tab" class="nav-item" role="presentation"> <a href="javascript:;" class="nav-link py-4" data-tw-target="#dashboard" aria-controls="dashboard" aria-selected="true" role="tab" > Dashboard </a> </li> --}}
            <li id="video-call-tab" class="nav-item" role="presentation"> <a href="javascript:;" class="nav-link py-4 active" data-tw-target="#video-sessions" aria-selected="false" role="tab" > Video Call Sessions </a> </li>
            <li id="commission-tab" class="nav-item" role="presentation"> <a href="javascript:;" class="nav-link py-4" data-tw-target="#commissions" aria-selected="false" role="tab" > Commission </a> </li>
            {{-- <li id="appointment-tab" class="nav-item" role="presentation"> <a href="javascript:;" class="nav-link py-4" data-tw-target="#appointments" aria-selected="false" role="tab" > Appointments </a> </li>
            <li id="billing-tab" class="nav-item" role="presentation"> <a href="javascript:;" class="nav-link py-4" data-tw-target="#billing" aria-selected="false" role="tab" > Billing </a> </li>
            <li id="payment-history-tab" class="nav-item" role="presentation"> <a href="javascript:;" class="nav-link py-4" data-tw-target="#payment-history" aria-selected="false" role="tab" > Payment History </a> </li>
            <li id="account-and-profile-tab" class="nav-item" role="presentation"> <a href="javascript:;" class="nav-link py-4" data-tw-target="#account-and-profile" aria-selected="false" role="tab" > Account & Profile </a> </li>
            <li id="activities-tab" class="nav-item" role="presentation"> <a href="javascript:;" class="nav-link py-4" data-tw-target="#activities" aria-selected="false" role="tab" > Activities </a> </li>
            <li id="tasks-tab" class="nav-item" role="presentation"> <a href="javascript:;" class="nav-link py-4" data-tw-target="#tasks" aria-selected="false" role="tab" > Tasks </a> </li> 
            --}}
        </ul>
    </div>
    <!-- END: Profile Info -->
    <div class="intro-y tab-content mt-5">
        <div id="dashboard" class="tab-pane active" role="tabpanel" aria-labelledby="dashboard-tab">
            <div class="grid grid-cols-12 gap-6">
                <!-- END: Daily Sales -->
                <!-- BEGIN: Latest Tasks -->
                <div class="intro-y box col-span-12 lg:col-span-12 video-tab">
                    <div class="flex items-center px-5 py-5 sm:py-0 border-b border-slate-200/60 dark:border-darkmode-400">
                        <h2 class="font-extrabold text-base mr-auto">
                            Conducted Video Call Sessions
                        </h2>
                        <ul class="nav nav-link-tabs w-auto ml-auto hidden sm:flex" role="tablist" >
                            <li id="latest-tasks-new-tab" class="nav-item" role="presentation"> <a href="javascript:;" class="nav-link py-5 active" data-tw-target="#latest-tasks-new" aria-controls="latest-tasks-new" aria-selected="true" role="tab" > New </a> </li>
                            <li id="latest-tasks-last-week-tab" class="nav-item" role="presentation"> <a href="javascript:;" class="nav-link py-5" data-tw-target="#latest-tasks-last-week" aria-selected="false" role="tab" > Last Week </a> </li>
                        </ul>
                        <div class="dropdown ml-auto">
                            <a class="dropdown-toggle w-5 h-5 block" href="javascript:;" aria-expanded="false" data-tw-toggle="dropdown"> <i data-lucide="more-horizontal" class="w-5 h-5 text-slate-500"></i> </a>
                            <div class="nav nav-tabs dropdown-menu w-40" role="tablist">
                                <ul class="dropdown-content">
                                    <li> 
                                        <a href="{{  route('appointment') }}" class="dropdown-item"> <i data-lucide="plus" class="w-4 h-4 mr-2"></i> Schedule Session </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="p-5">
                        <div class="tab-content">
                            <div id="latest-tasks-new" class="tab-pane active" role="tabpanel" aria-labelledby="latest-tasks-new-tab">
                                @forelse ($videocalls as $vc)
                                <div class="flex items-center justify-content-center">
                                    <div class="border-l-2 border-primary dark:border-primary pl-4">
                                        <a href="" class="font-medium">{{ App\Models\User::fullNames($vc->patient_id) }}</a> 
                                        <div class="text-slate-500">{{ $vc->created_at->toFormattedDateString() }}</div>
                                    </div>
                                    <div class="border-l-2 border-primary dark:border-primary ml-6 pl-4">
                                        <a href="" class="font-medium">
                                            <small>Payment</small>    
                                        </a> 
                                        <div class="text-slate-500">
                                        @if(App\Models\Plan::planInfo($vc->package_id) !== 0)
                                        ZK {{App\Models\Plan::planInfo($vc->package_id)->price }}
                                        @else
                                        ZK 0
                                        @endif
                                        </div>
                                    </div>
                                    <div class="form-check form-switch ml-auto">
                                        <input class="form-check-input" type="checkbox">
                                    </div>
                                </div>
                                @empty
                                    <p>None</p>
                                @endforelse
                            </div>
                        </div>
                    </div>
                </div>
                


                <div class="intro-y box col-span-12 lg:col-span-12 commision-tab">
                    <div class="flex items-center px-5 py-10 sm:py-0 border-b border-slate-200/60 dark:border-darkmode-400">
                        <h2 class="font-extrabold text-base mr-auto py-5">
                            Uploaded Documents
                        </h2>
                        
                    </div>
                    <div class="p-5">
                        <div class="tab-content">
                            <div id="latest-tasks-new" class="tab-pane active w-full flex gap-3" role="tabpanel" aria-labelledby="latest-tasks-new-tab">
                                
                                    @if ($user->myfiles)
                                        
                                        @forelse ($user->myfiles as $key => $file )
                                        <div class='shadow px-4 py-4 w-1/2'>
                                            <div class="mb-4">
                                                <iframe src="{{ asset('public/'.$file->nrc_file) }}" class="w-full h-40 border" frameborder="0"></iframe>
                                            </div>
                                            <a href="{{ asset('/public/'.$file->nrc_file) }}" class="text-purple-500 hover:underline" target="_blank">View NRC</a>
                                        </div>
                                        <div class='shadow px-4 py-4 w-1/2'>
                                            <div class="mb-4">
                                                <iframe src="{{ asset('public/'.$file->cv_file) }}" class="w-full h-40 border" frameborder="0"></iframe>
                                            </div>
                                            <a href="{{ asset('/public/'.$file->cv_file) }}" class="text-purple-500 hover:underline" target="_blank">View CV</a>
                                        </div>
                                        <div class='shadow px-4 py-4 w-1/2'>
                                            <div class="mb-4">
                                                <iframe src="{{ asset('public/'.$file->cert_file) }}" class="w-full h-40 border" frameborder="0"></iframe>
                                            </div>
                                            <a href="{{ asset('/public/'.$file->cert_file) }}" class="text-purple-500 hover:underline" target="_blank">View Certificate</a>
                                        </div>
                                        {{-- <div class='shadow px-4 py-4 w-1/2'>
                                            <div class="mb-4">
                                                <iframe src="{{ asset('public/ufiles/'.$file->license_file) }}" class="w-full h-40 border" frameborder="0"></iframe>
                                            </div>
                                            <a href="{{ asset('/public/ufiles/'.$file->license_file) }}" class="text-purple-500 hover:underline" target="_blank">View License</a>
                                        </div> --}}
                                        @empty
                                            
                                        @endforelse
                                    @else
                                        <p>No NRC document uploaded.</p>
                                    @endif
                                    
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script>
$('.commission-tab').hide();
$('.details').hide();
$('.details').hide();
$('.details').hide();

$("img").error(function () {
    $(this).unbind("error").attr("src", "https://firstsiteguide.com/wp-content/uploads/2020/11/what-is-gravatar-1-1-700x313-1-1.jpg");
});
</script>
