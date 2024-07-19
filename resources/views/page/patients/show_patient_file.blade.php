@extends('layouts.app')
@section('content')
<div class="content">
    <div class="intro-y flex items-center mt-8">
        <div class="w-12 h-12 image-fit">
            @if($p->user->image_path == null)
            <div class="font-bolder bg-primary text-white w-8 h-8 sm:w-10 sm:h-10 rounded-full flex items-center justify-center border dark:border-darkmode-400 ml-2 text-slate-400 zoom-in tooltip" title="{{ $p->user->fname.' '.$p->user->lname  }}">
                {{ $p->user->fname[0].' '.$p->user->lname[0] }}
            </div>
            @else
            <img alt="Photo" class="rounded-full" src="{{  asset('public/storage/'.$p->user->image_path)  }}">
            @endif
        </div>
        <div class="ml-4 mr-auto">
            <h3 style="color:#F65B08">{{ $p->user->fname.' '.$p->user->lname }}</h3>
            <div style="color:#F65B08" class="font-bolder text-slate-500 capitalize"><strong>{{ $p->name ?? '' }}</strong> ({{ $p->created_at->toFormattedDateString() }})</div>
            <div style="color:#F65B08" class="text-slate-500 capitalize">{{ $p->condition ?? 'Condition' }}</div>
        </div>
        <button disabled style="color:#F65B08" class="btn btn-outline-secondary hidden sm:flex mr-2"> <i data-lucide="file" class="w-4 h-4 mr-2"></i> Download </button>
        <a href="{{ route('all-patient-files', $p->user_id ) }}" class="btn btn-outline-secondary hidden sm:flex"> <i data-lucide="file" class="w-4 h-4 mr-2"></i> Back </a>
    </div>
    <div class="grid grid-cols-12 gap-6 mt-5">
        <!-- BEGIN: Profile Menu -->
        <div class="sticky-top sticky col-span-12 lg:col-span-4 2xl:col-span-3 flex lg:block flex-col-reverse">
            <div class="intro-y mt-5 lg:mt-0">
                <div class="relative flex items-center p-5">
                    <div class="ml-4 mr-auto">
                        <div class="font-medium text-base">Recent Meetings</div>
                        <div class="text-slate-500">Last conversation 2 days ago</div>
                    </div>
                    <div class="dropdown">
                        <a class="dropdown-toggle w-5 h-5 block" href="javascript:;" aria-expanded="false" data-tw-toggle="dropdown"> <i data-lucide="more-horizontal" class="w-5 h-5 text-slate-500"></i> </a>
                        {{-- <div class="dropdown-menu w-56">
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
                        </div> --}}
                    </div>
                </div>
                <div class="">
                    <div class="intro-y col-span-12 sm:col-span-6 2xl:col-span-4">
                        <div class="box">
                            <div class="p-5">
                                <div class="h-40 2xl:h-56 image-fit rounded-md overflow-hidden before:block before:absolute before:w-full before:h-full before:top-0 before:left-0 before:z-10 before:bg-gradient-to-t before:from-black before:to-black/10">
                                    <img alt="counselor" class="rounded-md" src="{{ asset('dist/images/preview-11.jpg') }}">
                                    <div class="absolute bottom-0 text-white px-5 pb-6 z-10"> 
                                        <a href="" class="block font-medium text-base">Counselor Name</a> 
                                        <span class="text-white/90 text-xs mt-3">Get Started Session</span> 
                                    </div>
                                </div>
                                <div class="text-slate-600 dark:text-slate-500 mt-5">
                                    <div class="flex items-center mt-2"> <i data-lucide="layers" class="w-4 h-4 mr-2"></i> Session Duration/minute : 1200 min </div>
                                    <div class="flex items-center"> <i data-lucide="link" class="w-4 h-4 mr-2"></i> Charge: K 12.50 </div>
                                    <div class="flex items-center mt-2"> <i data-lucide="check-square" class="w-4 h-4 mr-2"></i> Charge Type: Hourly Charge </div>
                                </div>
                            </div>
                            <div class="flex justify-center lg:justify-end items-center p-5 border-t border-slate-200/60 dark:border-darkmode-400">
                                <a style="background-color:#F65B08; color:azure" class="flex items-center text-white btn text-primary mr-auto" href="javascript:;"> <i data-lucide="eye" class="w-4 h-4 mr-1"></i> Preview </a>
                                {{-- <a class="flex items-center text-danger" href="javascript:;" data-tw-toggle="modal" data-tw-target="#delete-confirmation-modal"> <i data-lucide="trash-2" class="w-4 h-4 mr-1"></i> Delete </a> --}}
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
            <div class="intro-y box p-5 bg-primary text-white mt-5">
                <div class="flex items-center">
                    <i data-loading-icon="puff" class="w-8 h-8"></i> 
                    <div class="font-medium text-lg">Important Update</div>
                    <div class="text-xs bg-white dark:bg-primary dark:text-white text-slate-700 px-1 rounded-md ml-auto">New</div>
                </div>
                <div class="mt-4">
                    {{-- Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s. --}}
                </div>
                <div class="font-medium flex mt-5">
                    <button type="button" class="btn py-1 px-2 border-white text-white dark:text-slate-300 dark:bg-darkmode-400 dark:border-darkmode-400">Take Action</button>
                    <button type="button" class="btn py-1 px-2 border-transparent text-white dark:border-transparent ml-auto">Dismiss</button>
                </div>
            </div>
        </div>
        <!-- END: Profile Menu -->
        <div class="col-span-12 lg:col-span-8 2xl:col-span-9">
            <div class="grid grid-cols-12 gap-6">
                <!-- BEGIN: Daily Sales -->
                <div class="intro-y box col-span-12 2xl:col-span-6">
                    <div class="flex items-center px-5 py-5 sm:py-3 border-b border-slate-200/60 dark:border-darkmode-400">
                        <h2 class="font-medium text-base mr-auto">
                            Medical Information
                        </h2>
                    </div>
                    <div class="p-5 flex">
                        <div class="p-5 col-span-6 rounded-md">
                            <div class="flex items-center"> <i data-lucide="user" class="w-4 h-4 text-slate-500 mr-2"></i> Age: <a href="" class="underline decoration-dotted ml-1">26</a> </div>
                            <div class="flex items-center mt-3"> <i data-lucide="calendar" class="w-4 h-4 text-slate-500 mr-2"></i> Date of Birth: <a href="" class="underline decoration-dotted ml-1">{{ $p->user->date_of_birth }}</a> </div>
                            <div class="flex items-center mt-3"> <i data-lucide="map-pin" class="w-4 h-4 text-slate-500 mr-2"></i> Place of Birth: <a href="" class="underline decoration-dotted ml-1">{{ $p->user->place_of_birth }}</a> </div>
                            <div class="flex items-center mt-3"> <i data-lucide="calendar" class="w-4 h-4 text-slate-500 mr-2"></i> Blood Group: {{ $p->user->blood_group }} </div>
                            <div class="flex items-center mt-3"> <i data-lucide="map-pin" class="w-4 h-4 text-slate-500 mr-2"></i> Race: African </div>
                        </div>
                        <div class="p-5 col-span-6 rounded-md">
                            <div class="flex items-center"> <i data-lucide="thermometer" class="w-4 h-4 text-slate-500 mr-2"></i> Blood Pressure Level: <a href="" class="underline decoration-dotted ml-1">{{ $p->bp_level }}</a> </div>
                            <div class="flex items-center mt-3"> <i data-lucide="bug" class="w-4 h-4 text-slate-500 mr-2"></i> Infections: <a href="" class="underline decoration-dotted ml-1">{{ $p->infection }}</a> </div>
                            <div class="flex items-center mt-3"> <i data-lucide="bug" class="w-4 h-4 text-slate-500 mr-2"></i> Allegy: None </div>
                            <div class="flex items-center mt-3"> <i data-lucide="bug" class="w-4 h-4 text-slate-500 mr-2"></i> Diseases: None. </div>
                        </div>
                    </div>
                </div>
                <!-- END: Daily Sales -->
                <!-- BEGIN: Announcement -->
                <div class="intro-y box col-span-12 2xl:col-span-6">
                    <div class="flex items-center px-5 py-3 border-b border-slate-200/60 dark:border-darkmode-400">
                        <h2 class="font-medium text-base mr-auto">
                            Treatments and Diagnosis
                        </h2>
                        <button data-carousel="announcement" data-target="prev" class="tiny-slider-navigator btn btn-outline-secondary px-2 mr-2"> <i data-lucide="chevron-left" class="w-4 h-4"></i> </button>
                        <button data-carousel="announcement" data-target="next" class="tiny-slider-navigator btn btn-outline-secondary px-2"> <i data-lucide="chevron-right" class="w-4 h-4"></i> </button>
                    </div>
                    <div class="tiny-slider py-5" id="announcement">
                        <div class="px-5">
                            <div class="font-medium text-lg">Condition</div>
                            <div class="text-slate-600 dark:text-slate-500 mt-2">
                                <h2 class="capitalize">{{ $p->condition }}</h2>
                                <br>
                                <p class="capitalize">{{ $p->symptom }}</p>
                            </div>
                            <div class="flex items-center">
                                {{-- <div class="px-3 py-2 text-primary bg-primary/10 dark:bg-darkmode-400 dark:text-slate-300 rounded font-medium">02 June 2021</div> --}}
                                {{-- <button class="btn btn-secondary ml-auto">View Details</button> --}}
                            </div>
                        </div>
                        <div class="px-5">
                            <div class="font-medium text-lg">Treatment Method</div>
                            <div class="text-slate-600 dark:text-slate-500 mt-2">
                                <h2 class="capitalize">{{ $p->treatment }}</strong>
                                <br>
                                <p class="capitalize">{{ $p->symptom }}</p>
                            </div>
                            <div class="flex items-center">
                                {{-- <div class="px-3 py-2 text-primary bg-primary/10 dark:bg-darkmode-400 dark:text-slate-300 rounded font-medium">02 June 2021</div> --}}
                                {{-- <button class="btn btn-secondary ml-auto">View Details</button> --}}
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="p-5">
                        <div style="color:#F65B08" class="font-small text-lg">Notes</div>
                        <div class="text-slate-600 dark:text-slate-500 mt-2">
                            {!! $p->comments ?? 'No notes' !!}
                            <br>
                            <br>
                            <div class="flex items-center"> 
                                <i data-lucide="history" class="w-4 h-4 mr-2"></i> {{ $p->created_at->subDays()->diffForHumans() }}
                            </div>
                            <div class="flex items-center mt-2"> 
                                <i data-lucide="calendar" class="w-4 h-4 mr-2"></i> {{ $p->created_at->toTimeString() }}
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END: Announcement -->
                
                <!-- BEGIN: Today Schedules -->
                <div class="intro-y box col-span-12 2xl:col-span-6">
                    <div class="flex items-center px-5 py-3 border-b border-slate-200/60 dark:border-darkmode-400">
                        <h2 class="font-medium text-base mr-auto">
                            Upcomming Schedules
                        </h2>
                        <button data-carousel="today-schedule" data-target="prev" class="tiny-slider-navigator btn btn-outline-secondary px-2 mr-2"> <i data-lucide="chevron-left" class="w-4 h-4"></i> </button>
                        <button data-carousel="today-schedule" data-target="next" class="tiny-slider-navigator btn btn-outline-secondary px-2"> <i data-lucide="chevron-right" class="w-4 h-4"></i> </button>
                    </div>
                    <div class="tiny-slider py-5" id="today-schedule">
                        @forelse ($appointments as $appointment)
                        <div class="px-5 text-center sm:text-left">
                            <div class="font-medium text-lg">{{ $appointment->title ?? 'Appointment '.$appointment->id }}</div>
                            <div class="text-slate-600 dark:text-slate-500 mt-2">{{ $appointment->comments ?? $appointment->title }}</div>
                            <div class="mt-2">{{ $appointment->start_time }} - {{ $appointment->end_time }}</div>
                            <div class="flex flex-col sm:flex-row items-center mt-5">
                                <div class="flex items-center text-slate-500"> <i data-lucide="map-pin" class="hidden sm:block w-4 h-4 mr-2"></i> {{ $appointment->video_link ?? 'No Video Link' }} </div>
                                <div class="flex items-center text-slate-500"> <i data-lucide="map-pin" class="hidden sm:block w-4 h-4 mr-2"></i> {{ $appointment->call_link ?? 'No Call Link' }} </div>
                                <button class="btn btn-secondary py-1 px-2 sm:ml-auto mt-3 sm:mt-0sm:ml-auto mt-3 sm:mt-0">View On Map</button>
                            </div>
                        </div>
                        @empty
                            
                        @endforelse

                    </div>
                </div>
                <!-- END: Today Schedules -->
                
                <!-- BEGIN: Work In Progress -->
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
                                <div>
                                    <div class="flex">
                                        <div class="mr-auto">Pending Tasks</div>
                                        <div>20%</div>
                                    </div>
                                    <div class="progress h-1 mt-2">
                                        <div class="progress-bar w-1/2 bg-primary" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
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
                </div> --}}
                <!-- END: Work In Progress -->
            </div>
        </div>
    </div>
</div>
@endsection