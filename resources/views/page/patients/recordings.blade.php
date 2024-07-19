@extends('layouts.app')
@section('content')
<div class="content">
    <h2 class="text-lg font-medium mr-auto flex space-x-6 mt-8">
        <i data-lucide="video" class="w-6 h-6"></i>
        &nbsp;
        <span>Session Recordings</span>
    </h2>
    
    <div class="w-full mt-4">
        <div class="w-full py-4">
            <h2>Recent Videos</h2>
        </div>
        <div class="flex items-left justify-content-start justify-start">
            
            @forelse ($videos as $video)
                <div class="p-3 bg-white fl-left">
                    <p>{{ $video->description ?? $video->file_name}}</p>
                    <video onclick="openVideoInNewTab(this.src)" src="storage/app/{{ $video->file_path }}" controls>
                        Your browser does not support the video tag.
                    </video>
                </div>
            @empty
                No Recordings
            @endforelse
        </div>
    </div>
</div>
<script>
function openVideoInNewTab(videoURL) {
    window.open(videoURL, '_blank');
}
</script>
@endsection