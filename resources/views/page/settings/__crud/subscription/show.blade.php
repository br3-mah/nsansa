@extends('layouts.app-settings')
@section('content')
<div class="content">
    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">
            Subscription Plan
        </h2>
    </div>
    <div class="grid grid-cols-12 gap-6">
        <!-- BEGIN: FAQ Menu -->
        <div class="intro-y col-span-12 lg:col-span-4 xl:col-span-3">
            <div class="box mt-5">
                <div class="p-5">
                    <a class="flex items-center text-primary font-medium"> <i data-lucide="user" class="w-4 h-4 mr-2"></i> sdsdsdsds</a>
                    <a class="flex items-center mt-5 capitalize"> <i data-lucide="lock" class="w-4 h-4 mr-2"></i> sdsdsdsdsd</a>
                    <a class="flex items-center mt-5"> <i data-lucide="mail" class="w-4 h-4 mr-2"></i>ssdsdsd</a>
                    <a href="{{ route('all-patient-files', $user->id) }}" class="btn btn-warning text-white flex items-center mt-5 capitalize">
                        <i data-lucide="folder-open" class="w-3 h-3 mr-2"></i>
                        Patient Files
                    </a>
                </div>
                <div class="p-5 border-t border-slate-200/60 dark:border-darkmode-400">
                    <a class="flex items-center font-bold"> Assigned Counselor</a>
                    <a class="flex items-center mt-5" href=""> <i data-lucide="user" class="w-4 h-4 mr-2"></i> 
                        Name
                    </a>
                    <a class="flex items-center mt-5"> <i data-lucide="user-plus" class="w-4 h-4 mr-2"></i> namamamaa </a>
                    <a class="flex items-center mt-5"> <i data-lucide="mail" class="w-4 h-4 mr-2"></i> name@mail </a>
                </div>
            </div>
        </div>
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
                        <div class="accordion-item">
                            <div id="faq-accordion-content-1" class="accordion-header">
                                <button class="accordion-button" type="button" data-tw-toggle="collapse" data-tw-target="#faq-accordion-collapse-1" aria-expanded="true" aria-controls="faq-accordion-collapse-1"> 
                                    Description
                                </button>
                            </div>
                            <div id="faq-accordion-collapse-1" class="accordion-collapse collapse show" aria-labelledby="faq-accordion-content-1" data-tw-parent="#faq-accordion-1">
                                <div class="accordion-body text-slate-600 dark:text-slate-500 leading-relaxed"> xxxxxxxxx</div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
        <!-- END: FAQ Content -->
    </div>
</div>
@endsection
