@extends('layouts.app')
@section('content')

<div class="content">
    <h2 class="intro-y text-lg font-medium mt-10">
        User Survey Feedback
    </h2>
    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="intro-y col-span-12 flex flex-wrap xl:flex-nowrap items-center mt-2">
            <a href="{{ route('questionaires.create') }}" class="btn btn-primary shadow-md mr-2">Create a Questionaire</a>
            {{-- <div class="dropdown">
                <button class="dropdown-toggle btn px-2 box" aria-expanded="false" data-tw-toggle="dropdown">
                    <span class="w-5 h-5 flex items-center justify-center"> <i class="w-4 h-4" data-lucide="plus"></i> </span>
                </button>
                <div class="dropdown-menu w-40">
                    <ul class="dropdown-content">
                        <li>
                            <a href="" class="dropdown-item"> <i data-lucide="printer" class="w-4 h-4 mr-2"></i> Print </a>
                        </li>
                        <li>
                            <a href="" class="dropdown-item"> <i data-lucide="file-text" class="w-4 h-4 mr-2"></i> Export to Excel </a>
                        </li>
                        <li>
                            <a href="" class="dropdown-item"> <i data-lucide="file-text" class="w-4 h-4 mr-2"></i> Export to PDF </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="hidden xl:block mx-auto text-slate-500">Showing 1 to 10 of 150 entries</div>
            <div class="w-full xl:w-auto flex items-center mt-3 xl:mt-0">
                <div class="w-56 relative text-slate-500">
                    <input type="text" class="form-control w-56 box pr-10" placeholder="Search...">
                    <i class="w-4 h-4 absolute my-auto inset-y-0 mr-3 right-0" data-lucide="search"></i> 
                </div>
                <select class="w-56 xl:w-auto form-select box ml-2">
                    <option>Status</option>
                    <option>Active</option>
                    <option>Inactive</option>
                </select>
            </div> --}}
        </div>
        <!-- BEGIN: Data List -->
        <div class="intro-y col-span-12 overflow-auto 2xl:overflow-visible">
            <table class="table table-report -mt-2">
                <thead>
                    <tr>
                        {{-- <th class="whitespace-nowrap">
                            <input class="form-check-input" type="checkbox">
                        </th> --}}
                        <th class="whitespace-nowrap">NAMES</th>
                        <th class="text-center whitespace-nowrap">GROUP</th>
                        {{-- <th class="text-center whitespace-nowrap">GENDER</th> --}}
                        <th class="text-center whitespace-nowrap">STATUS</th>
                        {{-- <th class="text-center whitespace-nowrap">TOTAL QUESTIONS</th> --}}
                        <th class="text-center whitespace-nowrap">ACTIONS</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($users as $user)
                    <tr class="intro-x">
                        {{-- <td class="w-10">
                            <input class="form-check-input" type="checkbox">
                        </td> --}}
                        <td class="!py-3.5">
                            <div class="flex items-center">
                                <div class="w-9 h-9 image-fit zoom-in">
                                    @if($user->image_path == null)
                                    <div class="font-bolder bg-primary text-white w-8 h-8 sm:w-10 sm:h-10 rounded-lg flex items-center justify-center border dark:border-darkmode-400 text-slate-400 zoom-in tooltip" title="{{ $user->fname.' '.$user->lname  }}">
                                        {{ $user->fname[0].' '.$user->lname[0] }}
                                    </div>
                                    @else
                                    <img alt="{{ $user->fname.' '.$user->lname  }}" class="rounded-lg border-white shadow-md tooltip" src="{{ asset('public/storage/'.$user->image_path) }}" title="{{ $user->fname.' '.$user->lname  }}">
                                    @endif
                                </div>
                                <div class="ml-4">
                                    <a href="" class="font-medium whitespace-nowrap">{{ $user->fname.' '.$user->lname }}</a> 
                                    <div class="text-slate-500 text-xs whitespace-nowrap mt-0.5">{{ $user->email }}</div>
                                </div>
                            </div>
                        </td>
                        <td class="text-center"> 
                            @foreach($user->roles as $role)
                                <span class="capitalize">{{ $role->name }}</span>
                            @endforeach 
                        </td>
                        {{-- <td class="text-center capitalize">--</td> --}}
                        <td class="w-40">
                            <div class="flex items-center justify-center text-danger"> <i data-lucide="check-square" class="w-4 h-4 mr-2"></i> 
                                {{ $user->email_verified_at == null ? 'Unverified Account' : 'Verified Account'}}
                            </div>
                        </td>
                        {{-- <td class="text-center">115 Items</td> --}}
                        <td class="table-report__action w-56">
                            <div class="flex justify-center items-center">
                                @if($user->guest_id != null)
                                <a class="flex items-center mr-3" href="{{ route('user-survey-response', $user->guest_id) }}"> <i data-lucide="check-square" class="w-4 h-4 mr-1"></i> View Response </a>
                                @else
                                <p class="flex items-center mr-3"> <i data-lucide="check-square" class="w-4 h-4 mr-1"></i> Not Surveyed </p>
                                @endif


                                {{-- <a class="flex items-center text-danger" href="javascript:;" data-tw-toggle="modal" data-tw-target="#delete-confirmation-modal"> <i data-lucide="trash-2" class="w-4 h-4 mr-1"></i> Delete </a> --}}
                            </div>
                        </td>
                    </tr>
                    @empty
                        
                    @endforelse
                    {{-- <tr class="intro-x">
                        <td class="w-10">
                            <input class="form-check-input" type="checkbox">
                        </td>
                        <td class="!py-3.5">
                            <div class="flex items-center">
                                <div class="w-9 h-9 image-fit zoom-in">
                                    <img alt="Midone - HTML Admin Template" class="rounded-lg border-white shadow-md tooltip" src="dist/images/profile-11.jpg" title="Uploaded at 31 July 2021">
                                </div>
                                <div class="ml-4">
                                    <a href="" class="font-medium whitespace-nowrap">Brad Pitt</a> 
                                    <div class="text-slate-500 text-xs whitespace-nowrap mt-0.5">bradpitt@left4code.com</div>
                                </div>
                            </div>
                        </td>
                        <td class="text-center"> <a class="flex items-center justify-center underline decoration-dotted" href="javascript:;">Themeforest</a> </td>
                        <td class="text-center capitalize">male</td>
                        <td class="w-40">
                            <div class="flex items-center justify-center text-success"> <i data-lucide="check-square" class="w-4 h-4 mr-2"></i> Active </div>
                        </td>
                        <td class="text-center">43 Items</td>
                        <td class="table-report__action w-56">
                            <div class="flex justify-center items-center">
                                <a class="flex items-center mr-3" href="javascript:;"> <i data-lucide="check-square" class="w-4 h-4 mr-1"></i> Edit </a>
                                <a class="flex items-center text-danger" href="javascript:;" data-tw-toggle="modal" data-tw-target="#delete-confirmation-modal"> <i data-lucide="trash-2" class="w-4 h-4 mr-1"></i> Delete </a>
                            </div>
                        </td>
                    </tr> --}}
                    
                </tbody>
            </table>
        </div>
        <!-- END: Data List -->
        <!-- BEGIN: Pagination -->
        <div class="intro-y col-span-12 flex flex-wrap sm:flex-row sm:flex-nowrap items-center">
            <nav class="w-full sm:w-auto sm:mr-auto">
                <ul class="pagination">
                    {!! $users->links() !!}
                </ul>
            </nav>
            {{-- <select class="w-20 form-select box mt-3 sm:mt-0">
                <option>10</option>
                <option>25</option>
                <option>35</option>
                <option>50</option>
            </select> --}}
        </div>
        <!-- END: Pagination -->
    </div>
    <!-- BEGIN: Delete Confirmation Modal -->
    <div id="delete-confirmation-modal" class="modal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body p-0">
                    <div class="p-5 text-center">
                        <i data-lucide="x-circle" class="w-16 h-16 text-danger mx-auto mt-3"></i> 
                        <div class="text-3xl mt-5">Are you sure?</div>
                        <div class="text-slate-500 mt-2">
                            Do you really want to delete these records? 
                            <br>
                            This process cannot be undone.
                        </div>
                    </div>
                    <div class="px-5 pb-8 text-center">
                        <button type="button" data-tw-dismiss="modal" class="btn btn-outline-secondary w-24 mr-1">Cancel</button>
                        <button type="button" class="btn btn-danger w-24">Delete</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END: Delete Confirmation Modal -->
</div>
@endsection