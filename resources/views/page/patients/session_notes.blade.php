@extends('layouts.app')
@section('content')
<div class="content">
    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">
            {{ $user->fname.' '.$user->lname }}'s Session Notes
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
                        Video Call | Session Notes
                    </h2>
                </div>
                @if ($notes !== null)
                    <div id="faq-accordion-1" class="accordion p-5">
                        {{ $notes->notes ?? 'Notes not found for this patient' }}
                    </div>
                    <div class="justify-content-center justify-center items-center flex p-4">
                        <span>Last Updated: {{ $notes->updated_at->toFormattedDateString() }}</span>
                    </div>
                @else
                    <div id="faq-accordion-1" class="accordion p-5">
                        Notes not found for this patient
                    </div>
                @endif)
            </div>
        </div>
        <!-- END: FAQ Content -->
    </div>
</div>
@endsection
