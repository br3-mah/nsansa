@extends('layouts.app-settings')
@section('content')
<div class="content">
    <div class="flex mt-6">
        <h2 class="text-lg font-medium mr-auto flex space-x-6 mt-8">
            <i data-lucide="package" class="w-6 h-6"></i>
            &nbsp;
            @hasrole('admin')
            <span>Configuration Settings</span>
            @endhasrole
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
    <div class="w-full mt-5">
        <!-- BEGIN: Users Layout -->
        <form action="{{ route('backup-db') }}" method="POST">
            @csrf
            <button class="btn btn-primary">Backup Database</button>
        </form>
    </div>
</div>
@endsection