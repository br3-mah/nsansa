@include('layouts.head')
<div class="container" style="padding-top:10%; text-align:center">
    <div data-elementor-type="wp-page" data-elementor-id="6" class="elementor elementor-6">
        <section class="getStartedSurvey elementor-section elementor-top-section elementor-element elementor-element-f8c0f27 elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="f8c0f27" data-element_type="section">
                    <div style="padding:2%; margin-left: auto; margin-right: auto; box-shadow: rgba(0, 0, 0, 0.05) 0px 1px 2px 0px; width:80%" class="card-body">
                      <form onsubmit="gotToRegister()" id="getStartedForm">
                        @csrf
                        @if(!empty($questionaires->questions))
                          @foreach ($questionaires->questions as $key => $q)
                            <div class="tab">
                              <h2>{{ $q->question }}</h2>

                              @forelse($q->answers as $ans)
                              <label>
                                <input type="radio" name="radio"/>
                                <span  onclick="nextPrev(1, '{{ $q->id }}', '{{ $ans->answer }}','{{ $session }}')">{{ $ans->answer }}</span>
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
                        @else
                        <div>
                          <img width="50%" src="https://i.pinimg.com/originals/44/8b/70/448b7040d44cfc0a620c03c63df26680.png">
                        </div>
                        @endif
                      </form>
                    </div>
                    <div class="flex loading items-center">
                      <p>Processing ...</p>
                    </div>
        </section>
    </div>
</div>

@include('layouts.footer')
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
        $('#patient-wizard').hide();
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
                let url = "{{ route('register', ['role' => request()->get('role'), 'type' => request()->get('type'), 'guest_id' => $session])}}";
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
        alert('yeas');
    }

    $('#getStartedForm').submit(function(e){
        alert('yeas');
        e.preventDefault();
        let url = "{{ route('register', ['role' => request()->get('role'), 'type' => request()->get('type')])}}";
        document.location.href=url;
    });
    </script>