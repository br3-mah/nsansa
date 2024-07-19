<div id="payment-remainder-modal" class="modal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-xl intro-y" id="payment-modal-dialog">
        <div class="modal-content">
            <a href="{{ route('home') }}" class="modal-header">
                <img alt="Nsansa wellness" class="w-8 h-8 rounded-full" src="{{ asset('uploads/sites/304/2022/06/logos.svg') }}">
                &nbsp;&nbsp;
                <h2 class="font-medium text-base mr-auto">Nsansa Wellness</h2> 
            </a>
            <div class="modal-body text-left text-sm"> 
                <span class="items-center justify-center">
                    <img class="w-52 h-52" src="https://img.freepik.com/premium-vector/man-working-armchair-laptop-with-cat-his-arms-freelance-work-home-concept-hand-drawn-flat-vector-illustration_528592-655.jpg">
                </span>
                <small>
                <b>Hi {{ Auth::user()->fname.' '.Auth::user()->lname }},</b>
                <br>
               
                @if (!empty(App\Models\Billing::current_bill()['balance'] ))
                Hope you are doing well. This is just to remaind you that the billing #00{{ App\Models\Billing::current_bill()['id'] }} with a
                total of K{{ App\Models\Billing::current_bill()['balance'] }} We've sent you on {{ App\Models\Billing::current_bill()['created_at']->toFormattedDateString() }} is pending.
                @else
                Prior to embarking on your online therapy journey, we kindly ask you to make your payment first. This ensures a seamless experience with licensed therapists and personalized 
                resources for your well-being. We're here to support you every step of the way.
                @endif
               
                </small>
            </div>
            <div class="w-full flex text-white px-4">
                {{-- <a href="{{ route('pay') }}" class="btn btn-warning btn-sm shadow-md text-white"> 
                    <i data-lucide="wallet" class="w-4 h-4 "></i> &nbsp; 
                    <small>Continue to Payments</small>
                </a> --}}
                <a href="{{ route('pay') }}" class="btn btn-warning btn-sm shadow-md text-white"> 
                    <i data-lucide="wallet" class="w-4 h-4 "></i> &nbsp; 
                    <small>Continue to Payments</small>
                </a> 
                &nbsp;&nbsp;&nbsp;&nbsp;
                <a target="_blank" href="{{ route('billing') }}" class="text-primary py-2"> 
                    <small>View Billing</small>
                </a> 
            </div>
        </div>
    </div>
</div>