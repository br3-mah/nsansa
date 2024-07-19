@extends('layouts.app')
@section('content')
<style>
    .step {
      display: none;
    }

    .step.active {
      display: block;
    }

    .button-container {
      margin-top: 20px;
    }
  </style>
<div class="content">
    <div class="intro-y text-lg font-medium">
        
        <section class="bg-white" style="padding:2%; box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;">
            <h3 class="text-gray-100 py-4">{{ $questionaires->name }}</h3>
            <hr>
                <div id="career-wizard" class="text-primary card-body mb-4 py-4">
                    <form id="wizardForm" onsubmit="return false">
                        @csrf
                        @if(!empty($questionaires->questions))
                            @foreach ($questionaires->questions as $key => $q)
                                <div class="step active py-3 w-full" id="step{{$key+1}}">
                                    <h6>{{ $q->question }}</h6>
                                    @forelse($q->answers as $ans)
                                        <div class="block ml-2">
                                                <label>
                                                    <input onclick="pushAnswer(1, '{{ $q->id }}', '{{ $ans->answer }}','{{ $session }}','{{ $questionaires->id }}')" type="radio" name="radio"/>
                                                    <span id="ans{{ $q->id }}">{{ $ans->answer }}</span>
                                                </label>
                                        </div>
                                    @empty
                                    @endforelse
                                    <br>
                                    <br>
                                    <div class="float-right">
                                        @if ($questionaires->questions->count() === 1)
                                            <div class="button-container">
                                                <button class="btn btn-primary" onclick="submitForm()">Submit</button>
                                            </div>
                                        @elseif($key === 0)
                                            <div class="button-container">
                                                <button class="btn btn-primary" onclick="nextStep()">Next</button>
                                            </div>
                                        @elseif($questionaires->questions->count() !== $key+1)
                                            <div class="button-container">
                                                <button class="btn btn-default" onclick="previousStep()">Previous</button>
                                                <button class="btn btn-primary" onclick="nextStep()">Next</button>
                                            </div>
                                        @else
                                            <div class="button-container">
                                                <button class="btn btn-default" onclick="previousStep()">Previous</button>
                                                <button class="btn btn-primary" onclick="submitForm()">Submit</button>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    
                        {{-- <div class="step" id="step2">
                          <h2>Step 2</h2>
                          <input type="email" placeholder="Enter your email" required>
                          <div class="button-container">
                            <button onclick="previousStep()">Previous</button>
                            <button onclick="nextStep()">Next</button>
                          </div>
                        </div>
                    
                        <div class="step" id="step3">
                          <h2>Step 3</h2>
                          <input type="password" placeholder="Enter a password" required>
                          <div class="button-container">
                            <button onclick="previousStep()">Previous</button>
                            <button onclick="submitForm()">Submit</button>
                          </div>
                        </div> --}}

                      </form>
                </div>
        </section>
    </div>
</div>
@endsection
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    $(document).ready(function() {
        // function showStep(stepNumber) {
        for (var i = 0; i < steps.length; i++) {
            steps[i].classList.remove("active");
        }
        steps[currentStep - 1].classList.add("active");
    });

    var currentStep = 1;
    var feedback = [];
    var form = document.getElementById("wizardForm");
    var steps = document.getElementsByClassName("step");

    function showStep(stepNumber) {
        for (var i = 0; i < steps.length; i++) {
            steps[i].classList.remove("active");
        }
        steps[currentStep - 1].classList.add("active");
    }

    function pushAnswer(n, q, a, u, s){
        feedback.push({
            'answer': a,
            'question_id': q,
            'user_id': u,
            'questionnaire_id': s
        });
    }

    function nextStep() {
        if (currentStep < steps.length) {
            currentStep++;
            showStep(currentStep);
        }
    }

    function previousStep() {
        if (currentStep > 1) {
            currentStep--;
            showStep(currentStep);
        }
    }

    function submitForm() {
        // Push if the array is empty
        $.ajax({
              type:'POST',
              url:"{{ route('patient-results.store') }}",
              cache: false,
              contentType: "application/json;charset=utf-8",
              dataType: "json",
              data: JSON.stringify(feedback),
              processData: false,
            success:function(data){
                let url = "{{ route('my-patient-questionnaires') }}";
                document.location.href = url.replace(/&amp;/g, '&');
            }
        });
        // // Reset the form and show the first step
        // form.reset();
        currentStep = 1;
        showStep(currentStep);
    }
</script>