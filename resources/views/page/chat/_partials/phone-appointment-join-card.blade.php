@if ($data['source'] == 'receiver')
<div class="join-card">
  <div class="joinloader">
    <img width="50" src="{{ asset('public/img/phone.png') }}">
    <p>Calling ...</p>
  </div>
  <div class="joinmessage">
    <small>No one has joined the call yet. Try again later</small>
    <input type="hidden" class="dont-show" name="localPeerId" id="localPeerId" readonly>
    <input type="hidden" class="dont-show" value="{{ $data['peer_id']}}" name="remotePeerId" id="remotePeerId">
    <div>
      <button onclick="join()" style="float:right; background-color:#2fa162" class="button chat-header-button-phone" id="btn-call">Call</button>
    </div>
  </div>
  <div class="join-card-content">
    <small id="card-info">Press join session whenever you are ready.</small>
    <small id="oops">Please check your camera and internet connectivity and try again.</small>
    <input type="hidden" class="dont-show" name="localPeerId" id="localPeerId" readonly>
    <input type="hidden" class="dont-show" value="{{ $data['peer_id']}}" name="remotePeerId" id="remotePeerId">
    <div>
      <button onclick="join()" style="float:right; background-color:#2fa162" class="button chat-header-button-phone join-btn" id="btn-call">Call</button>
      <button onclick="refresh()" style="float:right" class="button chat-header-button refresh-btn" id="btn-call">Try again</button>
    </div>
  </div>
</div>
@else
<input type="hidden" class="dont-show" value="{{ $data['peer_id']}}" name="remotePeerId" id="remotePeerId">
@endif