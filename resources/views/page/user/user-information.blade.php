@extends('layouts.app')
@section('content')
<div class="content">
    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">
            User Profile 
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
                {{-- <button class="dropdown-toggle btn px-2 box" aria-expanded="false" data-tw-toggle="dropdown">
                    <span class="w-5 h-5 flex items-center justify-center"> <i class="w-4 h-4" data-lucide="plus"></i> </span>
                </button> --}}
            @can('users.edit')
            <a href="{{ route('users.edit', $user->id) }}" class="btn btn-md p-2 w-20"><i data-lucide="edit"></i>Assign Role</a>
            @endcan
        </div>
    </div>
    <!-- BEGIN: Profile Info -->
    <div class="intro-y box px-5 pt-5 mt-5">
                  
        <div class="flex flex-col lg:flex-row border-b border-slate-200/60 dark:border-darkmode-400 pb-5 -mx-5">
            <div class="flex flex-1 px-5 items-center justify-center lg:justify-start">
                <div class="w-20 h-20 sm:w-24 sm:h-24 flex-none lg:w-32 lg:h-32 image-fit relative">  
                    @if($user->image_path == null)
                        <div class="font-bolder bg-primary text-white w-8 h-8 sm:w-10 sm:h-10 rounded-full flex items-center justify-center border dark:border-darkmode-400 ml-2 text-slate-400 zoom-in tooltip" title="{{ $user->fname.' '.$user->lname  }}">
                            {{ $user->fname[0].' '.$user->lname[0] }}
                        </div>
                    @else
                    <img alt="{{ $user->lname.' '.$user->lname }}" class="rounded-full" src="{{ asset('public/storage/'.$user->image_path) }}">
                    @endif
                    {{-- <div class="absolute mb-1 mr-1 flex items-center justify-center bottom-0 right-0 bg-primary rounded-full p-2"> <i class="w-4 h-4 text-white" data-lucide="camera"></i> </div> --}}
                </div>
                <div class="ml-5">
                    <div class="capitalize w-24 sm:w-40 truncate sm:whitespace-normal font-medium text-lg">{{ $user->fname.' '.$user->lname}}</div>
                    <div class="capitalize text-slate-500"> {{ $user->lname.' '.$user->lname }}</div>
                </div>
            </div>
            <div class="mt-6 lg:mt-0 flex-1 px-5 border-l border-r border-slate-200/60 dark:border-darkmode-400 border-t lg:border-t-0 pt-5 lg:pt-0">
                <div class="font-medium text-center lg:text-left lg:mt-3">Contact Details</div>
                <div class="flex flex-col justify-center items-center lg:items-start mt-4">
                    <div class="truncate sm:whitespace-normal flex items-center"> <i data-lucide="mail" class="w-4 h-4 mr-2"></i> {{ $user->email }} </div>
                    <div class="truncate sm:whitespace-normal flex items-center mt-3"> <i data-lucide="instagram" class="w-4 h-4 mr-2"></i> Instagram {{ $user->fname.' '.$user->lname}} </div>
                    <div class="truncate sm:whitespace-normal flex items-center mt-3"> <i data-lucide="twitter" class="w-4 h-4 mr-2"></i> Twitter {{ $user->fname.' '.$user->lname}} </div>
                </div>
            </div>
            <div class="mt-6 lg:mt-0 flex-1 px-5 border-t lg:border-0 border-slate-200/60 dark:border-darkmode-400 pt-5 lg:pt-0">
                <div class="font-medium text-center lg:text-left lg:mt-5">Service Growth</div>
                <div class="flex items-center justify-center lg:justify-start mt-2">
                    <div class="mr-2 w-20 flex"> Counseling: <span class="ml-3 font-medium text-success">+23%</span> </div>
                    <div class="w-3/4">
                        <div class="h-[55px]">
                            <canvas class="simple-line-chart-1 -mr-5"></canvas>
                        </div>
                    </div>
                </div>
                <div class="flex items-center justify-center lg:justify-start">
                    <div class="mr-2 w-20 flex"> STP: <span class="ml-3 font-medium text-danger">-2%</span> </div>
                    <div class="w-3/4">
                        <div class="h-[55px]">
                            <canvas class="simple-line-chart-2 -mr-5"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <ul class="nav nav-link-tabs flex-col sm:flex-row justify-center lg:justify-start text-center" role="tablist" >
            <li id="dashboard-tab" class="nav-item" role="presentation"> <a href="javascript:;" class="nav-link py-4 active" data-tw-target="#dashboard" aria-controls="dashboard" aria-selected="true" role="tab" > Dashboard </a> </li>
            <li id="appointment-tab" class="nav-item" role="presentation"> <a href="javascript:;" class="nav-link py-4" data-tw-target="#appointments" aria-selected="false" role="tab" > Appointments </a> </li>
            <li id="billing-tab" class="nav-item" role="presentation"> <a href="javascript:;" class="nav-link py-4" data-tw-target="#billing" aria-selected="false" role="tab" > Billing </a> </li>
            <li id="payment-history-tab" class="nav-item" role="presentation"> <a href="javascript:;" class="nav-link py-4" data-tw-target="#payment-history" aria-selected="false" role="tab" > Payment History </a> </li>
            {{-- <li id="account-and-profile-tab" class="nav-item" role="presentation"> <a href="javascript:;" class="nav-link py-4" data-tw-target="#account-and-profile" aria-selected="false" role="tab" > Account & Profile </a> </li>
            <li id="activities-tab" class="nav-item" role="presentation"> <a href="javascript:;" class="nav-link py-4" data-tw-target="#activities" aria-selected="false" role="tab" > Activities </a> </li>
            <li id="tasks-tab" class="nav-item" role="presentation"> <a href="javascript:;" class="nav-link py-4" data-tw-target="#tasks" aria-selected="false" role="tab" > Tasks </a> </li> --}}
           
        </ul>
    </div>
    <!-- END: Profile Info -->
    <div class="intro-y tab-content mt-5">
        <div id="dashboard" class="tab-pane active" role="tabpanel" aria-labelledby="dashboard-tab">
            <div class="grid grid-cols-12 gap-6">
                <!-- BEGIN: Top Categories -->
                <div class="intro-y box col-span-12 lg:col-span-6">
                    <div class="flex items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                        <h2 class="font-medium text-base mr-auto">
                            Top Sessions
                        </h2>
                        <div class="dropdown ml-auto">
                            <a class="dropdown-toggle w-5 h-5 block" href="javascript:;" aria-expanded="false" data-tw-toggle="dropdown"> <i data-lucide="more-horizontal" class="w-5 h-5 text-slate-500"></i> </a>
                            <div class="dropdown-menu w-40">
                                <ul class="dropdown-content">
                                    <li>
                                        <a href="#" class="dropdown-item"> <i data-lucide="plus" class="w-4 h-4 mr-2"></i> Schedule Session </a>
                                    </li>
                                    <li>
                                        <a href="#" class="dropdown-item"> <i data-lucide="settings" class="w-4 h-4 mr-2"></i> Settings </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="p-5">
                        <div class="flex flex-col sm:flex-row">
                            <div class="mr-auto">
                                <a href="#" class="font-medium">Stress Management Therapy</a> 
                                <div class="text-slate-500 mt-1">Individual Patients</div>
                            </div>
                            <div class="flex">
                                <div class="w-32 -ml-2 sm:ml-0 mt-5 mr-auto sm:mr-5">
                                    <div class="h-[30px]">
                                        <canvas class="simple-line-chart-1" data-random="true"></canvas>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <div class="font-medium">6.5k</div>
                                    <div class="bg-success/20 text-success rounded px-2 mt-1.5">+150</div>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-col sm:flex-row mt-5">
                            <div class="mr-auto">
                                <a href="#" class="font-medium">Anger Mangement</a> 
                                <div class="text-slate-500 mt-1">Group Counseling</div>
                            </div>
                            <div class="flex">
                                <div class="w-32 -ml-2 sm:ml-0 mt-5 mr-auto sm:mr-5">
                                    <div class="h-[30px]">
                                        <canvas class="simple-line-chart-1" data-random="true"></canvas>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <div class="font-medium">2.5k</div>
                                    <div class="bg-pending/10 text-pending rounded px-2 mt-1.5">+150</div>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-col sm:flex-row mt-5">
                            <div class="mr-auto">
                                <a href="" class="font-medium">Family & Marriage Counseling</a> 
                                <div class="text-slate-500 mt-1">Couples</div>
                            </div>
                            <div class="flex">
                                <div class="w-32 -ml-2 sm:ml-0 mt-5 mr-auto sm:mr-5">
                                    <div class="h-[30px]">
                                        <canvas class="simple-line-chart-1" data-random="true"></canvas>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <div class="font-medium">3.4k</div>
                                    <div class="bg-primary/10 text-primary rounded px-2 mt-1.5">+150</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END: Top Categories -->
               
                <!-- BEGIN: Daily Sales -->
                <div class="intro-y box col-span-12 lg:col-span-6">
                    <div class="flex items-center px-5 py-5 sm:py-3 border-b border-slate-200/60 dark:border-darkmode-400">
                        <h2 class="font-medium text-base mr-auto">
                            Recent Billing
                        </h2>
                        <div class="dropdown ml-auto sm:hidden">
                            <a class="dropdown-toggle w-5 h-5 block" href="javascript:;" aria-expanded="false" data-tw-toggle="dropdown"> <i data-lucide="more-horizontal" class="w-5 h-5 text-slate-500"></i> </a>
                            <div class="dropdown-menu w-40">
                                <ul class="dropdown-content">
                                    <li>
                                        <a href="javascript:;" class="dropdown-item"> <i data-lucide="file" class="w-4 h-4 mr-2"></i> Download Excel </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <button class="btn btn-outline-secondary hidden sm:flex"> <i data-lucide="file" class="w-4 h-4 mr-2"></i> Download Excel </button>
                    </div>
                    <div class="p-5">
                        <div class="relative flex items-center">
                            <div class="w-12 h-12 flex-none image-fit">
                                {{-- <i data-lucide="f/ile"> --}}
                                {{-- <img alt="Midone - HTML Admin Template" class="rounded-full" src="dist/images/profile-14.jpg"> --}}
                            </div>
                            <div class="ml-4 mr-auto">
                                <a href="" class="font-medium">{{$user->fname. ' '.$user->lname}}</a> 
                                <div class="text-slate-500 mr-5 sm:mr-5">Grieving and Depression</div>
                            </div>
                            <div class="font-medium text-slate-600 dark:text-slate-500">K1900</div>
                        </div>
                        <div class="relative flex items-center mt-5">
                            <div class="w-12 h-12 flex-none image-fit">
                                <img alt="Midone - HTML Admin Template" class="rounded-full" src="dist/images/profile-2.jpg">
                            </div>
                            <div class="ml-4 mr-auto">
                                <a href="" class="font-medium">{{$user->fname. ' '.$user->lname}}</a> 
                                <div class="text-slate-500 mr-5 sm:mr-5">Anxiety</div>
                            </div>
                            <div class="font-medium text-slate-600 dark:text-slate-500">K2500</div>
                        </div>
                        <div class="relative flex items-center mt-5">
                            <div class="w-12 h-12 flex-none image-fit">
                                <img alt="" class="rounded-full" src="dist/images/profile-6.jpg">
                            </div>
                            <div class="ml-4 mr-auto">
                                <a href="" class="font-medium">{{$user->fname. ' '.$user->lname}}</a> 
                                <div class="text-slate-500 mr-5 sm:mr-5">Stress Management</div>
                            </div>
                            <div class="font-medium text-slate-600 dark:text-slate-500">K1100</div>
                        </div>
                    </div>
                </div>
                <!-- END: Daily Sales -->
                <!-- BEGIN: Latest Tasks -->
                <div class="intro-y box col-span-12 lg:col-span-6">
                    <div class="flex items-center px-5 py-5 sm:py-0 border-b border-slate-200/60 dark:border-darkmode-400">
                        <h2 class="font-medium text-base mr-auto">
                            Latest Appointments
                        </h2>
                        <div class="dropdown ml-auto sm:hidden">
                            <a class="dropdown-toggle w-5 h-5 block" href="javascript:;" aria-expanded="false" data-tw-toggle="dropdown"> <i data-lucide="more-horizontal" class="w-5 h-5 text-slate-500"></i> </a>
                            <div class="nav nav-tabs dropdown-menu w-40" role="tablist">
                                <ul class="dropdown-content">
                                    <li> <a id="latest-tasks-mobile-new-tab" href="javascript:;" data-tw-toggle="tab" data-tw-target="#latest-tasks-new" class="dropdown-item" role="tab" aria-controls="latest-tasks-new" aria-selected="true">New</a> </li>
                                    <li> <a id="latest-tasks-mobile-last-week-tab" href="javascript:;" data-tw-toggle="tab" data-tw-target="#latest-tasks-last-week" class="dropdown-item" role="tab" aria-selected="false">Last Week</a> </li>
                                </ul>
                            </div>
                        </div>
                        <ul class="nav nav-link-tabs w-auto ml-auto hidden sm:flex" role="tablist" >
                            <li id="latest-tasks-new-tab" class="nav-item" role="presentation"> <a href="javascript:;" class="nav-link py-5 active" data-tw-target="#latest-tasks-new" aria-controls="latest-tasks-new" aria-selected="true" role="tab" > New </a> </li>
                            <li id="latest-tasks-last-week-tab" class="nav-item" role="presentation"> <a href="javascript:;" class="nav-link py-5" data-tw-target="#latest-tasks-last-week" aria-selected="false" role="tab" > Last Week </a> </li>
                        </ul>
                    </div>
                    <div class="p-5">
                        <div class="tab-content">
                            <div id="latest-tasks-new" class="tab-pane active" role="tabpanel" aria-labelledby="latest-tasks-new-tab">
                                <div class="flex items-center">
                                    <div class="border-l-2 border-primary dark:border-primary pl-4">
                                        <a href="" class="font-medium">Create New Campaign</a> 
                                        <div class="text-slate-500">10:00 AM</div>
                                    </div>
                                    <div class="form-check form-switch ml-auto">
                                        <input class="form-check-input" type="checkbox">
                                    </div>
                                </div>
                                <div class="flex items-center mt-5">
                                    <div class="border-l-2 border-primary dark:border-primary pl-4">
                                        <a href="" class="font-medium">Meeting With Client</a> 
                                        <div class="text-slate-500">02:00 PM</div>
                                    </div>
                                    <div class="form-check form-switch ml-auto">
                                        <input class="form-check-input" type="checkbox">
                                    </div>
                                </div>
                                <div class="flex items-center mt-5">
                                    <div class="border-l-2 border-primary dark:border-primary pl-4">
                                        <a href="" class="font-medium">Create New Repository</a> 
                                        <div class="text-slate-500">04:00 PM</div>
                                    </div>
                                    <div class="form-check form-switch ml-auto">
                                        <input class="form-check-input" type="checkbox">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- BEGIN: Work In Progress -->
                <div class="intro-y box col-span-12 lg:col-span-6">
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
                                <a href="" class="btn btn-secondary block w-40 mx-auto mt-5">View More Details</a> 
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END: Work In Progress -->
                <!-- END: Latest Tasks -->
                <!-- BEGIN: General Statistic -->
                {{-- <div class="intro-y box col-span-12">
                    <div class="flex items-center px-5 py-5 sm:py-3 border-b border-slate-200/60 dark:border-darkmode-400">
                        <h2 class="font-medium text-base mr-auto">
                            General Statistics
                        </h2>
                        <div class="dropdown ml-auto sm:hidden">
                            <a class="dropdown-toggle w-5 h-5 block" href="javascript:;" aria-expanded="false" data-tw-toggle="dropdown"> <i data-lucide="more-horizontal" class="w-5 h-5 text-slate-500"></i> </a>
                            <div class="dropdown-menu w-40">
                                <ul class="dropdown-content">
                                    <li>
                                        <a href="javascript:;" class="dropdown-item"> <i data-lucide="file" class="w-4 h-4 mr-2"></i> Download XML </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <button class="btn btn-outline-secondary hidden sm:flex"> <i data-lucide="file" class="w-4 h-4 mr-2"></i> Download XML </button>
                    </div>
                    <div class="grid grid-cols-1 2xl:grid-cols-7 gap-6 p-5">
                        <div class="2xl:col-span-2">
                            <div class="grid grid-cols-2 gap-6">
                                <div class="col-span-2 sm:col-span-1 2xl:col-span-2 box dark:bg-darkmode-500 p-5">
                                    <div class="font-medium">Net Worth</div>
                                    <div class="flex items-center mt-1 sm:mt-0">
                                        <div class="mr-4 w-20 flex"> USP: <span class="ml-3 font-medium text-success">+23%</span> </div>
                                        <div class="w-5/6 overflow-auto">
                                            <div class="h-[51px]">
                                                <canvas class="simple-line-chart-1" data-random="true"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-span-2 sm:col-span-1 2xl:col-span-2 box dark:bg-darkmode-500 p-5">
                                    <div class="font-medium">Sales</div>
                                    <div class="flex items-center mt-1 sm:mt-0">
                                        <div class="mr-4 w-20 flex"> USP: <span class="ml-3 font-medium text-danger">-5%</span> </div>
                                        <div class="w-5/6 overflow-auto">
                                            <div class="h-[51px]">
                                                <canvas class="simple-line-chart-1" data-random="true"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-span-2 sm:col-span-1 2xl:col-span-2 box dark:bg-darkmode-500 p-5">
                                    <div class="font-medium">Profit</div>
                                    <div class="flex items-center mt-1 sm:mt-0">
                                        <div class="mr-4 w-20 flex"> USP: <span class="ml-3 font-medium text-danger">-10%</span> </div>
                                        <div class="w-5/6 overflow-auto">
                                            <div class="h-[51px]">
                                                <canvas class="simple-line-chart-1" data-random="true"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-span-2 sm:col-span-1 2xl:col-span-2 box dark:bg-darkmode-500 p-5">
                                    <div class="font-medium">Products</div>
                                    <div class="flex items-center mt-1 sm:mt-0">
                                        <div class="mr-4 w-20 flex"> USP: <span class="ml-3 font-medium text-success">+55%</span> </div>
                                        <div class="w-5/6 overflow-auto">
                                            <div class="h-[51px]">
                                                <canvas class="simple-line-chart-1" data-random="true"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="2xl:col-span-5 w-full">
                            <div class="flex justify-center mt-8">
                                <div class="flex items-center mr-5">
                                    <div class="w-2 h-2 bg-primary rounded-full mr-3"></div>
                                    <span>Product Profit</span> 
                                </div>
                                <div class="flex items-center">
                                    <div class="w-2 h-2 bg-slate-300 rounded-full mr-3"></div>
                                    <span>Author Sales</span> 
                                </div>
                            </div>
                            <div class="mt-8">
                                <div class="h-[420px]">
                                    <canvas id="stacked-bar-chart-1"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
                <!-- END: General Statistic -->
            </div>
        </div>
    </div>
</div>

@endsection

<script>
$('.details').hide();
$('.details').hide();
$('.details').hide();
$('.details').hide();

$("img").error(function () {
    $(this).unbind("error").attr("src", "https://firstsiteguide.com/wp-content/uploads/2020/11/what-is-gravatar-1-1-700x313-1-1.jpg");
});
</script>
