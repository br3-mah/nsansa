@extends('layouts.app')
@section('content')

<div class="content">
    <div class="flex items-center mt-8">
        <h2 class="intro-y text-lg font-medium mr-auto">
            <a href="{{ route('questionaires.index') }}" class="intro-x btn shadow-md mr-2">
                <i data-lucide="chevron-left" class="w-4 h-4 mr-2"></i> 
            </a> <span>Survey Questions</span>
        </h2>
        <a href="{{ route('questionaires.new_question', $questionaires->id) }}" class="intro-x btn btn-primary shadow-md mr-2">New Question</a>
    </div>
    <div class="grid grid-cols-12 gap-6 mt-5">
        <!-- BEGIN: Data List -->
        <div class="intro-y col-span-12 overflow-auto lg:overflow-visible">
            <table class="table table-report -mt-2">
                <thead>
                    <tr>
                        <th class="whitespace-nowrap">QUESTION</th>
                        <th class="text-center whitespace-nowrap">STATUS</th>
                        <th class="text-center whitespace-nowrap">ACTIONS</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($questionaires->questions as $q)
                    <tr class="intro-x">
                        <td class="w-40">
                            <div class="flex font-bold text-primary">
                                <span class="question-text">{{ $loop->iteration }}. <span data-question-id="{{ $q->id }}" id="question_{{ $q->id }}">{{ $q->question }}</span></span>
                                <div class="question-edit" id="edit_question_{{ $q->id }}" style="display: none">
                                    {!! Form::open(['method' => 'POST', 'route' => ['questions.update', $q->id], 'class' => 'edit-question-form', 'data-question-id' => $q->id]) !!}
                                    @csrf
                                    {!! Form::textarea('edited_question', $q->question, ['class' => 'form-control', 'rows' => 2]) !!}
                                    <div class="flex gap-2">
                                        <button id="save_btn_{{ $q->id}}" type="submit" class="btn btn-primary btn-sm">Save</button>
                                        <span style="display: none" id="btn_loader_{{$q->id}}">
                                            <img width="25" src="{{ asset('public/img/lod.gif')}}">
                                        </span>
                                    </div>
                                    <button type="button" class="btn btn-secondary btn-sm cancel-question-edit" data-question-id="{{ $q->id }}">Cancel</button>
                                    {!! Form::close() !!}
                                </div>
                            </div>
                        </td>
                        <td class="w-40">
                            <div class="flex items-center justify-center text-danger"> 
                                <i data-lucide="check-square" class="w-4 h-4 mr-2"></i> 
                                <select data-id="{{ $q->id }}" class="form-control" id="sel_{{ $q->id }}" onchange="onQuestionType('{{ $q->id}}')">
                                    <option>{{ $q->type }}</option>
                                    <option value="Select One">Select One</option>
                                    <option value="Select Many">Select Many</option>
                                    <option value="Custom">Custom</option>
                                </select>
                            </div>
                        </td>
                        <td class="table-report__action w-56">
                            <div class="flex justify-end items-right">
                                @if($q->type !== 'Custom')
                                <a href="{{ route('questionaires.edit', $q->id) }}" id="add_answers_part_{{ $q->id }}" class="flex items-center mr-3"> <i data-lucide="check-square" class="w-4 h-4 mr-1"></i> Add Answers </a>
                                @endif
                                {!! Form::open(['method' => 'DELETE', 'route' => ['question.remove', $q->id, $q->questionaire_id], 'style' => 'display:inline']) !!}
                                {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-sm  mr-2']) !!}
                                {!! Form::close() !!}
                            </div>
                        </td>
                        <td class="w-2">
                            <button class="btn btn-success text-white btn-sm edit-question" data-question-id="{{ $q->id }}">Edit</button>
                        </td>
                        
                    </tr>
                        <div id="answers_part_{{ $q->id}}">
                            @forelse ($q->answers as $ans)
                            <tr class="intro-x">
                                <td class="w-10">
                                    <div class="flex answer-text" data-question-id="{{ $ans->id }}" id="answer_{{ $ans->id }}">
                                        {{ $ans->answer }}
                                    </div>
                                    <div class="answer-edit" id="edit_answer_{{ $ans->id }}" style="display: none">
                                        {!! Form::open(['method' => 'PUT', 'route' => ['answers.update', $ans->id, $q->questionaire_id], 'class' => 'edit-answer-form', 'data-ans-id' => $q->id]) !!}
                                        @csrf
                                        {!! Form::text('edited_answer', $ans->answer, ['class' => 'form-control']) !!}
                                        <div class="flex gap-2">
                                            <button id="ans_save_btn_{{ $q->id}}" type="submit" class="btn btn-primary btn-sm">Save</button>
                                            <span style="display: none" id="ans_btn_loader_{{$q->id}}">
                                                <img width="25" src="{{ asset('public/img/lod.gif')}}">
                                            </span>
                                            <button type="button" class="btn btn-secondary btn-sm cancel-edit" data-answer-id="{{ $ans->id }}">Cancel</button>
                                        </div>
                                        {!! Form::close() !!}
                                    </div>
                                </td>
                                <td class="w-2">
                                    {!! Form::open(['method' => 'DELETE', 'route' => ['answers.remove', $ans->id, $q->questionaire_id], 'style' => 'display:inline']) !!}
                                    {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-sm']) !!}
                                    {!! Form::close() !!}
                                </td>
                                <td class="w-2">
                                    <button class="btn btn-success text-white btn-sm edit-answer" data-answer-id="{{ $ans->id }}">Edit</button>
                                </td>
                            </tr>
                            @empty
                    
                            @endforelse
                        </div>
                    @empty
            
                    @endforelse
                </tbody>
            </table>
            
        </div>
        <!-- END: Data List -->
        <!-- BEGIN: Pagination -->
        <div class="intro-y col-span-12 flex flex-wrap sm:flex-row sm:flex-nowrap items-center">
            <nav class="w-full sm:w-auto sm:mr-auto">
                <ul class="pagination">
                    {{-- {{  $questionaires->questions->links()  }} --}}
                    {{-- <li class="page-item">
                        <a class="page-link" href="#"> <i class="w-4 h-4" data-lucide="chevrons-left"></i> </a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#"> <i class="w-4 h-4" data-lucide="chevron-left"></i> </a>
                    </li>
                    <li class="page-item"> <a class="page-link" href="#">...</a> </li>
                    <li class="page-item"> <a class="page-link" href="#">1</a> </li>
                    <li class="page-item active"> <a class="page-link" href="#">2</a> </li>
                    <li class="page-item"> <a class="page-link" href="#">3</a> </li>
                    <li class="page-item"> <a class="page-link" href="#">...</a> </li>
                    <li class="page-item">
                        <a class="page-link" href="#"> <i class="w-4 h-4" data-lucide="chevron-right"></i> </a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#"> <i class="w-4 h-4" data-lucide="chevrons-right"></i> </a>
                    </li> --}}
                </ul>
            </nav>
            {{-- <select class="w-20 form-select box mt-3 sm:mt-0">
                <option>10</option>
                <option>25</option>
                <option>35</option>
                <option>50</option>
            </select> --}}
        </div>
        <!-- END: Pagination -->
    </div>
    <!-- BEGIN: Delete Confirmation Modal -->
    <div id="delete-confirmation-modal" class="modal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body p-0">
                    <div class="p-5 text-center">
                        <i data-lucide="x-circle" class="w-16 h-16 text-danger mx-auto mt-3"></i> 
                        <div class="text-3xl mt-5">Are you sure?</div>
                        <div class="text-slate-500 mt-2">
                            Do you really want to delete these records?
                            <br>
                            This process cannot be undone.
                        </div>
                    </div>
                    <div class="px-5 pb-8 text-center">
                        <button type="button" data-tw-dismiss="modal" class="btn btn-outline-secondary w-24 mr-1">Cancel</button>
                        <button type="button" class="btn btn-danger w-24">Delete</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END: Delete Confirmation Modal -->
</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const editQuestionButtons = document.querySelectorAll(".edit-question");
        const editAnswerButtons = document.querySelectorAll(".edit-answer");
        const cancelQEditButtons = document.querySelectorAll(".cancel-question-edit");
        const cancelEditButtons = document.querySelectorAll(".cancel-edit");
        const questionTexts = document.querySelectorAll(".question-text");
        const answerTexts = document.querySelectorAll(".answer-text");
        const questionEdits = document.querySelectorAll(".question-edit");
        const answerEdits = document.querySelectorAll(".answer-edit");

        editQuestionButtons.forEach(button => {
            button.addEventListener("click", function() {
                const questionId = button.getAttribute("data-question-id");
                const questionText = document.getElementById(`question_${questionId}`);
                const questionEdit = document.getElementById(`edit_question_${questionId}`);
                
                questionText.style.display = "none";
                questionEdit.style.display = "block";
            });
        });

        editAnswerButtons.forEach(button => {
            button.addEventListener("click", function() {
                const answerId = button.getAttribute("data-answer-id");
                const answerText = document.getElementById(`answer_${answerId}`);
                const answerEdit = document.getElementById(`edit_answer_${answerId}`);
                
                answerText.style.display = "none";
                answerEdit.style.display = "block";
            });
        });

        cancelQEditButtons.forEach(button => {
            button.addEventListener("click", function() {
                const elementId = button.getAttribute("data-question-id");
                const editElement = document.getElementById(`edit_question_${elementId}`);
                const viewElement = document.getElementById(`question_${elementId}`);
                
                editElement.style.display = "none";
                viewElement.style.display = "block";
            });
        });

        cancelEditButtons.forEach(button => {
            button.addEventListener("click", function() {
                const elementId = button.getAttribute("data-answer-id");
                const editElement = document.getElementById(`edit_answer_${elementId}`);
                const viewElement = document.getElementById(`answer_${elementId}`);
                
                editElement.style.display = "none";
                viewElement.style.display = "block";
            });
        });

        const editQuestionForms = document.querySelectorAll(".edit-question-form");
        editQuestionForms.forEach(form => {
            form.addEventListener("submit", function(event) {
                event.preventDefault();
                const formData = new FormData(form);
                // const questionId = form.getAttribute("action").split("/")[2];
                const questionId = form.getAttribute('data-question-id');
                const saveBtn = document.getElementById(`save_btn_${questionId}`);
                const btnloader = document.getElementById(`btn_loader_${questionId}`);
                saveBtn.style.display = "none";
                btnloader.style.display = "block";
                // alert(questionId);
                fetch(form.getAttribute("action"), {
                    method: "POST",
                    body: formData
                }).then(response => response.json())
                  .then(data => {
                      const questionText = document.getElementById(`question_${questionId}`);
                      const questionEdit = document.getElementById(`edit_question_${questionId}`);
                      
                      btnloader.style.display = "none";
                      saveBtn.style.display = "block";
                      questionText.innerText = data.data;
                      questionText.style.display = "block";
                      questionEdit.style.display = "none";
                  });
            });
        });

        const editAnswerForms = document.querySelectorAll(".edit-answer-form");
        editAnswerForms.forEach(form => {
            form.addEventListener("submit", function(event) {
                event.preventDefault();
                const formData = new FormData(form);
                const answerId = form.getAttribute("data-ans-id");
                const saveBtn = document.getElementById(`ans_save_btn_${answerId}`);
                const btnloader = document.getElementById(`ans_btn_loader_${answerId}`);

                saveBtn.style.display = "none";
                btnloader.style.display = "block";

                fetch(form.getAttribute("action"), {
                    method: "POST",
                    body: formData
                }).then(response => response.json())
                  .then(data => {
                      const answerText = document.getElementById(`answer_${answerId}`);
                      const answerEdit = document.getElementById(`edit_answer_${answerId}`);
                      
                      btnloader.style.display = "none";
                      saveBtn.style.display = "block";
                      answerText.innerText = data.updated_answer;
                      answerText.style.display = "block";
                      answerEdit.style.display = "none";
                  });
            });
        });

    });

    function onQuestionType(id) {
            const selectElement = document.getElementById('sel_' + id);
            const selectedValue = selectElement.value;
        
            
            const dataId = id; // Get the data-id attribute value
            // const dataId = $(this).data('id'); // Get the data-id attribute value
            const hide_answers = document.getElementById(`answers_part_${dataId}`);
            const hide_add_answers = document.getElementById(`add_answers_part_${dataId}`);
            const formData = new FormData();
            formData.append('question_type', selectedValue);
            formData.append('data_id', dataId); // Include the data-id in the form data

            $.ajax({
                url: '{{ route('update.questiontype') }}', // Replace with your Laravel route name
                type: 'POST',
                data: formData,
                processData: false,
                contentType: false,
                success: function(response) {
                    // console.log(response);
                    if(selectedValue === 'Custom'){
                        hide_answers.style.display = "none";
                        hide_add_answers.style.display = "none";
                    }else{
                        location.reload();
                    }
                },
                error: function(xhr) {
                    console.error(xhr.responseText);
                    // Handle any errors here
                }
            });
        }
</script>

@include('page.modals.create-question-answers')
@endsection
