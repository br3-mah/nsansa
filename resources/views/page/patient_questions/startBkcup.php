@extends('layouts.app')
@section('content')
<div class="content">
    <div class="intro-y text-lg font-medium">
        <section class="">
                <div id="career-wizard" style="padding:2%; margin-left: auto; margin-right: auto; box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px; width:80%" class="card-body mb-4">
                    <form id="getStartedForm">
                        @csrf
                        @if(!empty($questionaires->questions))
                            @foreach ($questionaires->questions as $key => $q)
                                <div class="tab">
                                    <h4>{{ $q->question }}</h4>
                                    @forelse($q->answers as $ans)
                                    <label>
                                        <input type="radio" name="radio"/>
                                        <span id="ans{{ $q->id }}" onclick="nextPrev(1, '{{ $q->id }}', '{{ $ans->answer }}','{{ $session }}')">{{ $ans->answer }}</span>
                                    </label>
                                    @empty
                                    @endforelse
                                </div>
                            @endforeach
                            <div style="overflow:auto;">
                                <div style="float:right;">
                                    <button type="button" class="btn btn-outline-warning" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
                                    {{-- <button type="button" id="nextBtn" onclick="nextPrev(1, '{{ $q->id }}','{{ $session }}')">Next</button> --}}
                                </div>
                            </div>
                        @endif
                    </form>
                </div>
        </section>
    </div>
</div>
@endsection
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
    $('.loading').hide();
    var feedback = [];
    var currentTab = 0; // Current tab is set to be the first tab (0)
    showTab(currentTab); // Display the current tab
    var patientAnswer2 = document.getElementById("patientAnswer2");
    patientAnswer2.onclick = function() {
        alert('am here');
    }
    function showTab(n) {
      // This function will display the specified tab of the form...
      var x = document.getElementsByClassName("tab");
      alert(x[n]);
      x[n].style.display = "block";
      //... and fix the Previous/Next buttons:
      if (n == 0) {
        document.getElementById("prevBtn").style.display = "none";
      } else {
        document.getElementById("prevBtn").style.display = "inline";
      }
      if (n == (x.length - 1)) {
        document.getElementById("nextBtn").innerHTML = "Submit";
      } else {
        document.getElementById("nextBtn").innerHTML = "Next";
      }
      //... and run a function that will display the correct step indicator:
      fixStepIndicator(n)
    }
    
    function nextPrev(n, q, a, u) {
      if(n == 1){
          feedback.push({
            'answer': a,
            'question_id': q,
            'user_id': u
          });
      }else{
         feedback.pop();
      }
      // This function will figure out which tab to display
      var x = document.getElementsByClassName("tab");
      // Exit the function if any field in the current tab is invalid:
      if (n == 1 && !validateForm()) return false;
      // Hide the current tab:
      x[currentTab].style.display = "none";
      // Increase or decrease the current tab by 1:
      currentTab = currentTab + n;
      // if you have reached the end of the form...
      if (currentTab >= x.length) {
        $('#career-wizard').hide();
        $('.loading').show();

        $.ajax({
              type:'POST',
              url:"{{ route('results.store') }}",
              cache: false,
              contentType: "application/json;charset=utf-8",
              dataType: "json",
              data: JSON.stringify(feedback),
              processData: false,
            success:function(data){
                let url = "{{ route('register', ['role' => 'patient', 'type' => 'patient', 'guest_id' => $session])}}";
                document.location.href= url.replace(/&amp;/g, '&');
            }
        });
        
        return false;
      }
      // Otherwise, display the correct tab:
      showTab(currentTab);
    }
    
    function validateForm() {
      // This function deals with validation of the form fields
      var x, y, i, valid = true;
      x = document.getElementsByClassName("tab");
      y = x[currentTab].getElementsByTagName("input");
      // A loop that checks every input field in the current tab:
      for (i = 0; i < y.length; i++) {
        // If a field is empty...
        if (y[i].value == "") {
          // add an "invalid" class to the field:
          y[i].className += " invalid";
          // and set the current valid status to false
          valid = false;
        }
      }
      // If the valid status is true, mark the step as finished and valid:
      // if (valid) {
      //   document.getElementsByClassName("step")[currentTab].className += " finish";
      // }
      return valid; // return the valid status
    }
    
    function fixStepIndicator(n) {
      // This function removes the "active" class of all steps...
      var i, x = document.getElementsByClassName("step");
      for (i = 0; i < x.length; i++) {
        x[i].className = x[i].className.replace(" active", "");
      }
      //... and adds the "active" class on the current step:
      x[n].className += " active";
    }

    function gotToRegister(){
        // alert('yeas');
    }

    $('#getStartedForm').submit(function(e){
        e.preventDefault();
        let url = "{{ route('register', ['role' => 'patient', 'type' => 'patient'])}}";
        document.location.href=url;
    });



    </script>