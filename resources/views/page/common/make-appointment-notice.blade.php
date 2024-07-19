<div id="appointment-remainder-modal" class="modal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-xl intro-y" style="margin-top: 20%" id="appointment-modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <img alt="Nsansa wellness" class="w-8 h-8 rounded-full" src="{{ asset('uploads/sites/304/2022/06/logos.svg') }}">
                &nbsp;&nbsp;
                <h2 class="font-medium text-base mr-auto">Nsansa Wellness</h2> 
            </div>
            <div class="modal-body text-left text-sm"> 
                <span class="items-center justify-center">
                    <img class="w-52 h-52" src="https://img.freepik.com/premium-vector/man-working-armchair-laptop-with-cat-his-arms-freelance-work-home-concept-hand-drawn-flat-vector-illustration_528592-655.jpg">
                </span>
                <small>
                <b>Hello {{ Auth::user()->fname.' '.Auth::user()->lname }},</b>
                <br>
               
                @if (!empty(App\Models\Billing::current_bill()['balance'] ))
                Welcome! You can now schedule your next counseling session with your counselor. Please select a suitable date and time through our scheduling system.
                @else
                Welcome! You can now schedule your next counseling session with your counselor. Please select a suitable date and time through our scheduling system.
                @endif
               
                </small>
            </div>
            <div class="w-full flex text-white px-4">
                <a href="{{ route('appointment') }}" class="btn btn-warning btn-sm shadow-md text-white"> 
                    <i data-lucide="wallet" class="w-4 h-4 "></i> &nbsp; 
                    <small>Schedule Appointment</small>
                </a> 
            </div>
        </div>
    </div>
</div>