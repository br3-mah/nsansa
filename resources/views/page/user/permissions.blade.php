@extends('layouts.app')
@section('content')
<div class="content content--top-nav">
    <h2 class="intro-y text-lg font-medium mt-20">
        Persmissions
    </h2>
    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="intro-y col-span-12 flex flex-wrap xl:flex-nowrap items-center mt-2">
            {{-- <div class="flex w-full sm:w-auto">
                <div class="w-48 relative text-slate-500">
                    <input type="text" class="form-control w-48 box pr-10" placeholder="Search Role">
                    <i class="w-4 h-4 absolute my-auto inset-y-0 mr-3 right-0" data-lucide="search"></i> 
                </div>
                <select class="form-select box ml-2">
                    <option>Counselors</option>
                    <option>Therapist</option>
                    <option>Patients</option>
                </select>
            </div> --}}
            <div class="hidden xl:block mx-auto text-slate-500">Showing 1 to 2 of 2 entries</div>
            <div class="w-full xl:w-auto flex items-center mt-3 xl:mt-0">
                @if(Auth::user()->role == 'admin' )
                    <a class="btn btn-primary shadow-md mr-2"  href="javascript:;" data-tw-toggle="modal" data-tw-target="#create-permission-modal"> <i data-lucide="file-text" class="w-4 h-4 mr-2"></i> Add Permission </a>
                @endif
                <div class="dropdown">
                    {{-- <button class="dropdown-toggle btn px-2 box" aria-expanded="false" data-tw-toggle="dropdown">
                        <span class="w-5 h-5 flex items-center justify-center"> <i class="w-4 h-4" data-lucide="plus"></i> </span>
                    </button> --}}
                    {{-- <div class="dropdown-menu w-40">
                        <ul class="dropdown-content">
                            <li>
                                <a href="" class="dropdown-item"> <i data-lucide="arrow-left-right" class="w-4 h-4 mr-2"></i> Change Status </a>
                            </li>
                            <li>
                                <a href="" class="dropdown-item"> <i data-lucide="bookmark" class="w-4 h-4 mr-2"></i> New Activity </a>
                            </li>
                        </ul>
                    </div> --}}
                </div>
            </div>
        </div>
        <!-- BEGIN: Data List -->
        <div class="intro-y col-span-12 overflow-auto 2xl:overflow-visible">
            <table class="table table-report -mt-2">
                <thead>
                    <tr>
                        <th class="whitespace-nowrap">
                            <input class="form-check-input" type="checkbox">
                        </th>
                        {{-- <th class="whitespace-nowrap">INVOICE</th> --}}
                        <th class="whitespace-nowrap">PERMISSION</th>
                        <th class="text-center whitespace-nowrap">GUARD NAME</th>
                        {{-- <th class="whitespace-nowrap">PAYMENT</th> --}}
                        {{-- <th class="text-right whitespace-nowrap">
                            <div class="pr-16">TOTAL TRANSACTION</div>
                        </th> --}}
                        <th class="text-center whitespace-nowrap"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($permissions as $permission)
                    <tr class="intro-x">
                        <td class="w-10">
                            <input class="form-check-input" type="checkbox">
                        </td>
                        {{-- <td class="w-40 !py-4"> <a href="" class="underline decoration-dotted whitespace-nowrap">#INV-25807556</a> </td> --}}
                        <td class="w-40">
                            <a href="" class="font-medium whitespace-nowrap">{{ $permission->name }}</a> 
                            {{-- <div class="text-slate-500 text-xs whitespace-nowrap mt-0.5">{{ $permission->guard_name }}</div> --}}
                        </td>
                        <td class="text-center">
                            <div class="flex items-center justify-center whitespace-nowrap text-success"> 
                                <i data-lucide="check-square" class="w-4 h-4 mr-2"></i> {{ $permission->guard_name }} 
                            </div>
                        </td>
                        {{-- <td>
                            <div class="whitespace-nowrap">Direct bank transfer</div>
                            <div class="text-slate-500 text-xs whitespace-nowrap mt-0.5">25 March, 12:55</div>
                        </td>
                        <td class="w-40 text-right">
                            <div class="pr-16">$25,000,00</div>
                        </td> --}}
                        <td class="table-report__action">
                            <div class="flex justify-center items-center">
                                {{-- <a class="flex items-center text-primary whitespace-nowrap mr-5" href="javascript:;"> <i data-lucide="check-square" class="w-4 h-4 mr-1"></i> Edit </a>
                                <a class="flex items-center text-primary whitespace-nowrap" href="javascript:;" data-tw-toggle="modal" data-tw-target="#delete-confirmation-modal"> <i data-lucide="arrow-left-right" class="w-4 h-4 mr-1"></i> Change Status </a> --}}
                            </div>
                        </td>
                        <td>
                            {!! Form::open(['method' => 'DELETE','route' => ['permissions.destroy', $permission->id],'style'=>'display:inline']) !!}
                            {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-sm']) !!}
                            {!! Form::close() !!}
                        </td>
                    </tr>
                    @endforeach
                    
                </tbody>
            </table>
        </div>
        <!-- END: Data List -->
        <!-- BEGIN: Pagination -->
        <div class="intro-y col-span-12 flex flex-wrap sm:flex-row sm:flex-nowrap items-center">
            <nav class="w-full sm:w-auto sm:mr-auto">
                <ul class="pagination">
                    <li class="page-item">
                        <a class="page-link" href="#"> <i class="w-4 h-4" data-lucide="chevrons-left"></i> </a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#"> <i class="w-4 h-4" data-lucide="chevron-left"></i> </a>
                    </li>
                    <li class="page-item"> <a class="page-link" href="#">...</a> </li>
                    <li class="page-item"> <a class="page-link" href="#">1</a> </li>
                    <li class="page-item active"> <a class="page-link" href="#">2</a> </li>
                    <li class="page-item"> <a class="page-link" href="#">3</a> </li>
                    <li class="page-item"> <a class="page-link" href="#">...</a> </li>
                    <li class="page-item">
                        <a class="page-link" href="#"> <i class="w-4 h-4" data-lucide="chevron-right"></i> </a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#"> <i class="w-4 h-4" data-lucide="chevrons-right"></i> </a>
                    </li>
                </ul>
            </nav>
            <select class="w-20 form-select box mt-3 sm:mt-0">
                <option>10</option>
                <option>25</option>
                <option>35</option>
                <option>50</option>
            </select>
        </div>
        <!-- END: Pagination -->
    </div>

    <!-- BEGIN: Delete Confirmation Modal -->
    @include('page.modals.delete-confirmation')
    <!-- END: Delete Confirmation Modal -->

    <!-- BEGIN: Delete Confirmation Modal -->
    @include('page.modals.create-user-permission')
    <!-- END: Delete Confirmation Modal -->
</div>
@endsection