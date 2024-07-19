@extends('layouts.app')
@section('content')
<div class="content mt-8 contentCanvas">
    <h2 class="text-lg font-medium mr-auto flex space-x-6 mt-8">
        <i data-lucide="wallet" class="w-6 h-6"></i>
        &nbsp;
        <span>Billing History</span>
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
            <div class="hidden xl:block mx-auto text-slate-500">Showing {{ $bills != null ? $bills->count(): 0 }} entries</div>
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
            @if(!empty($bills->toArray()))
            <table class="table table-report -mt-2">
                <thead>
                    <tr>
                        {{-- <th class="whitespace-nowrap">
                            <input class="form-check-input" type="checkbox">
                        </th> --}}
                        <th class="whitespace-nowrap">DATE</th>

                        @hasanyrole(['admin', 'administrator'])
                        <th class="whitespace-nowrap">CLIENT</th>
                        <th class="whitespace-nowrap">COUNSELOR</th>
                        @endhasanyrole

                        @hasanyrole(['counselor'])
                        <th class="whitespace-nowrap">CLIENT</th>
                        @endhasanyrole

                        @hasanyrole(['patient'])
                        <th class="whitespace-nowrap">COUNSELOR</th>
                        @endhasanyrole

                        <th class="text-right whitespace-nowrap">
                            <div class="pr-16">TOTAL BILLING</div>
                        </th>
                        <th class="text-right whitespace-nowrap">
                            <div class="pr-16">TYPE</div>
                        </th>

                        @hasrole('admin')
                        <th class="whitespace-nowrap">COMISSION</th>
                        @endhasrole
                        <th class="text-center whitespace-nowrap">STATUS</th>

                        @hasrole('counselor')
                        <th class="whitespace-nowrap">RECIEVABLE</th>
                        @endhasrole

                    </tr>
                </thead>
                <tbody>
                    @forelse ($bills as $bill)
                    <tr class="intro-x">
                        {{-- <td class="w-10">
                            <input class="form-check-input" type="checkbox">
                        </td> --}}
                        <td class="w-40 text-left">
                            {{ $bill->created_at->toFormattedDateString() }}
                        </td>
                        @hasanyrole(['admin', 'administrator'])
                        <td class="w-40">
                            @if ($bill->user !== null)
                            <a href="" class="font-medium whitespace-nowrap">{{ $bill->user->fname.' '.$bill->user->lname }}</a> 
                            <div class="text-slate-500 text-xs whitespace-nowrap mt-0.5">{{ $bill->user->address }}</div>
                            
                            @else
                            <div class="text-slate-500 text-xs whitespace-nowrap mt-0.5">Invalid.</div>
                            @endif
                        </td>
                        <td class="w-40">
                            @if($bill->user !== null)
                                @if(App\Models\PatientFile::counselorAssigned($bill->user->id) !== null)
                                    @if(App\Models\PatientFile::counselorAssigned($bill->user->id)->counselor !== null)
                                        {{App\Models\PatientFile::counselorAssigned($bill->user->id)->counselor->fname.' '.App\Models\PatientFile::counselorAssigned($bill->user->id)->counselor->lname}}<br>
                                    @else
                                    <div class="text-slate-500 text-xs whitespace-nowrap mt-0.5">No Counselor assigned yet.</div>
                                    @endif
                                @else
                                    <div class="text-slate-500 text-xs whitespace-nowrap mt-0.5">No Counselor assigned yet.</div>
                                @endif
                            @else
                                <div class="text-slate-500 text-xs whitespace-nowrap mt-0.5">Invalid.</div>
                            @endif
                        </td>
                        @endhasanyrole

                        @hasanyrole(['counselor'])
                        <td class="w-40">
                            @if ($bill->user !== null)
                            <a href="" class="font-medium whitespace-nowrap">{{ $bill->user->fname.' '.$bill->user->lname }}</a> 
                            <div class="text-slate-500 text-xs whitespace-nowrap mt-0.5">{{ $bill->user->address }}</div>
                            @endif
                        </td>
                        @endhasanyrole

                        @hasanyrole(['patient'])
                        <td class="w-40">
                            @if(App\Models\PatientFile::counselorAssigned($bill->user->id) !== null)
                                @if(App\Models\PatientFile::counselorAssigned($bill->user->id)->counselor !== null)
                                    {{App\Models\PatientFile::counselorAssigned($bill->user->id)->counselor->fname.' '.App\Models\PatientFile::counselorAssigned($bill->user->id)->counselor->lname}}<br>
                                @else
                                <div class="text-slate-500 text-xs whitespace-nowrap mt-0.5">No Counselor assigned yet.</div>
                                @endif
                            @else
                            <div class="text-slate-500 text-xs whitespace-nowrap mt-0.5">No Counselor assigned yet.</div>
                            @endif
                        </td>
                        @endhasanyrole
                        <td class="w-40 text-right">
                            <div class="pr-16"> {{  $bill->charge_amount != 0 ? 'K '.$bill->charge_amount : '--' }}</div>
                        </td>
                        <td class="w-40 text-right">
                            <div class="pr-16"> {{  $bill->desc }}</div>
                        </td>
                        
                        @hasrole('counselor')
                        <td class="w-40 text-right">
                           K 0
                        </td>
                        @endhasrole
                        @hasrole('admin')
                        <td class="w-40 text-right">
                            K 0
                        </td>
                        @endhasrole
                        <td class="text-center">
                            @if($bill->status == 2)
                            <span  class="w-full flex items-center justify-center whitespace-nowrap text-success font-extrabold text-sm"> 
                                <a href="#" id="a{{$bill->id}}" class="flex gap-2" onclick="viewPayments('{{$bill->id}}')">
                                    <i data-lucide="check-square" class="w-4 h-4 mr-2"></i>
                                    Paid | View Payment </a>
                                <span style="display:none"  id="cl{{$bill->id}}" class="initLoad">
                                    <img src="{{ asset('public/img/4.gif') }}">
                                </span>
                            </span>
                            @else
                                @hasrole('admin')
                                    <a href="{{ route('bpb', ['id' => $bill->id])}}" class="flex items-center justify-center whitespace-nowrap text-danger"> <i data-lucide="wallet" class="w-4 h-4 mr-2"></i> Bypass </a> 
                                @else
                                    <a href="{{ route('pay') }}" class="flex items-center justify-center whitespace-nowrap text-danger"> <i data-lucide="wallet" class="w-4 h-4 mr-2"></i> Proceed to Payments </a> 
                                @endhasrole
                            @endif
                        </td>
                        {{-- <td>
                            <div class="whitespace-nowrap">Direct bank transfer</div>
                            <div class="text-slate-500 text-xs whitespace-nowrap mt-0.5">25 March, 12:55</div>
                            <a href="" class="underline decoration-dotted whitespace-nowrap">#INV-25807556</a>
                        </td> --}}
                    </tr>
                    @empty
                        
                    @endforelse
                    
                </tbody>
            </table>
            @else
            <div class="items-center justify-center centered" style="text-align: center">
                <img class="intro-y mx-auto" width="300" src="https://cdni.iconscout.com/illustration/free/thumb/empty-box-4085812-3385481.png">
                <h3>No Transactions</h3>
                @hasrole('patient')
                    <a target="_blank" href="{{ route('pay') }}" class="d-flex space-x-4 items-center justify-center btn btn-warning text-white mt-5">
                        <span>Get started</span>
                        &nbsp;&nbsp;&nbsp;&nbsp;
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="-mt-2 bi bi-box-arrow-up-right" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                            <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                        </svg>
                    </a>
                @endhasrole
            </div>
            @endif
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

    {{-- Payment Details --}}
    @include('page.common.payment-details-modal')
</div>
@endsection
<script>
    const viewPayments = (id) => {
        
        const url = `/nsansawellness/payment-details/${id}`;
        document.getElementById('cl'+id).style.display = 'none';
        document.getElementById('a'+id).style.display = 'block';
        document.getElementById('pIDText').textContent = '';
        document.getElementById('pDateText').textContent = '';
        document.getElementById('amtText').textContent = '';
        document.getElementById('methText').textContent = '';
        document.getElementById('transText').textContent = '';
        document.getElementById('transStatusText').textContent = '';
        // document.getElementById('pUserText').textContent = '';
        // document.getElementById('bDateText').textContent = '';
        document.getElementById('billText').textContent = '';
        document.getElementById('descText').textContent = '';
        try {
            return axios.get(url).then((response) => {
                if (response.status === 200) {
                    console.log(response.data.data);
                    document.getElementById('pIDText').textContent = response.data.data.id;
                    document.getElementById('pDateText').textContent = response.data.data.created_at;
                    document.getElementById('amtText').textContent = response.data.data.amount;
                    document.getElementById('methText').textContent = response.data.data.paymentType;
                    document.getElementById('transText').textContent = response.data.data.paymentReference;
                    document.getElementById('transStatusText').textContent = response.data.data.transaction_status;
                    // document.getElementById('pUserText').textContent = data.pUser;
                    // document.getElementById('bDateText').textContent = data.bDate;
                    document.getElementById('billText').textContent = response.data.data.amount;
                    document.getElementById('descText').textContent = response.data.data.desc;
                    const pay_notice = tailwind.Modal.getInstance(document.querySelector("#payment-details-modal"));
                    pay_notice.show();
                    return response.data;
                } else {
                    throw new Error(`Failed to fetch payment details. Status: ${response.status}`);
                }
            }).catch((error) => {
                console.error("Error fetching payment details:", error);
                throw error;
            });
        } catch (error) {
            
        }
    }
</script>