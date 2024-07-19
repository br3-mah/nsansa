@extends('layouts.app')
@section('content')
<div class="content">
    <h2 class="text-lg font-medium mr-auto flex space-x-6 mt-8">
        <i data-lucide="users" class="w-6 h-6"></i>
        &nbsp;
        <span>Registered Users</span>
    </h2>
    @if (Session::has('attention'))
    <div class="intro-x alert alert-secondary w-1/2 alert-dismissible justify-center show flex items-center mb-2" role="alert"> 
        <i data-lucide="alert-octagon" class="w-6 h-6 mr-2"></i> 
        {{ Session::get('attention') }}
        <button type="button" class="btn-close" data-tw-dismiss="alert" aria-label="Close"> 
            <i data-lucide="x" class="w-4 h-4"></i> 
        </button> 
    </div>
    @elseif (Session::has('error_msg'))
    <div class="intro-x alert alert-danger w-1/2 alert-dismissible justify-center show flex items-center mb-2" role="alert"> 
        <i data-lucide="alert-octagon" class="w-6 h-6 mr-2"></i> 
        {{ Session::get('error_msg') }}
        <button type="button" class="btn-close" data-tw-dismiss="alert" aria-label="Close"> 
            <i data-lucide="x" class="w-4 h-4"></i> 
        </button> 
    </div>
    @endif
    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="intro-y col-span-12 flex flex-wrap sm:flex-nowrap items-center mt-2">

            <a  href="{{ route('users.create') }}" class="btn btn-primary shadow-md mr-2">Add New User</a>
            <div class="dropdown">
                <button class="dropdown-toggle btn px-2 box" aria-expanded="false" data-tw-toggle="dropdown">
                    <span class="w-5 h-5 flex items-center justify-center"> <i class="w-4 h-4" data-lucide="plus"></i> </span>
                </button>
                <div class="dropdown-menu w-40">
                    <ul class="dropdown-content">
                        <li>
                            <a  href="{{ route('roles.create') }}" class="dropdown-item"> <i data-lucide="users" class="w-4 h-4 mr-2"></i> Add User Role </a>
                        </li>
                        {{-- <li>
                            <a  href="javascript:;" data-tw-toggle="modal" data-tw-target="#create-permission-modal" class="dropdown-item"> <i data-lucide="users" class="w-4 h-4 mr-2"></i> Add Permissions </a>
                        </li> --}}
                        {{-- <li>
                            <a href="" class="dropdown-item"> <i data-lucide="message-circle" class="w-4 h-4 mr-2"></i> Send Message </a>
                        </li> --}}
                    </ul>
                </div>
            </div>
            <div class="hidden md:block mx-auto text-slate-500">Showing {{ $users->count() }} entries</div>
            <div class="flex w-full sm:w-auto">
                {{-- <select class="form-select box ml-2">
                    <option>All</option>
                    @foreach($roles as $role)
                    <option>{{  $role->name }}</option>
                    @endforeach
                </select> --}}
            </div>
            <div class="w-full sm:w-auto mt-3 sm:mt-0 sm:ml-auto md:ml-0">
                {{-- <div class="w-56 relative text-slate-500">
                    <input type="text" class="form-control w-56 box pr-10" placeholder="Search...">
                    <i class="w-4 h-4 absolute my-auto inset-y-0 mr-3 right-0" data-lucide="search"></i> 
                </div> --}}
            </div>
        </div>
        <!-- BEGIN: Users Layout -->
        @forelse($users as $user)
        {{-- @dd($user->roles) --}}
        <div class="intro-y col-span-12 md:col-span-6">
            <div class="box">
                <div class="flex flex-row lg:items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                    <div class="w-8 h-8 lg:w-12 lg:h-12 image-fit mr-1">
                        @if($user->image_path == null)
                            <div class="w-8 h-8 bg-primary text-center px-1 py-2 rounded-full zoom-in tooltip" title="{{ $user->fname.' '.$user->lname  }}">
                                <span class="text-white capitalize">{{ $user->fname[0].' '.$user->lname[0] }}</span>
                            </div>
                        @else
                            <img alt="User" class="w-8 h-8 rounded-full" src="{{ asset('public/storage/'.$user->image_path) }}">
                        @endif
                        {{-- <img alt="User" class="rounded-full" src="{{ asset('public/storage/'.$user->image_path) }}"> --}}
                    </div>
                    <div class="lg:ml-2 w-3/4 lg:w-full lg:mr-auto text-left mt-0">
                        <a href="{{ route('users.show', $user->id) }}" class="capitalize font-medium">{{ $user->fname.' '.$user->lname }}</a> 
                        <div class="text-slate-500 text-xs mt-0 lg:mt-0.5">
                            <span>{{ $user->email }}</span>
                            <br>
                            @foreach($user->roles as $role)
                                <span class="capitalize">{{ $role->name }}</span>
                            @endforeach
                            <br>
                            @foreach($user->roles as $role)
                                @if($role->name == 'counselor')
                                <span class="capitalize">{{ $user->department ?? '' }}</span>
                                @else
                                <span class="capitalize zoom-in tooltip" title="Registered date" {{ $user->created_at->toFormattedDateString() }}</span>
                                @endif
                            @endforeach
                            
                        </div>
                    </div>
                    <div class="flex -ml-2 lg:ml-0 lg:justify-end mt-3 lg:mt-0">
                        <a href="{{ route('users.show', $user->id) }}" class="w-8 h-8 rounded-full flex items-center justify-center border dark:border-darkmode-400 ml-2 text-slate-400 zoom-in tooltip" title="User Profile"> <i class="w-3 h-3 fill-current" data-lucide="user"></i> </a>
                        {{-- <a href="" class="w-8 h-8 rounded-full flex items-center justify-center border dark:border-darkmode-400 ml-2 text-slate-400 zoom-in tooltip" title="Deactivate"> <i class="w-3 h-3 fill-current text-danger" data-lucide="trash"></i> </a> --}}
                        @foreach($user->roles as $role)
                            @if($role->name == 'patient')
                            <a href="{{ route('all-patient-files', $user->id) }}" class="w-8 h-8 rounded-full flex items-center justify-center border dark:border-darkmode-400 ml-2 text-slate-400 zoom-in tooltip" title="Patient Profile"> <i class="w-3 h-3 fill-current" data-lucide="files"></i> </a>
                            @endif
                        @endforeach
                        {{-- <a href="" class="w-8 h-8 rounded-full flex items-center justify-center border dark:border-darkmode-400 ml-2 text-slate-400 zoom-in tooltip" title="Facebook"> <i class="w-3 h-3 fill-current" data-lucide="facebook"></i> </a>
                        <a href="" class="w-8 h-8 rounded-full flex items-center justify-center border dark:border-darkmode-400 ml-2 text-slate-400 zoom-in tooltip" title="Twitter"> <i class="w-3 h-3 fill-current" data-lucide="twitter"></i> </a>
                        <a href="" class="w-8 h-8 rounded-full flex items-center justify-center border dark:border-darkmode-400 ml-2 text-slate-400 zoom-in tooltip" title="Linked In"> <i class="w-3 h-3 fill-current" data-lucide="linkedin"></i> </a> --}}
                    </div>
                </div>
                <div id="usersIndexControls" class="flex flex-wrap lg:flex-nowrap items-center justify-center p-5">
                    <div class="w-full lg:w-1/2 mb-4 lg:mb-0 mr-auto">
                        <div class="flex text-slate-500 text-xs">
                            <div class="mr-auto flex">
                                @if($user->email_verified_at == null)
                                    <span class="text-light">Never Loggedin</span>
                                @else
                                    <i class="w-4 h-4" data-lucide="verified"></i>&nbsp;<span class="text-success">Verified Account</span>
                                @endif
                            </div>
                            {{-- <div>20%</div> --}}
                        </div>
                    </div>
                    @foreach($user->roles as $role)
                        @if($role->name == 'patient')
                            <a href="{{ route('all-patient-files', $user->id) }}" class="btn btn-warning text-white py-1 px-2 mr-2">Patient Files</a>   
                        @endif
                    @endforeach
                    <a href="{{ route('users.show', $user->id) }}" class="btn btn-outline-secondary py-1 px-2">Profile</a>
                    
                </div>
            </div>
        </div>
        @empty
        <div class="intro-y col-span-12 md:col-span-6">
            <div class="box text-center">
                <p>No User Found</p>
            </div>
        </div>
        @endforelse
        

        <div class="intro-y col-span-12 flex flex-wrap sm:flex-row sm:flex-nowrap w-full"></div>
            <nav class="w-full">
                <ul class="w-full" style="width:100%">
                    {!! $users->links() !!}
                </ul>
            </nav>
        </div>
    </div>
</div>
<!-- BEGIN: Delete Confirmation Modal -->
@include('page.modals.delete-confirmation')
<!-- END: Delete Confirmation Modal -->

<!-- BEGIN: Delete Confirmation Modal -->
@include('page.modals.create-user-permission')
<!-- END: Delete Confirmation Modal -->

<!-- BEGIN: Delete Confirmation Modal -->
@include('page.modals.create-user-role')
<!-- END: Delete Confirmation Modal -->

<!-- BEGIN: Delete Confirmation Modal -->
@include('page.modals.create-user')
<!-- END: Delete Confirmation Modal -->
@endsection