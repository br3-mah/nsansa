@extends('layouts.app')

@section('content')
<div class="mt-8">
    <div class="container">
        <group-chat-room :conversation="{{ $conversation }}" :current-user="{{ auth()->user() }}"></group-chat-room>
    </div>
</div>
@endsection