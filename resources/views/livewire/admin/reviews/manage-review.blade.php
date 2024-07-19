    @extends('layouts.app')
    @section('content')
    <div>
        <div class="content">
            <h2 class="text-lg font-medium mr-auto flex space-x-6 mt-8">
                <i data-lucide="star" class="w-6 h-6"></i>
                &nbsp;
                <span>Reviews</span>
            </h2>
            <div class="grid grid-cols-12 gap-6 mt-5">
                <div class="intro-y col-span-12 flex flex-wrap xl:flex-nowrap items-center mt-2">
                    {{-- <div class="flex w-full sm:w-auto">
                        <div class="w-48 relative text-slate-500">
                            <input type="text" class="form-control w-48 box pr-10" placeholder="Search Activity">
                            <i class="w-4 h-4 absolute my-auto inset-y-0 mr-3 right-0" data-lucide="search"></i> 
                        </div>
                        <select class="form-select box ml-2">
                            <option>Latest rating</option>
                            <option>Incomplete</option>
                            <option>Completed</option>
                        </select>
                    </div> --}}
                    {{-- <div class="hidden xl:block mx-auto text-slate-500">Showing 1 to 2 of 2 entries</div> --}}
                </div>
                {{-- @dd($reviews  == []) --}}
                <!-- BEGIN: Data List -->
                <div class="intro-y col-span-12 overflow-auto 2xl:overflow-visible">
                    @if(!empty($reviews->toArray()))
                    <table class="table table-report -mt-2">
                        <thead>
                            <tr>
                                {{-- <th class="whitespace-nowrap">
                                    <input class="form-check-input" type="checkbox">
                                </th> --}}
                                {{-- <th class="whitespace-nowrap">INVOICE</th> --}}
                                <th class="whitespace-nowrap">REVIEWER</th>
                                <th class="text-center whitespace-nowrap">FEEDBACK</th>
                                <th class="whitespace-nowrap">RATING</th>
                                <th class="text-right whitespace-nowrap">
                                    <div class="pr-16">DATE</div>
                                </th>
                                <th class="text-center whitespace-nowrap">ACTIONS</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                            @forelse ($reviews as $rev)
                            
                                <tr class="intro-x">
                                    {{-- <td class="w-10">
                                        <input class="form-check-input" type="checkbox">
                                    </td> --}}
                                    <td class="w-40">
                                        <a href="" class="font-medium whitespace-nowrap">{{ $rev->user->fname.' '.$rev->user->lname}}</a> 
                                        {{-- <div class="text-slate-500 text-xs whitespace-nowrap mt-0.5">Ohio, Ohio</div> --}}
                                    </td>
                                    <td class="text-center">
                                        <div class="flex items-center justify-center whitespace-nowrap text-success"> <i data-lucide="chat" class="w-4 h-4 mr-2"></i> {{ $rev->review}} </div>
                                    </td>
                                    {{-- <td class="w-40 !py-4"> <a href="" class="underline decoration-dotted whitespace-nowrap">#INV-25807556</a> </td> --}}
                    
                                    <td>
                                        <div class="text-slate-500 text-xs whitespace-nowrap mt-0.5">{{ $rev->rating  }}</div>
                                    </td>
                                    
                                    <td class="w-40 text-right">
                                        <div class="pr-16">{{ $rev->created_at->toFormattedDateString()}}</div>
                                    </td> 
                                    <td class="table-report__action">
                                        <div class="flex justify-center items-center">
                                            <input type="checkbox" data-id="{{ $rev->id }}" class="js-switch" {{ $rev->status == 1 ? 'checked' : '' }}>                         
                                        </div>
                                    </td>
                                </tr>                        
                            @empty
                         
                            @endforelse
                            
                        </tbody>
                    </table>
                    @else 
                    <div class="items-center justify-center centered" style="text-align: center">
                        <img class="intro-y mx-auto" width="300" src="https://cdni.iconscout.com/illustration/free/thumb/empty-box-4085812-3385481.png">
                        <h3>No Reviews Yet</h3>
                    </div>
                    @endif
                </div>
                <!-- END: Data List -->
                @if($reviews  !== [])
                <!-- BEGIN: Pagination -->
                    <div class="intro-y col-span-12 block">
                        <nav class="w-full sm:w-auto sm:mr-auto block">
                            <ul class="pagination">
                                {!! $reviews->links('pagination::tailwind') !!}
                            </ul>
                        </nav>
                    </div>
                <!-- END: Pagination -->
                @endif
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script>
        $('.js-switch').change(function () {
            let status = $(this).prop('checked') === true ? 1 : 0;
            let id = $(this).data('id');
            $.ajax({
                type: "POST",
                dataType: "json",
                cache: false,
                url: '{{ route('rating.status') }}',
                data: {'status': status, 'id': id},
                success: function (data) {
                    console.log(data.message);
                }
            });
        });
    </script>
    @endsection
