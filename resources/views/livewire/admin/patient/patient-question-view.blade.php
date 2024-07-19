<div>
    @extends('layouts.app')
    @section('content')
    
    @include('livewire.__partials.index-patient-questions')

    @endsection
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script>
    $(document).ready(function(){
        $('#index').show();
        $('#create').hide();
        $('.js-switch').change(function () {
            let status = $(this).prop('checked') === true ? 0 : 1;
            let activity_id = $(this).data('id');
    
            console.log(activity_id);
            $.ajax({
                type: "GET",
                dataType: "json",
                cache: false,
                url: '{{ route('activity.status') }}',
                data: {'status': status, 'act_id': activity_id},
                success: function (data) {
                    console.log(data.message);
                }
            });
        });

        $('.showCreate').click(function(){
            $('#index').hide();
            $('#create').show();
        });
    });
    </script>
</div>
