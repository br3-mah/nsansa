@extends('layouts.app')
@section('content')
<div class="content">
    <h2 class="intro-y text-lg font-medium mt-8">
        Add New Role
    </h2>
    <div class="container mx-auto">
    <!-- BEGIN: Modal Content -->
    <div class="col-span-12">
        <div class="content">
            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                    </ul>
                </div>
            @endif
            <form method="POST" action="{{ route('roles.store') }}">
                @csrf
                <!-- BEGIN: Modal Body -->
                <div class="">
                    <div class="col-span-12 sm:col-span-6"> 
                        <label for="modal-form-1" class="form-label">Role Name</label>
                        <input id="modal-form-1" value="{{ old('name') }}" type="text" name="name" class="form-control" placeholder=""> 
                    </div>
                    <hr>
                    <br>
                    <label for="permissions" class="form-label font-bold text-warning">Assign Permissions</label>

                    <table class="table table-striped">
                        <thead>
                            <th scope="col" width="1%"><input type="checkbox" name="all_permission"></th>
                            <th scope="col" width="20%">Name</th>
                            <th scope="col" width="1%">Guard</th> 
                        </thead>
    
                        @foreach($permissions as $permission)
                            <tr>
                                <td>
                                    <input type="checkbox" 
                                    name="permission[{{ $permission->name }}]"
                                    value="{{ $permission->name }}"
                                    class='permission'>
                                </td>
                                <td>{{ $permission->name }}</td>
                                <td>{{ $permission->guard_name }}</td>
                            </tr>
                        @endforeach
                    </table>
                </div> 
                <!-- END: Modal Body -->
                <!-- BEGIN: Modal Footer -->
                <div class="modal-footer"> 
                    <button type="button" data-tw-dismiss="modal" class="btn btn-outline-secondary w-20 mr-1">Cancel</button> 
                    <button type="submit" class="btn btn-primary w-30">Save Role</button> 
                </div> <!-- END: Modal Footer -->
            </form>
        </div>
    </div>
    </div>
</div>
@endsection