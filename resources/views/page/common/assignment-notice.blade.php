@php
    $currRequest = App\Models\AssignCounselor::currrentAssignReq();
@endphp
@if($currRequest !== null || $currRequest !== 0)
<div id="new-assignment-modal" class="modal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-xl intro-y" id="payment-modal-dialog">
        <div class="modal-content">
            <div class="modal-body text-left text-sm"> 
                <small>
                    <b>Hi {{ Auth::user()->fname.' '.Auth::user()->lname }},</b>
                    <br>
                    <p>
                        You have a new patient {{$currRequest->patient->fname.' '.$currRequest->patient->lname}}
                        
                    </p>
                
                    <a href="{{ route('users.show', $currRequest->patient->id) }}" >
                        View details
                    </a>    
                </small>
            </div>
            <div class="w-full flex text-white px-4">
                <form action="{{ route('accept-assign') }}" method="post" id="accept-form">
                    @csrf
                    <input type="hidden" value="{{ $currRequest->id }}" name="assign_id">
                    <button type="button" class="btn btn-warning btn-sm shadow-md text-white" id="accept-button">
                        <i data-lucide="wallet" class="w-4 h-4"></i> &nbsp;
                        <small>Accept</small>
                    </button>
                    <img src="loading.gif" id="loading-gif" style="display: none;">
                </form>
                &nbsp;&nbsp;&nbsp;&nbsp;
                <button type="button" onclick="deleteCurrentRequest('{{ $currRequest->id }}')" target="_blank" href="#" class="text-primary btn btn-danger btn-sm"> 
                    <small>Reject</small>
                </button> 
            </div>
        </div>
    </div>
</div>
@endif