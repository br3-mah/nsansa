@extends('layouts.app')
@section('content')
<div class="content">
    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">
            {{ $user->fname.' '.$user->lname }} Survey Response
        </h2>
    </div>
    <div class="grid grid-cols-12 gap-6">
        <!-- BEGIN: FAQ Menu -->
        <div class="intro-y col-span-12 lg:col-span-4 xl:col-span-3">
            <div class="box mt-5">
                <div class="p-5">
                    <a class="flex items-center text-primary font-medium" href=""> <i data-lucide="user" class="w-4 h-4 mr-2"></i> {{ $user->fname.' '.$user->lname }} </a>
                    <a class="flex items-center mt-5 capitalize" href=""> <i data-lucide="lock" class="w-4 h-4 mr-2"></i> {{ $user->type }} </a>
                    <a class="flex items-center mt-5" href=""> <i data-lucide="mail" class="w-4 h-4 mr-2"></i>{{ $user->email }}</a>
                </div>
            </div>
        </div>
        <!-- END: FAQ Menu -->
        <!-- BEGIN: FAQ Content -->
        <div class="intro-y col-span-12 lg:col-span-8 xl:col-span-9">
            <div class="intro-y box lg:mt-5">
                <div class="flex items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="font-medium text-base mr-auto">
                        Questionaire 
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
                            {{-- @forelse ($question->results as $result) --}}
                            <div id="faq-accordion-collapse-1" class="accordion-collapse collapse show" aria-labelledby="faq-accordion-content-1" data-tw-parent="#faq-accordion-1">
                                <div class="accordion-body text-slate-600 dark:text-slate-500 leading-relaxed"> 
                                    {{ App\Models\PatientQResult::myAnswer($user->id, $question->id) }}
                                </div>
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
