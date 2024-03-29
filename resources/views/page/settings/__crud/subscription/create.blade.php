@extends('layouts.app-settings')
@section('content')
<div class="content">
    <!-- BEGIN: Wizard Layout -->
    <div class="intro-y">
        <div class="flex justify-center">
            <button id="stp1_indicator" class="intro-y w-10 h-10 rounded-full btn btn-primary mx-2">1</button>
            <button id="stp2_indicator" class="intro-y w-10 h-10 rounded-full btn  mx-2">2</button>
            {{-- <button class="intro-y w-10 h-10 rounded-full btn bg-slate-100 dark:bg-darkmode-400 dark:border-darkmode-400 text-slate-500 mx-2">3</button> --}}
        </div>
        <div class="px-5 mt-5">
            <div class="font-medium text-center text-lg">New Subscription Plan</div>
            <div class="text-slate-500 text-center mt-2">Please fill the subsciption plan form wizard.</div>
        </div>
        <form style="max-width: 100%"  method="POST" action="{{ route('subscription.store') }}" id="wiz-questionaire" class="wizard">
            @csrf
            <ul class="wizard-steps" role="tablist">
                <li class="tab1" role="tab">
                    <div class=" px-5 sm:px-20 mt-10 pt-10 border-t border-slate-200/60 dark:border-darkmode-400">
                        <div class="font-medium text-ingo">Questionaire Details</div>
                        <div class="grid grid-cols-12 gap-4 gap-y-5 mt-5">
                            <div class="intro-y col-span-12 sm:col-span-6">
                                <label for="input-wizard-1" class="form-label label-1">Package Name</label>
                                <input id="input-wizard-1" name="name" type="text" class="form-control" placeholder="Description">
                                <small>For example, Premium Plan</small>
                                <small class="text-danger" id="error_msg1">This field is empty</small>
                            </div>
                            <div class="intro-y col-span-12 sm:col-span-6">
                                <label for="input-wizard-1" class="form-label label-1">Price</label>
                                <input id="input-wizard-1" name="price" type="text" class="form-control" placeholder="0.00">
                                <small>For example, 200</small>
                                <small class="text-danger" id="error_msg2">This field is empty</small>
                            </div>
                            <div class="intro-y col-span-12 sm:col-span-6">
                                <label for="input-wizard-1" class="form-label label-1">Duration (in Days)</label>
                                <input id="input-wizard-1" name="duration" type="text" class="form-control" placeholder="Number of Days">
                                <small>For example, 31</small>
                                <small class="text-danger" id="error_msg3">This field is empty</small>
                            </div>
                            <div class="intro-y col-span-6 sm:col-span-2">
                                <label for="input-wizard-2" class="form-label">Charged Per</label>
                                <select name="per" id="input-wizard-6" class="form-select">
                                    <option value="session">Session</option>
                                    <option value="month">Month</option>
                                    <option value="year">Year</option>
                                </select>
                            </div>
                            <div class="intro-y col-span-12 flex items-center justify-center sm:justify-end mt-5">
                                <a class="btn nextStep btn-primary w-24 ml-2">Next</a>
                            </div>
                        </div>
                    </div>
                </li>

                <li role="tab">
                    <div class="tab2 px-5 sm:px-20 mt-10 pt-10 border-t border-slate-200/60 dark:border-darkmode-400">
                        <div class="font-medium text-base font-bold">Feature List</div>
                        <div class="field_wrapper col-12">
                            <div class="grid grid-cols-12 gap-1 gap-y-5 mt-5">
                                <span class="intro-y col-span-12 sm:col-span-6">
                                    <label for="input-wizard-1" class="form-label ">Description</label>
                                    <input id="input-wizard-1" name="feature[]" type="text" class="form-control" required placeholder="Description">
                                    <small>For example, Patient Registration Survey</small>
                                </span>
                                <span class="intro-y col-span-3 sm:col-span-2 mt-5">
                                    <a href="javascript:void(0)" class="btn btn-primary w-20 text-xs add_button">Add Feature</a>
                                </span>
                            </div>
                        </div>
                        
                        <div class="intro-y col-span-12 flex items-center justify-center sm:justify-end mt-5">
                            <a class="btn btn-secondary w-24 prevStep">Previous</a>
                            <button type="submit" class="btn btn-primary w-24 ml-2">Submit</button>
                        </div>
                    </div>
                </li>
            </ul>
        </form>
    </div>
    <div id="basic-non-sticky-notification-content" class="toastify-content hidden flex">
        <div class="font-medium">Oh, some fields are empty!</div> <a class="font-medium text-primary dark:text-slate-400 mt-1 sm:mt-0 sm:ml-40" href="">Review Changes</a>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    $('.tab1').show();
    $('.tab2').hide();
    $('#error_msg1').hide();
    $('#error_msg2').hide();
    $('#error_msg3').hide();
    var input1; 
   
    $('.nextStep').click(function(){
        input1 = $('#input-wizard-1').val(); 
        if(input1.length !== 0){
            $("#stp1_indicator").removeClass("btn-primary").addClass("btn-success text-white");
            $("#stp2_indicator").addClass("btn-primary");
            $('.tab1').hide();
            $('.tab2').show();
            $('#error_msg1').hide();
            $( ".label-1" ).removeClass("text-danger");
        }else{
            $('#error_msg1').show();
            $( ".label-1" ).addClass("text-danger");
            Toastify({ 
                node: $("#basic-non-sticky-notification-content") .clone() .removeClass("hidden")[0], 
                duration: 3000, 
                newWindow: true, 
                close: true, 
                gravity: "top", 
                position: "right", 
                backgroundColor: "white", 
                stopOnFocus: true, 
            }).showToast(); 
        }
    });   


    $('.prevStep').click(function(){
        $("#stp1_indicator").addClass("btn-primary");
        $("#stp2_indicator").removeClass("btn-primary");
        $('.tab1').show();
        $('.tab2').hide();
    });

    var maxField = 50; //Input fields increment limitation
    var addButton = $('.add_button'); //Add button selector
    var addAnsButton = $('.add_ans_button');
    var wrapper = $('.field_wrapper'); //Input field wrapper
    var ansWrapper = $('.ans_wrapper'); //Input field wrapper
    
    var ansNewField = '<div class="intro-y col-span-6 sm:col-span-6"><label for="input-wizard-1" class="form-label font-bold">Answers</label><input id="input-wizard-1" name="answer[]" type="text" class="form-control" placeholder="Description"></div><div class="intro-y col-span-3 sm:col-span-3 md: mt-5"><a href="javascript:void(0)" class="add_ans_button btn btn-secondary w-20 text-xs">Add Answer</a></div>';
    var ansField = '<div class="intro-y col-span-6 sm:col-span-6"><label for="input-wizard-1" class="form-label font-bold">Answers</label><input id="input-wizard-1" name="answer[]" type="text" class="form-control" placeholder="Description"></div><div class="intro-y col-span-3 sm:col-span-3 md: mt-5"><a href="javascript:void(0)" class="remove_ans_button btn btn-secondary w-20 text-xs">Remove Answer</a></div>';
    var fieldHTML ='<div class="grid grid-cols-12 gap-4 gap-y-5 mt-5"><span class="intro-y col-span-4 sm:col-span-6"><label for="input-wizard-1" class="form-label">Description</label><input id="input-wizard-1" name="feature[]" type="text" class="form-control" required placeholder="Description"></span><span class="intro-y col-span-3 sm:col-span-2 mt-5"><a href="javascript:void(0)" class="btn btn-secondary w-20 text-xs remove_button">Remove Question</a></span></div>';
    var x = 1; //Initial field counter is 1
    
    //Once add sub answer
    $(addAnsButton).click(function(){
        alert('here');
        $(this).closest('div').append(ansField);
        // $(ansWrapper).append(ansField); //Add field html
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
@endsection
