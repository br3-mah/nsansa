@extends('layouts.app')
@section('content')
<div class="content mt-8 contentCanvas">
    <h2 class="text-lg font-medium mr-auto flex space-x-6 mt-8">
        <i data-lucide="wallet" class="w-6 h-6"></i>
        &nbsp;
        <span>My Income</span>
    </h2>
    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="intro-y col-span-12 flex flex-wrap xl:flex-nowrap items-center mt-2">
            <div class="flex w-full sm:w-auto">
                {{-- <div class="w-48 relative text-slate-500">
                    <input type="text" class="form-control w-48 box pr-10" placeholder="Search">
                    <i class="w-4 h-4 absolute my-auto inset-y-0 mr-3 right-0" data-lucide="search"></i> 
                </div>
                <select class="form-select box ml-2">
                    <option>Lastest</option>
                    <option>Waiting Payment</option>
                    <option>Confirmed</option>
                    <option>Packing</option>
                    <option>Delivered</option>
                    <option>Completed</option>
                </select> --}}
            </div>
            {{-- <div class="hidden xl:block mx-auto text-slate-500">Showing 0 entries</div> --}}
            {{-- <div class="hidden xl:block mx-auto text-slate-500">Showing 1 to 2 of 2 entries</div> --}}
            {{-- <div class="w-full xl:w-auto flex items-center mt-3 xl:mt-0">
                <button class="btn btn-primary shadow-md mr-2"> <i data-lucide="file-text" class="w-4 h-4 mr-2"></i> Export to Excel </button>
                <button class="btn btn-primary shadow-md mr-2"> <i data-lucide="file-text" class="w-4 h-4 mr-2"></i> Export to PDF </button>
                <div class="dropdown">
                    <button class="dropdown-toggle btn px-2 box" aria-expanded="false" data-tw-toggle="dropdown">
                        <span class="w-5 h-5 flex items-center justify-center"> <i class="w-4 h-4" data-lucide="plus"></i> </span>
                    </button>
                    <div class="dropdown-menu w-40">
                        <ul class="dropdown-content">
                            <li>
                                <a href="" class="dropdown-item"> <i data-lucide="arrow-left-right" class="w-4 h-4 mr-2"></i> Change Status </a>
                            </li>
                            <li>
                                <a href="" class="dropdown-item"> <i data-lucide="bookmark" class="w-4 h-4 mr-2"></i> Print Receipt </a>
                            </li>
                            <li>
                                <a href="" class="dropdown-item"> <i data-lucide="bookmark" class="w-4 h-4 mr-2"></i> Billing Credentials </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div> --}}
        </div>
        <!-- BEGIN: Data List -->
        <div class="intro-y col-span-12 overflow-auto 2xl:overflow-visible">
            <table class="table table-report -mt-2">
                <thead>
                    <tr>
                        <th class="whitespace-nowrap">
                            <input class="form-check-input" type="checkbox">
                        </th>
                        <th class="whitespace-nowrap">DATE</th>

                        <th class="whitespace-nowrap">CLIENT</th>
                        <th class="whitespace-nowrap">COUNSELOR</th>
                        <th class="text-right whitespace-nowrap">
                            <div class="pr-16">TOTAL BILLING</div>
                        </th>
                        <th class="text-center whitespace-nowrap">STATUS</th>
                        <th class="whitespace-nowrap">TOTAL RETURN</th>
                        <th class="whitespace-nowrap">COMISSION</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="intro-x">
                        <td class="w-10">
                            <input class="form-check-input" type="checkbox">
                        </td>
                        <td class="w-40 text-left">
                            <div class="pr-16"> xxxx </div>
                        </td>
                        <td class="w-40">
                            <a href="" class="font-medium whitespace-nowrap">xxxx xxxx</a> 
                            <div class="text-slate-500 text-xs whitespace-nowrap mt-0.5">xxxx</div>
                        </td>
                        <td class="w-40">
                            <a href="" class="font-medium whitespace-nowrap">xxx</a> 
                            <div class="text-slate-500 text-xs whitespace-nowrap mt-0.5">xxx</div>
                        </td>
                        
                        <td class="w-40">
                            
                            <a href="" class="font-medium whitespace-nowrap">xxxx</a> 
                            <div class="text-slate-500 text-xs whitespace-nowrap mt-0.5">xxx</div>
                        
                        </td>
                        
                        <td class="w-40 text-right">
                            <div class="pr-16"> xxxx</div>
                        </td>
                        <td class="text-center">
                            <div class="flex items-center justify-center whitespace-nowrap text-success"> <i data-lucide="check-square" class="w-4 h-4 mr-2"></i> Completed </div>
                            <a href="{{ route('pay') }}" class="flex items-center justify-center whitespace-nowrap text-danger"> <i data-lucide="wallet" class="w-4 h-4 mr-2"></i> Continue </a>
                        </td>
                        
                        <td class="w-40 text-right">
                            <div class="pr-16">K 0</div>
                        </td>
                        
                    </tr>
                </tbody>
            </table>
            {{-- <div class="items-center justify-center centered" style="text-align: center">
                <img class="intro-y mx-auto" width="300" src="https://cdni.iconscout.com/illustration/free/thumb/empty-box-4085812-3385481.png">
                <h3>No Transactions</h3>
            </div> --}}
        </div>
        <!-- END: Data List -->
        <!-- BEGIN: Pagination -->
        {{-- <div class="intro-y col-span-12 flex flex-wrap sm:flex-row sm:flex-nowrap items-center">
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
        </div> --}}
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