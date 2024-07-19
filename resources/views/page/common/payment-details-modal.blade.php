<div id="payment-details-modal" class="modal" tabindex="-1" aria-hidden="true">
    <div style="width:80%" class="modal-dialog modal-2xl intro-y" id="payment-modal-dialog">
        <div class="modal-content">
            <a href="{{ route('home') }}" class="modal-header">
                <img alt="Nsansa wellness" class="w-8 h-8 rounded-full" src="{{ asset('uploads/sites/304/2022/06/logos.svg') }}">
                &nbsp;&nbsp;
                <h2 class="font-medium text-base mr-auto">Payment Transaction</h2> 
            </a>
            <div class="modal-body text-left"> 
                {{-- <span class="items-center justify-center">
                    <img class="w-52 h-52" src="https://img.freepik.com/premium-vector/man-working-armchair-laptop-with-cat-his-arms-freelance-work-home-concept-hand-drawn-flat-vector-illustration_528592-655.jpg">
                </span> --}}
                <small>
                <b class="font-extrabold">#<span id="pIDText"></span></b>
                <br>
                <div class="flex">
                    <div class="w-1/2">
                        <p><span class="font-bold">Date Paid:</span> <span id="pDateText"></span></p>
                        <p><span class="font-bold">Amount:</span> <span id="amtText"></span></p>
                        <p><span class="font-bold">Method</span> <span id="methText"></span></p>
                        <p><span class="font-bold">Transaction Status:</span> <span id="transStatusText"></span></p>
                        <p><span class="font-bold">Payment Reference:</span> <span id="transText"></span></p>
                        {{-- <span>Patient Name: <span id="pUserText"></span></span> --}}
                    </div>
                    <div class="w-1/2">
                        {{-- <span>Billed On: <span id="bDateText"></span></span> --}}
                        <p><span class="font-bold">Amount:</span> <span id="billText"></span></p>
                        <p><span class="font-bold">Description:</span> <span id="descText"></span></p>
                    </div>
                </div>
               
                </small>
            </div>
            {{-- <div class="w-full flex text-white px-4">
                <a href="{{ route('pay') }}" class="btn btn-warning btn-sm shadow-md text-white"> 
                    <i data-lucide="wallet" class="w-4 h-4 "></i> &nbsp; 
                    <small>Continue to Payments</small>
                </a> 
                &nbsp;&nbsp;&nbsp;&nbsp;
                <a target="_blank" href="{{ route('billing') }}" class="text-primary py-2"> 
                    <small>View Billing</small>
                </a> 
            </div> --}}
        </div>
    </div>
</div>