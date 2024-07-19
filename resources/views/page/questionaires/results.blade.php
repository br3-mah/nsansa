@extends('layouts.app')
@section('content')
<div class="content">
    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">
            {{ $user->fname.' '.$user->lname }}'s Survey Response
        </h2>
    </div>
    <div class="grid grid-cols-12 gap-6">
        <!-- BEGIN: FAQ Menu -->
        
        @include('page.patients._partials.patient-side-info')
        <!-- END: FAQ Menu -->
        <!-- BEGIN: FAQ Content -->
        <div class="intro-y col-span-12 lg:col-span-8 xl:col-span-9">
            <div class="intro-y box lg:mt-5">
                <div class="flex items-center p-5 bg-primary border-b border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="font-extrabold text-white mr-auto">
                        Questionnaire Answers
                    </h2>
                </div>
                <div id="faq-accordion-1" class="accordion p-5">
                    @forelse ($survey_results as $question)
                        <div class="accordion-item">
                            <div id="faq-accordion-content-1" class="accordion-header">
                                <button class="accordion-button" type="button" data-tw-toggle="collapse" data-tw-target="#faq-accordion-collapse-1" aria-expanded="true" aria-controls="faq-accordion-collapse-1"> 
                                    {{ $question->question }} 
                                </button>
                            </div>
                            <div id="faq-accordion-collapse-1" class="accordion-collapse collapse show" aria-labelledby="faq-accordion-content-1" data-tw-parent="#faq-accordion-1">
                                <div class="accordion-body text-slate-600 dark:text-slate-500 leading-relaxed"> {{ $question->user_answer }}</div>
                            </div>
                        </div>
                    @empty
                        
                    @endforelse
                </div>
            </div>
        </div>
        <!-- END: FAQ Content -->
    </div>
</div>
@endsection
