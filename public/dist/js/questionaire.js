$('.wiz-questionaire').wizard(); 
   
var maxField = 10; //Input fields increment limitation
var addButton = $('.add_button'); //Add button selector
var addAnsButton = $('.add_ans_button');
var wrapper = $('.field_wrapper'); //Input field wrapper
var ansWrapper = $('.ans_wrapper'); //Input field wrapper
// var fieldWRPPR ='';
var ansNewField = '<div class="intro-y col-span-6 sm:col-span-6"><label for="input-wizard-1" class="form-label font-bold">Answers</label><input id="input-wizard-1" name="answer[]" type="text" class="form-control" placeholder="Description"></div><div class="intro-y col-span-3 sm:col-span-3 md: mt-5"><a href="javascript:void(0)" class="add_ans_button btn btn-secondary w-20 text-xs">Add Answer</a></div>';
var ansField = '<div class="intro-y col-span-6 sm:col-span-6"><label for="input-wizard-1" class="form-label font-bold">Answers</label><input id="input-wizard-1" name="answer[]" type="text" class="form-control" placeholder="Description"></div><div class="intro-y col-span-3 sm:col-span-3 md: mt-5"><a href="javascript:void(0)" class="remove_ans_button btn btn-secondary w-20 text-xs">Remove Answer</a></div>';
var fieldHTML ='<div class="intro-y col-span-4 sm:col-span-6"><label for="input-wizard-1" class="form-label">Question 1</label><input id="input-wizard-1" name="description[]" type="text" class="form-control" placeholder="Description"></div><div class="intro-y col-span-2 sm:col-span-2"><label for="input-wizard-6" class="form-label">Type</label><select name="group_assigned[]" id="input-wizard-6" class="form-select"><option>Select One</option><option>Select Many</option></select></div><div class="intro-y col-span-3 sm:col-span-2 mt-5"><a href="javascript:void(0)" class="btn btn-secondary w-20 text-xs remove_button">Remove Question</a></div>';
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