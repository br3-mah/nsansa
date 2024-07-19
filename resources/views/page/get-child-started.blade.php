@include('layouts.head')
<div class="container" style="padding-top:10%; text-align:center">
    <div data-elementor-type="wp-page" data-elementor-id="6" class="elementor elementor-6">
        <section class="getStartedSurvey elementor-section elementor-top-section elementor-element elementor-element-f8c0f27 elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="f8c0f27" data-element_type="section">
           
                  <div style="padding-bottom: 5%">
                    <h2>Find your personalized Child therapist match</h2>
                    <p style="font-size: 16px">We know how important it is to have the right therapist who understands you. 
                      By answering questions about yourself, we’ll provide you with a tailored match to a 
                      therapist who is best suited to help you.</p>                
                  </div>  

                  <div id="career-wizard" style="padding:2%; margin-left: auto; margin-right: auto; box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px; width:80%" class="card-body mb-4">
                    <form id="getStartedForm">
                      @csrf
                        @if(!empty($questionaires->questions))
                          @foreach ($questionaires->questions as $key => $q)
                            <div class="tab">
                              <h4>{{ $q->question }}</h4>

                              @if ($q->type == 'Custom')
                              <textarea id="gb_custom_answer_{{$q->id}}" rows="4" cols="50"></textarea>
                              <a type="button" onclick="nextStep('{{$q->id}}', '{{ $session }}')">NEXT</a>
                              {{-- <p id="result">The value will appear here after clicking the button.</p> --}}
                              @else
                                @forelse($q->answers as $ans)
                                <label>
                                  <input type="radio" name="radio"/>
                                  <span id="ans{{ $q->id }}" onclick="nextPrev(1, '{{ $q->id }}', '{{ $ans->answer }}','{{ $session }}')">{{ $ans->answer }}</span>
                                </label>
                                @empty
                                @endforelse
                              @endif
                              
                            </div>
                          @endforeach
                          <div style="overflow:auto;">
                            <div style="float:right;">
                              <button type="button" class="btn btn-outline-warning" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
                              @if ($q->type == 'Custom')
                                <button type="button" class="btn btn-outline-warning" id="nextBtn">Next</button>
                              @endif
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
        alert('yeas');
    }

    function nextStep(qid, session) {
        // Check if the element exists
        const customAnswer = document.getElementById(`gb_custom_answer_${qid}`);
        if (customAnswer) {
            // Use the value property to get the text entered in the textarea
            const answer = customAnswer.value;
            nextPrev(1, qid, answer, session);
        } else {
            alert(`Element not found for qid: ${qid}`);
        }
    }

    $('#getStartedForm').submit(function(e){
        alert('yeas');
        e.preventDefault();
        let url = "{{ route('register', ['role' => 'patient', 'type' => 'patient'])}}";
        document.location.href=url;
    });

    // // Get references to the textarea, button, and result element
    // const textarea = document.getElementById("myTextarea");
    // const captureButton = document.getElementById("captureButton");
    // const resultElement = document.getElementById("result");

    // // Function to capture the textarea value
    // function captureTextareaValue() {
    //     const textareaValue = textarea.value;
    //     resultElement.textContent = "Textarea value after clicking the button: " + textareaValue;
    // }

    // // Add a click event listener to the button
    // captureButton.addEventListener("click", captureTextareaValue);

    </script>