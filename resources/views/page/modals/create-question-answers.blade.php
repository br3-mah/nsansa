<!-- BEGIN: Modal Content -->
<div id="create-answers-modal" style="padding-top:15%" class="modal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
        <label for="input-wizard-1" class="form-label font-bold">Answers</label>
        {{-- Dynamic input field javascript --}}
        <form action="{{ route('answers.store')}}"  method="POST" >
            @csrf
            <div class="ans_wrapper">
                <div class="intro-y col-span-6 flex sm:col-span-6">
                    <input id="input-wizard-1" required name="answer[]" type="text" class="form-control" placeholder="">
                    <input id="input-wizard-1" value="{{ $q->id }}"  name="question_id" type="hidden" class="form-control" placeholder="">
                    <input id="input-wizard-1" value="{{ $questionaires->id }}"  name="question" type="hidden" class="form-control" placeholder="">
                </div>
                <div class="intro-y col-span-2 sm:col-span-2 md: mt-5">
                    <a href="javascript:void(0)" class="add_ans_button btn btn-secondary w-15 text-xs">Add Answer</a>
                </div>
            </div> 
            <hr>
            <button type="submit" class="btn">Submit</button>
        </form>
        {{-- End inputs --}}

        </div>
    </div>
</div>