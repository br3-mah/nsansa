@extends('layouts.app-settings')
@section('content')
<div class="content">
    <h2 class="text-lg font-medium mr-auto flex space-x-6 mt-8">
        <i data-lucide="shield-check" class="w-6 h-6"></i>
        <i data-lucide="settings" class="w-3 h-3"></i>
        &nbsp;
        @hasrole('admin')
        <span>Medical Departments Settings</span>
        @endhasrole

        @hasrole('counselor')
        <span>My Department</span>
        @endhasrole
    </h2>
    <div class="px-4">
        @if (Session::has('attention'))
        <div class="intro-x alert alert-secondary w-1/2 alert-dismissible justify-center show flex items-center mb-2" role="alert"> 
            <i data-lucide="alert-octagon" class="w-6 h-6 mr-2"></i> 
            {{ Session::get('attention') }}
            <button type="button" class="btn-close" data-tw-dismiss="alert" aria-label="Close"> 
                <i data-lucide="x" class="w-4 h-4"></i> 
            </button> 
        </div>
        @elseif (Session::has('error_msg'))
        <div class="intro-x px-4 alert alert-danger w-1/2 alert-dismissible justify-center show flex items-center mb-2" role="alert"> 
            <i data-lucide="alert-octagon" class="w-6 h-6 mr-2"></i> 
            {{ Session::get('error_msg') }}
            <button type="button" class="btn-close" data-tw-dismiss="alert" aria-label="Close"> 
                <i data-lucide="x" class="w-4 h-4"></i> 
            </button> 
        </div>
        @endif
    </div>
    <div id="dept-controls" class="intro-y col-span-12 flex flex-wrap sm:flex-nowrap items-center px-4 mt-2">

        <button id="add-new-dept" class="btn btn-primary shadow-md mr-2">Add New Department</button>

        <div class="hidden md:block mx-auto text-slate-500">Showing {{ 6 + $depts->count() }} entries</div>
        
        <div class="flex w-full sm:w-auto">
        </div>
        <div class="w-1/2 sm:w-auto mt-3 sm:mt-0 sm:ml-auto md:ml-0">
        </div>
    </div>
    
    <div id="add-dept-form" class="intro-y box w-3/4 mt-2 mx-4 py-4">
        <form action="{{ route('settings.departments.store') }}" method="POST" class="px-5">
            @csrf
            <input type="hidden" name="initials" value="NMD">
            <label for="value" class="form-label">Department Name</label>
            <input type="text" 
                class="form-control" 
                name="name" 
                placeholder="Ex. Marriage & Familiy Counselor" required>
            @if ($errors->has('name'))
                <span class="text-danger text-left">{{ $errors->first('name') }}</span>
            @endif
            <br>
            <label for="value" class="form-label">Liecense</label>
            <input type="hidden" name="desc" value="medical-dept">
            <input type="text" class="form-control" name="liecense" placeholder="Ex. LLWC">
            <br><br>
            <button id="cancel-process" class="btn btn-secondary">Cancel</button>
            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>
    <div class="w-full px-4 py-4">

        @forelse ($depts as $dept)
        <div class="intro-y alert alert-secondary show mb-2" role="alert">
            <div class="flex items-center">
                <div class="font-medium text-sm">{{ $dept->name }}</div>
                {{-- <div class="font-medium text-sm">{{ $dept->name }} {{ $dept->initials ?? '' }}</div> --}}
                <a href="{{ route('settings.departments.delete', $dept->id) }}" class="btn btn-danger text-xs bg-danger px-1 rounded-md text-white ml-auto">Delete</a>
            </div>
            <small class="mt-3">{{ $dept->desc }}</small>
        </div>    
        @empty
        @endforelse
        <div class="intro-y alert alert-secondary show mb-2" role="alert">
            <div class="flex items-center">
                <div class="font-medium text-sm">Clinical Social Worker</div>
                {{-- <div class="text-xs bg-slate-500 px-1 rounded-md text-white ml-auto">New</div> --}}
            </div>
            {{-- <small class="mt-3">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</small> --}}
        </div>

        <div class="intro-y alert alert-secondary show mb-2" role="alert">
            <div class="flex items-center">
                <div class="font-medium text-sm">Clinical Social Worker</div>
                {{-- <div class="text-xs bg-slate-500 px-1 rounded-md text-white ml-auto">New</div> --}}
            </div>
            {{-- <small class="mt-3">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</small> --}}
        </div>
        <div class="intro-y alert alert-secondary show mb-2" role="alert">
            <div class="flex items-center">
                <div class="font-medium text-sm">Marriage & Family Therapist</div>
                {{-- <div class="text-xs bg-slate-500 px-1 rounded-md text-white ml-auto">New</div> --}}
            </div>
            {{-- <small class="mt-3">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</small> --}}
        </div>
        <div class="intro-y alert alert-secondary show mb-2" role="alert">
            <div class="flex items-center">
                <div class="font-medium text-sm">Mental Health Counselor</div>
                {{-- <div class="text-xs bg-slate-500 px-1 rounded-md text-white ml-auto">New</div> --}}
            </div>
            {{-- <small class="mt-3">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</small> --}}
        </div>
        <div class="intro-y alert alert-secondary show mb-2" role="alert">
            <div class="flex items-center">
                <div class="font-medium text-sm">Professional Counselor</div>
                {{-- <div class="text-xs bg-slate-500 px-1 rounded-md text-white ml-auto">New</div> --}}
            </div>
            {{-- <small class="mt-3">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</small> --}}
        </div>
        <div class="intro-y alert alert-secondary show mb-2" role="alert">
            <div class="flex items-center">
                <div class="font-medium text-sm">Psychologist</div>
                {{-- <div class="text-xs bg-slate-500 px-1 rounded-md text-white ml-auto">New</div> --}}
            </div>
            {{-- <small class="mt-3">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</small> --}}
        </div>
    </div>

</div>
@endsection
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script th:inline="javascript">
    $(document).ready(function() {

        $('#add-dept-form').hide();

        $('#add-new-dept').click(function(){
            $('#dept-controls').hide();
            $('#add-dept-form').show();
        });

        $('#cancel-process').click(function(){
            $('#add-dept-form').hide();
            $('#dept-controls').show();
        });

    });
</script>