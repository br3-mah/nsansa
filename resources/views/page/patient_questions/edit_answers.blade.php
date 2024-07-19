@extends('layouts.app')
@section('content')

<div class="content">
    <h2 class="intro-y text-lg font-medium mt-10">
        {{ $question->question  }}
    </h2>
    <small>{{ $question->type }}</small>
    <div class="intro-y col-span-4 sm:col-span-2 md: mt-5">
        <a href="javascript:void(0)" class="add_ans_button btn btn-secondary w-15 text-xs">
          <i data-lucide="plus"></i>  Add an Answer
        </a>
    </div>
    <div class="w-full mt-3">
        {{-- Dynamic input field javascript --}}
        <form action="{{ route('patient-answers.store')}}"  method="POST" >
            @csrf
            <div class="ans_wrapper row">
                <div class="intro-y mb-2 w-3/4 col-span-6 flex sm:col-span-6">
                    <input id="input-wizard-1" required name="answer[]" type="text" class="form-control" placeholder="">
                    <input id="input-wizard-1" value="{{ $question->id }}"  name="question_id" type="hidden" class="form-control" placeholder="">
                    <input id="input-wizard-1" value="{{ $question->questionaire_id }}"  name="question" type="hidden" class="form-control" placeholder="">
                </div>

            </div> 
            <br>
            <div class="intro-y col-span-12 flex items-center justify-center sm:justify-end mt-5">
                {{-- <a href={{ route('questionaires.show', $question->questionaire_id)}} class="btn btn-default w-24 ml-2">Cancel</a> --}}
                <button type="submit" class="btn btn-primary w-24 ml-2">Submit</button>
            </div>
        </form>
        {{-- End inputs --}}
    </div>
</div>
@endsection
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    $('.wiz-questionaire').wizard(); 
   
    var maxField = 10; //Input fields increment limitation
    var addButton = $('.add_button'); //Add button selector
    var addAnsButton = $('.add_ans_button');
    var wrapper = $('.field_wrapper'); //Input field wrapper
    var ansWrapper = $('.ans_wrapper'); //Input field wrapper
    // var fieldWRPPR ='';
    var ansNewField = '<div class="intro-y col-span-6 sm:col-span-6"><input id="input-wizard-1" name="answer[]" type="text" class="form-control" placeholder=""></div><div class="intro-y col-span-3 sm:col-span-3 md: mt-5"><a href="javascript:void(0)" class="add_ans_button btn btn-secondary w-20 text-xs">Add Answer</a></div>';
    var ansField = '<br><div class="intro-y w-3/4 col-span-6 sm:col-span-6"><input id="input-wizard-1" name="answer[]" type="text" class="form-control" placeholder=""></div><div class="intro-y col-span-3 sm:col-span-3 md: mt-5"></div>';
    var fieldHTML ='<div class="intro-y mt-0 col-span-4 sm:col-span-6"><input id="input-wizard-1" name="description[]" type="text" class="form-control" placeholder=""></div><div class="intro-y col-span-2 sm:col-span-2"><label for="input-wizard-6" class="form-label">Type</label><select name="group_assigned[]" id="input-wizard-6" class="form-select"><option>Select One</option><option>Select Many</option></select></div><div class="intro-y col-span-3 sm:col-span-2 mt-5"><a href="javascript:void(0)" class="btn btn-secondary w-20 text-xs remove_button">Remove Question</a></div>';
    var x = 1; //Initial field counter is 1
    
    //Once add sub answer
    $(addAnsButton).click(function(){
        // $(this).closest('div').append(ansField);
        $(ansWrapper).append(ansField); //Add field html
    });       
    //Once add button is clicked
    // $(addAnsButton).click(function(){
    //     // alert('here');
    //     $(this).closest('div').append(ansField);
    //     $(ansWrapper).append(ansField); //Add field html
    // });    
    //Once add button is clicked
    $(addButton).click(function(){
        //Check maximum number of input fields
        if(x < maxField){ 
            x++; //Increment field counter
            $(wrapper).append(fieldHTML); //Add field html
        }
    });
    // var div = document.getElementById("myLI").closest('section');
    //Once remove button is clicked
    $(wrapper).on('click', '.remove_button', function(e){
        e.preventDefault();
        
        $(this).closest('div').remove(); //Remove field html
        x--; //Decrement field counter
    });
});
</script>