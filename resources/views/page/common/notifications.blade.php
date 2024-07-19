@extends('layouts.app')
@section('content')

<div class="content">

    <div class="intro-x notification-content__box dropdown-content p-5 mt-4">
        <div class="intro-y flex items-center mt-4 mb-4">
            <h1 class="text-lg font-medium mr-auto">
                Notifications
            </h1>
        </div>
    
        @forelse ($notifications as $note)
            <div class="cursor-pointer relative flex items-center p-3 mark-as-read"  <?php if(empty($note->read_at)){ "style='background-color: #D3E5DF'"; } ?> >
                <div class="w-12 h-12 flex-none image-fit mr-1">
                    @switch($note->data['type'])
                        @case('new-user')
                            <img alt="{{ $note->data['name'] }}" class="rounded-full" src="https://t4.ftcdn.net/jpg/03/29/84/99/360_F_329849933_edMwOcbReWmPdo7VaB0nIgg4Wlyt0aDU.jpg">
                            @break
                        @case('welcome')
                            <img alt="{{ $note->data['name'] }}" class="rounded-full" src="https://img.freepik.com/free-vector/hand-drawn-colorful-groovy-psychedelic-background_23-2149083917.jpg?w=2000">
                            @break
                        @case('welcome-counselor')
                            <img alt="{{ $note->data['name'] }}" class="rounded-full" src="https://www.kindpng.com/picc/m/2-21158_euclidean-line-vector-rainbow-png-file-hd-clipart.png">
                            @break
                        @case('new-appointment')
                            <img alt="{{ $note->data['name'] }}" class="rounded-full" src="https://thumbs.dreamstime.com/b/deadline-calendar-date-appointment-agenda-business-plan-schedule-events-month-online-meeting-symbol-reminder-187031403.jpg">
                            @break
                        @default
                            <img alt="{{ $note->data['name'] }}" class="rounded-full" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRQ00PRm15u1lOv65dmayn_Y3UX2szglLK-3A&usqp=CAU">

                    @endswitch
                    {{-- <div class="w-3 h-3 bg-success absolute right-0 bottom-0 rounded-full border-2 border-white"></div> --}}
                </div>
                <div class="w-full ml-2 overflow-hidden">
                    <div class="flex items-center">
                        <p href="javascript:;" class="font-medium truncate mr-5">{{ $note->data['sender'] }}</p> 
                        <div class="text-xs text-slate-400 ml-auto whitespace-nowrap">{{ $note->created_at->toFormattedDateString() }}</div>
                    </div>
                    <div class="w-full truncate text-slate-500 mt-0.5">{{ $note->data['message'] }}</div>

                    <a href="#" class="float-right mark-as-read" data-id="{{ $note->id }}">
                        Mark as read
                    </a>
                    {{-- <div class="w-6">
                        <form class="float-right" action="{{ route('delete-notification', ['id'=>$note->id ]) }}" method="POST">
                            @csrf
                            <input type="hidden" name="id" value="{{ $note->id }}">
                            <button type="submit">
                            <svg xmlns="http://www.w3.org/2000/svg" style="color:red" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 6h18"></path><path d="M19 6v14c0 1-1 2-2 2H7c-1 0-2-1-2-2V6"></path><path d="M8 6V4c0-1 1-2 2-2h4c1 0 2 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg>
                            </button>
                        </form>
                    </div> --}}
                </div>
            </div> 
        @empty
            <div class="items-center justify-center centered" style="text-align: center">
                <img class="intro-y mx-auto" width="300" src="https://cdni.iconscout.com/illustration/free/thumb/empty-box-4085812-3385481.png">
                <h3>No Notifications Yet</h3>
            </div>
        @endforelse
        <div class="intro-y col-span-12flex-wrap sm:flex-row sm:flex-nowrap items-center">
            <nav class="w-full sm:w-auto sm:mr-auto">
                <ul class="pagination block  justify-end ">
                    {!! $notifications->links() !!}
                </ul>
            </nav>
        </div>
    </div>
</div>
<script>
    function sendMarkRequest(id = null) {
        return $.ajax("{{ route('markNotification') }}", {
            method: 'POST',
            data: {
                id
            }
        });
    }
    $(function() {
        $('.mark-as-read').click(function() {
            let request = sendMarkRequest($(this).data('id'));
            request.done(() => {
                $(this).parents('div.alert').remove();
            });
        });
        $('#mark-all').click(function() {
            let request = sendMarkRequest();
            request.done(() => {
                $('div.alert').remove();
            })
        });
    });
</script>
@endsection
