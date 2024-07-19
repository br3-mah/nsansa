@extends('layouts.app')
@section('content')
<div class="content">
    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">
            Homework Activity
        </h2>
        <a href="{{ route('activities.index') }}" class="intro-x btn shadow-md mr-2">Back to Activities</a>
    </div>
    <div class="grid grid-cols-12 gap-6 mt-5">
        <!-- BEGIN: Profile Menu -->
        <div class="col-span-12 lg:col-span-4 2xl:col-span-3 flex lg:block flex-col-reverse">
            <div class="intro-y box mt-5 lg:mt-0">
                @hasrole('counselor')
                <div class="relative flex items-center p-5">
                    <h2>Patients Assigned</h2>
                    {{-- <div class="dropdown">
                        <a class="dropdown-toggle w-5 h-5 block" href="javascript:;" aria-expanded="false" data-tw-toggle="dropdown"> <i data-lucide="more-horizontal" class="w-5 h-5 text-slate-500"></i> </a>
                        <div class="dropdown-menu w-56">
                            <ul class="dropdown-content">
                                <li>
                                    <h6 class="dropdown-header">
                                        Export Options
                                    </h6>
                                </li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li>
                                    <a href="" class="dropdown-item"> <i data-lucide="activity" class="w-4 h-4 mr-2"></i> English </a>
                                </li>
                                <li>
                                    <a href="" class="dropdown-item">
                                        <i data-lucide="box" class="w-4 h-4 mr-2"></i> Indonesia 
                                        <div class="text-xs text-white px-1 rounded-full bg-danger ml-auto">10</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="" class="dropdown-item"> <i data-lucide="layout" class="w-4 h-4 mr-2"></i> English </a>
                                </li>
                                <li>
                                    <a href="" class="dropdown-item"> <i data-lucide="sidebar" class="w-4 h-4 mr-2"></i> Indonesia </a>
                                </li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li>
                                    <div class="flex p-1">
                                        <button type="button" class="btn btn-primary py-1 px-2">Settings</button>
                                        <button type="button" class="btn btn-secondary py-1 px-2 ml-auto">View Profile</button>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div> --}}
                </div>
                <div class="p-5 border-t border-slate-200/60 dark:border-darkmode-400">
                    @forelse($activity->patient_activities as $u)
                        <div class="flex">
                            <a class="flex items-center mt-0" href=""> <i data-lucide="user" class="w-4 h-4 mr-2"></i>{{ $u->users->fname.' '.$u->users->lname }} </a>
                            <a href="{{ route('show-patient-file', $u->users->id) }}" class="btn btn-xs btn-secondary py-1 px-2 sm:ml-auto mt-3 sm:mt-0sm:ml-auto mt-3 sm:mt-0">View Diagnosis</a>
                        </div>
                    @empty
                        <p>No Patients Assigned</p>
                    @endforelse
                </div>

                
                <div class="p-5 border-t border-slate-200/60 dark:border-darkmode-400 flex">
                    {!! Form::open(['method' => 'DELETE','route' => ['activities.destroy', $activity->id],'style'=>'display:inline']) !!}
                    {!! Form::submit('Delete Activity', ['class' => 'btn btn-sm btn-danger py-1 px-2']) !!}
                    {!! Form::close() !!} 
                </div>
                @endhasrole

                @hasrole('patient')
                <div class="p-5 border-t border-slate-200/60 dark:border-darkmode-400">
                    <a class="flex items-center mt-0" href=""> <i data-lucide="user" class="w-4 h-4 mr-2"></i> Me </a>  
                </div>
                <div class="my-2">
                    <input type="checkbox" data-id="{{ $activity->id }}" name="status" class="js-switch" {{ $activity->status_id == 0 ? 'checked' : '' }}>
                </div>
                @endhasrole
            </div>
        </div>
        <!-- END: Profile Menu -->
        <div class="col-span-12 lg:col-span-8 2xl:col-span-9">
            <div class="grid grid-cols-12 gap-6">
                <div class="intro-y box col-span-12 2xl:col-span-6">
                    <div class="flex items-center px-5 py-3 border-b border-slate-200/60 dark:border-darkmode-400">
                        <h2 class="font-medium text-base mr-auto">
                            Activity Details
                        </h2>
                        {{-- <button data-carousel="today-schedule" data-target="prev" class="tiny-slider-navigator btn btn-outline-secondary px-2 mr-2"> <i data-lucide="chevron-left" class="w-4 h-4"></i> </button>
                        <button data-carousel="today-schedule" data-target="next" class="tiny-slider-navigator btn btn-outline-secondary px-2"> <i data-lucide="chevron-right" class="w-4 h-4"></i> </button> --}}
                    </div>
                    <div class="tiny-slider py-5" id="today-schedule">
                        <div class="px-5 text-center sm:text-left">
                            <div class="font-medium text-lg">{{ $activity->desc }}</div>
                            <div class="text-slate-600 dark:text-slate-500 mt-2">{{ $activity->comments ?? '' }}</div>
                            <div class="mt-2 text-info">{{ $activity->created_at->toFormattedDateString() }}</div>
                            <div class="flex flex-col sm:flex-row items-center mt-5">
                                <div class="flex items-center text-slate-500"> <i data-lucide="map-pin" class="hidden sm:block w-4 h-4 mr-2"></i> Location </div>
                            </div>
                        </div>
                        {{-- <div class="px-5 text-center sm:text-left">
                            <div class="font-medium text-lg">Developing rest API with Laravel 7</div>
                            <div class="text-slate-600 dark:text-slate-500 mt-2">Lorem Ipsum is simply dummy text of the printing and typesetting industry</div>
                            <div class="mt-2">11:15AM - 12:30PM</div>
                            <div class="flex flex-col sm:flex-row items-center mt-5">
                                <div class="flex items-center text-slate-500"> <i data-lucide="map-pin" class="hidden sm:block w-4 h-4 mr-2"></i> 1396 Pooh Bear Lane, New Market </div>
                                <button class="btn btn-secondary py-1 px-2 sm:ml-auto mt-3 sm:mt-0sm:ml-auto mt-3 sm:mt-0">View On Map</button>
                            </div>
                        </div>
                        <div class="px-5 text-center sm:text-left">
                            <div class="font-medium text-lg">Developing rest API with Laravel 7</div>
                            <div class="text-slate-600 dark:text-slate-500 mt-2">Lorem Ipsum is simply dummy text of the printing and typesetting industry</div>
                            <div class="mt-2">11:15AM - 12:30PM</div>
                            <div class="flex flex-col sm:flex-row items-center mt-5">
                                <div class="flex items-center text-slate-500"> <i data-lucide="map-pin" class="hidden sm:block w-4 h-4 mr-2"></i> 1396 Pooh Bear Lane, New Market </div>
                                <button class="btn btn-secondary py-1 px-2 sm:ml-auto mt-3 sm:mt-0sm:ml-auto mt-3 sm:mt-0">View On Map</button>
                            </div>
                        </div> --}}
                    </div>
                </div>
                {{-- <div class="intro-y box col-span-12 2xl:col-span-6">
                    <div class="flex items-center px-5 py-5 sm:py-0 border-b border-slate-200/60 dark:border-darkmode-400">
                        <h2 class="font-medium text-base mr-auto">
                            Work In Progress
                        </h2>
                        <div class="dropdown ml-auto sm:hidden">
                            <a class="dropdown-toggle w-5 h-5 block" href="javascript:;" aria-expanded="false" data-tw-toggle="dropdown"> <i data-lucide="more-horizontal" class="w-5 h-5 text-slate-500"></i> </a>
                            <div class="nav nav-tabs dropdown-menu w-40" role="tablist">
                                <ul class="dropdown-content">
                                    <li> <a id="work-in-progress-mobile-new-tab" href="javascript:;" data-tw-toggle="tab" data-tw-target="#work-in-progress-new" class="dropdown-item" role="tab" aria-controls="work-in-progress-new" aria-selected="true">New</a> </li>
                                    <li> <a id="work-in-progress-mobile-last-week-tab" href="javascript:;" data-tw-toggle="tab" data-tw-target="#work-in-progress-last-week" class="dropdown-item" role="tab" aria-selected="false">Last Week</a> </li>
                                </ul>
                            </div>
                        </div>
                        <ul class="nav nav-link-tabs w-auto ml-auto hidden sm:flex" role="tablist" >
                            <li id="work-in-progress-new-tab" class="nav-item" role="presentation"> <a href="javascript:;" class="nav-link py-5 active" data-tw-target="#work-in-progress-new" aria-controls="work-in-progress-new" aria-selected="true" role="tab" > New </a> </li>
                            <li id="work-in-progress-last-week-tab" class="nav-item" role="presentation"> <a href="javascript:;" class="nav-link py-5" data-tw-target="#work-in-progress-last-week" aria-selected="false" role="tab" > Last Week </a> </li>
                        </ul>
                    </div>
                    <div class="p-5">
                        <div class="tab-content">
                            <div id="work-in-progress-new" class="tab-pane active" role="tabpanel" aria-labelledby="work-in-progress-new-tab">
                                @forelse($activity->patient_activities as $u)
                                <div>
                                    <div class="flex">
                                        <div class="mr-auto">{{ $u->users->fname.' '.$u->users->lname }}</div>
                                        <div>{{ $u->users->id.'0' }}%</div>
                                    </div>
                                    <div class="progress h-1 mt-2">
                                        <div class="progress-bar w-1/2 bg-primary" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                @empty
                                @endforelse
                                <div class="mt-5">
                                    <div class="flex">
                                        <div class="mr-auto">Completed Tasks</div>
                                        <div>2 / 20</div>
                                    </div>
                                    <div class="progress h-1 mt-2">
                                        <div class="progress-bar w-1/4 bg-primary" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div class="mt-5">
                                    <div class="flex">
                                        <div class="mr-auto">Tasks In Progress</div>
                                        <div>42</div>
                                    </div>
                                    <div class="progress h-1 mt-2">
                                        <div class="progress-bar w-3/4 bg-primary" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div class="mt-5">
                                    <div class="flex">
                                        <div class="mr-auto">Tasks In Review</div>
                                        <div>70%</div>
                                    </div>
                                    <div class="progress h-1 mt-2">
                                        <div class="progress-bar w-4/5 bg-primary" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <a href="" class="btn btn-secondary block w-40 mx-auto mt-5">View More Details</a> 
                            </div>
                        </div>
                    </div>
                </div>

                <div class="intro-y box col-span-12 2xl:col-span-6">
                    <div class="flex items-center px-5 py-5 sm:py-3 border-b border-slate-200/60 dark:border-darkmode-400">
                        <h2 class="font-medium text-base mr-auto">
                            General Diagnosis
                        </h2>
                        <div class="dropdown ml-auto">
                            <a class="dropdown-toggle w-5 h-5 block sm:hidden" href="javascript:;" aria-expanded="false" data-tw-toggle="dropdown"> <i data-lucide="more-horizontal" class="w-5 h-5 text-slate-500"></i> </a>
                            <button class="dropdown-toggle btn btn-outline-secondary font-normal hidden sm:flex" aria-expanded="false" data-tw-toggle="dropdown"> Export <i data-lucide="chevron-down" class="w-4 h-4 ml-2"></i> </button>
                            <div class="dropdown-menu w-40">
                                <ul class="dropdown-content">
                                    <li>
                                        <div class="dropdown-header">Export Tools</div>
                                    </li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li>
                                        <a href="" class="dropdown-item"> <i data-lucide="printer" class="w-4 h-4 mr-2"></i> Print </a>
                                    </li>
                                    <li>
                                        <a href="" class="dropdown-item"> <i data-lucide="external-link" class="w-4 h-4 mr-2"></i> Excel </a>
                                    </li>
                                    <li>
                                        <a href="" class="dropdown-item"> <i data-lucide="file-text" class="w-4 h-4 mr-2"></i> CSV </a>
                                    </li>
                                    <li>
                                        <a href="" class="dropdown-item"> <i data-lucide="archive" class="w-4 h-4 mr-2"></i> PDF </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="p-5">
                        <div class="flex flex-col sm:flex-row items-center">
                            <div class="flex flex-wrap sm:flex-nowrap mr-auto">
                                @forelse($activity->patient_activities as $u)
                                    <div class="flex items-center mr-5 mb-1 sm:mb-0">
                                        <div class="w-2 h-2 bg-pending rounded-full mr-3"></div>
                                        <span>{{ $u->users->fname.' '.$u->users->lname }}</span> 
                                    </div>
                                @empty
                                @endforelse
                               
                                <div class="flex items-center mr-5 mb-1 sm:mb-0">
                                    <div class="w-2 h-2 bg-primary rounded-full mr-3"></div>
                                    <span>Product Profit</span> 
                                </div>
                            </div>
                            <div class="dropdown mt-3 sm:mt-0 mr-auto sm:mr-0">
                                <button class="dropdown-toggle btn btn-outline-secondary font-normal" aria-expanded="false" data-tw-toggle="dropdown"> Filter by Month <i data-lucide="chevron-down" class="w-4 h-4 ml-2"></i> </button>
                                <div class="dropdown-menu w-40">
                                    <ul class="dropdown-content overflow-y-auto h-32">
                                        <li> <a href="" class="dropdown-item">January</a> </li>
                                        <li> <a href="" class="dropdown-item">February</a> </li>
                                        <li> <a href="" class="dropdown-item">March</a> </li>
                                        <li> <a href="" class="dropdown-item">June</a> </li>
                                        <li> <a href="" class="dropdown-item">July</a> </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="report-chart mt-8">
                            <div class="h-[212px]">
                                <canvas id="report-line-chart"></canvas>
                            </div>
                        </div>
                    </div>
                </div> --}}
                <!-- END: General Statistics -->
            </div>
        </div>
    </div>
</div>
@endsection
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
    $('.js-switch').change(function () {
        let status = $(this).prop('checked') === true ? 1 : 0;
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