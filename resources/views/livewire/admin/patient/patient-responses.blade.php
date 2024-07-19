@extends('layouts.app')
@section('content')

<div class="content">
    <h2 class="text-lg font-medium mr-auto flex space-x-6 mt-8">
        <i data-lucide="quote" class="w-6 h-6"></i>
        &nbsp;
        <span>Patient Responses</span>
    </h2>

    @forelse ($patients as $p)
    <div class="intro-x chat-list-item cursor-pointer rounded-lg bg-white mr-10 relative flex items-center p-5">

        <div class="w-12 h-12 flex-none image-fit mr-1">
            @if($p->image_path != null) 
                <img width="56" onerror="handleError(this);" height="5" src="{{ asset('public/storage/'.$p->image_path) }}" class="attachment-full rounded-full size-full" alt="" loading="lazy" />
            @else
                <div class="font-bolder text-xs text-white w-10 h-10 bg-primary rounded-full flex items-center justify-center zoom-in tooltip" title="{{ Auth::user()->fname.' '.Auth::user()->lname  }}">
                    {{ $p->fname[0].' '.$p->lname[0] }}
                </div>
            @endif
        </div>
        <div class="ml-2 w-1/2 overflow-hidden">
            <div class="flex items-center">
                <a href="javascript:;" class="font-medium">{{ $p->fname.' '.$p->lname }}</a> 
            </div>
            {{-- <small>aaaaaaa</small> --}}
        </div>
        <div class="float-right overflow-hidden">
            <div class="flex items-center">
                <a href="{{ route('response', $p->id) }}" class="btn btn-primary font-medium">View Reponse</a> 
            </div>
        </div>
        {{-- <img width="56" height="5" src="uploads/sites/304/2022/06/logos.svg" class="attachment-full size-full" alt="" loading="lazy" /> --}}
    </div>
    @empty
        
    @endforelse
</div>

@endsection