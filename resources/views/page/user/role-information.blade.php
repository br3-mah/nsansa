@extends('layouts.app')
@section('content')

<div class="content">
    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">
            {{ ucfirst($role->name) }} Role
        </h2>
    </div>

    <!-- BEGIN: Profile Info -->
    <div class="intro-y box px-5 pt-5 mt-5">
        <div class="flex flex-col lg:flex-row border-b border-slate-200/60 dark:border-darkmode-400 pb-5 -mx-5">
            <div class="w-full mt-6 lg:mt-0 flex-1 px-5 border-l border-r border-slate-200/60 dark:border-darkmode-400 border-t lg:border-t-0 pt-5 lg:pt-0">
                <div class="font-medium text-center lg:text-left lg:mt-3">Assigned Permissions</div>
                <div class="flex flex-col justify-center items-center lg:items-start mt-4">
                    @foreach($rolePermissions as $permission)
                        <div class="sm:whitespace-normal flex items-center"> <i data-lucide="pin" class="w-4 h-4 mr-2"></i>{{ $permission->name }}</div>
                    @endforeach
                </div>
            </div>
            <div class="mt-6 lg:mt-0 flex-1 px-5 border-t lg:border-0 border-slate-200/60 dark:border-darkmode-400 pt-5 lg:pt-0">
                <div class="font-medium text-center lg:text-left lg:mt-5">Access Metrix</div>
                <div class="flex items-center justify-center lg:justify-start mt-2">
                    <div class="mr-2 w-20 flex"> Number of Logins: <span class="ml-3 font-medium text-success">+23%</span> </div>
                    <div class="w-3/4">
                        <div class="h-[55px]">
                            <canvas class="simple-line-chart-1 -mr-5"></canvas>
                        </div>
                    </div>
                </div>
                <div class="flex items-center justify-center lg:justify-start mt-2">
                    <div class="mr-2 w-20 flex"> Role ID: <span class="ml-3 font-medium text-success">{{ $role->id }}</span> </div>
                    <div class="w-3/4">
                        <div class="h-[55px]">
                            <canvas class="simple-line-chart-1 -mr-5"></canvas>
                        </div>
                    </div>
                </div>
            </div>

    </div>
    <ul class="nav nav-link-tabs flex-col sm:flex-row justify-center lg:justify-start text-center" role="tablist" >
        {{-- <li id="dashboard-tab" class="nav-item" role="presentation"> <a href="javascript:;" class="nav-link py-4 active" data-tw-target="#dashboard" aria-controls="dashboard" aria-selected="true" role="tab" > Dashboard </a> </li> --}}
        <li id="account-and-profile-tab" class="nav-item" role="presentation"> 
            <div class="py-4 items-right justify-end">
                {!! Form::open(['method' => 'DELETE','route' => ['users.destroy', $role->id],'style'=>'display:inline']) !!}
                {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-sm fl-right mr-2']) !!}
                {!! Form::close() !!}
            </div>
        </li>
    </ul>
</div>
@endsection