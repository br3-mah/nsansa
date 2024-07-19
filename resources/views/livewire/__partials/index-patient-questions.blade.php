<div class="content">
    <h2 class="text-lg font-medium mr-auto flex space-x-6 mt-8">
        <i data-lucide="person-standing" class="w-6 h-6"></i>
        &nbsp;
        <span>Patient Questions</span>
    </h2>
    @if (Session::has('attention'))
    <div class="intro-x alert alert-secondary w-full alert-dismissible justify-center show flex items-center mb-2" role="alert"> 
        <i data-lucide="alert-octagon" class="w-6 h-6 mr-2"></i> 
        {{ Session::get('attention') }}
        <button type="button" class="btn-close" data-tw-dismiss="alert" aria-label="Close"> 
            <i data-lucide="x" class="w-4 h-4"></i> 
        </button> 
    </div>
    @elseif (Session::has('error_msg'))
    <div class="intro-x alert alert-danger w-full alert-dismissible justify-center show flex items-center mb-2" role="alert"> 
        <i data-lucide="alert-octagon" class="w-6 h-6 mr-2"></i> 
        {{ Session::get('error_msg') }}
        <button type="button" class="btn-close" data-tw-dismiss="alert" aria-label="Close"> 
            <i data-lucide="x" class="w-4 h-4"></i> 
        </button> 
    </div>
    @endif
    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="intro-y col-span-12 flex flex-wrap xl:flex-nowrap items-center mt-2">
            {{-- <div class="flex w-full sm:w-auto">
                <div class="w-48 relative text-slate-500">
                    <input type="text" class="form-control w-48 box pr-10" placeholder="Search Activity">
                    <i class="w-4 h-4 absolute my-auto inset-y-0 mr-3 right-0" data-lucide="search"></i> 
                </div>
                <select class="form-select box ml-2">
                    <option>Latest Activities</option>
                    <option>Incomplete</option>
                    <option>Completed</option>
                </select>
            </div> --}}
            {{-- <div class="hidden xl:block mx-auto text-slate-500">Showing 1 to 2 of 2 entries</div> --}}
            <div class="w-full xl:w-auto flex items-center mt-3 xl:mt-0">
                @hasrole('counselor')
                    <a href="{{ route('patient-questionaires.create')}}" class="btn btn-primary shadow-md mr-2"> 
                        <i data-lucide="plus" class="w-4 h-4 mr-2"></i> Create Questions 
                    </a>
                @endhasrole
            </div>
        </div>
        {{-- @dd($activities  == []) --}}
        <!-- BEGIN: Data List -->
        <div class="intro-y col-span-12 overflow-auto 2xl:overflow-visible">
            @if($questionnaires->toArray()['total'] !== 0)
            <table class="table table-report -mt-2">
                <thead>
                    <tr>
                        <th class="whitespace-nowrap">QUESTIONNAIRE</th>
                        <th class="whitespace-nowrap">AUDIENCE</th>
                        <th class="whitespace-nowrap"></th>
                        <th class="text-center whitespace-nowrap">QUESTIONS</th>
                        <th class="text-center whitespace-nowrap">CREATED ON</th>
                        @hasrole('counselor')
                        <th class="text-center whitespace-nowrap">ACTIONS</th>
                        @endhasrole
                        @hasrole('patient')
                        <th class="whitespace-nowrap"></th>
                        @endhasrole
                    </tr>
                </thead>
                <tbody>
                    @forelse ($questionnaires as $q)
                    <tr class="intro-x">
                        <td class="w-40">
                            <div class="flex">
                                {{ $q->name }}
                            </div>
                        </td>
                        <td>
                            <a href="" class="capitalize font-medium whitespace-nowrap">{{ $q->group_assigned }}</a> 
                            <div class="text-slate-500 text-xs whitespace-nowrap mt-0.5">Patients</div>
                        </td>
                        <td>
                            <a href="{{ route('patient-responses', $q->id) }}" class="btn btn-primary font-medium whitespace-nowrap">
                                Responses
                            </a> 
                        </td>
                        <td class="text-center">{{ $q->questions->count() }} Questions</td>
                        <td class="text-center">{{ $q->created_at->toFormattedDateString() }}</td>
                        {{-- <td class="w-40 text-center">
                            @hasrole('patient')
                            <input type="checkbox" data-id="{{ $q->id }}" name="status" class="js-switch" {{ $q->status_id == 1 ? 'checked' : '' }}>
                            @endhasrole

                            <p>{{ $q->status_id == 1 ? 'Completed' : 'In Progress' }}</p>
                        </td> --}}
                        @hasrole('counselor')
                        <td class="table-report__action w-56">
                            <div class="flex justify-center items-center">
                                <a class="flex items-center text-sm mr-3" href="{{ route('patient-questionaires.show', $q->id) }}"> <i data-lucide="check-square" class="w-4 h-4 mr-1"></i> Add Answers </a>
                                {!! Form::open(['method' => 'DELETE','route' => ['patient-questionaires.destroy', $q->id],'style'=>'display:inline']) !!}
                                {!! Form::submit('Delete', ['class' => 'btn btn-sm btn-danger mr-2']) !!}
                                {!! Form::close() !!}
                                {{-- <a class="flex items-center text-danger" href="javascript:;" data-tw-toggle="modal" data-tw-target="#delete-confirmation-modal"> <i data-lucide="trash-2" class="w-4 h-4 mr-1"></i> Delete </a> --}}
                            </div>
                        </td>
                        @endhasrole
                        @hasrole('patient')
                        <td class="text-center space-x-2 flex">
                            @if (App\Models\PatientQuestionnaires::isCompleted( auth()->user()->id, $q->id ) == 0)
                                <span class="flex items-center text-primary text-sm bg-gray-200"> 
                                    <i data-lucide="check" class="w-4 h-4 mr-1"></i> Completed
                                </span>
                                &nbsp;&nbsp;
                                <a class="flex float-right items-center text-white text-sm btn btn-warning bg-blue-200" href="{{ route('start-questions', $q->id) }}"> 
                                    <i data-lucide="undo" class="w-4 h-4 mr-1"></i> Re-Take 
                                </a>
                            @else
                                <span class="flex items-center text-success text-sm bg-gray-200"> 
                                    <i data-lucide="clock" class="w-4 h-4 mr-1"></i> In Progress
                                </span>
                                &nbsp;&nbsp;
                                <a class="flex items-center text-white text-sm btn btn-success bg-blue-200" href="{{ route('start-questions', $q->id) }}"> 
                                    <i data-lucide="power" class="w-4 h-4 mr-1"></i> Start 
                                </a>
                            @endif
                        </td>
                        @endhasrole
                    </tr>
                    @empty
                        
                    @endforelse
                </tbody>
            </table>
            @else 
            <div class="items-center justify-center centered" style="text-align: center">
                <img class="intro-y mx-auto" width="300" src="https://cdni.iconscout.com/illustration/free/thumb/empty-box-4085812-3385481.png">
                <h3>No Questionnaire For You</h3>
            </div>
            @endif
        </div>
        <!-- END: Data List -->
        
        <!-- BEGIN: Pagination -->
        <div class="intro-y col-span-12 block">
            <nav class="w-full sm:w-auto sm:mr-auto block">
                <ul class="pagination">
                    {{-- {!! $activities->links('pagination::tailwind') !!} --}}
                    {{-- <li class="page-item">
                        <a class="page-link" href="#"> <i class="w-4 h-4" data-lucide="chevrons-left"></i> </a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#"> <i class="w-4 h-4" data-lucide="chevron-left"></i> </a>
                    </li>
                    <li class="page-item"> <a class="page-link" href="#">...</a> </li>
                    <li class="page-item"> <a class="page-link" href="#">1</a> </li>
                    <li class="page-item active"> <a class="page-link" href="#">2</a> </li>
                    <li class="page-item"> <a class="page-link" href="#">3</a> </li>
                    <li class="page-item"> <a class="page-link" href="#">...</a> </li>
                    <li class="page-item">
                        <a class="page-link" href="#"> <i class="w-4 h-4" data-lucide="chevron-right"></i> </a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#"> <i class="w-4 h-4" data-lucide="chevrons-right"></i> </a>
                    </li> --}}
                </ul>
            </nav>
            {{-- <select class="w-20 form-select box mt-3 sm:mt-0">
                <option>10</option>
                <option>25</option>
                <option>35</option>
                <option>50</option>
            </select> --}}
        </div>
        <!-- END: Pagination -->
    </div>
    <!-- BEGIN: Delete Confirmation Modal -->
    <div id="delete-confirmation-modal" class="modal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body p-0">
                    <div class="p-5 text-center">
                        <i data-lucide="x-circle" class="w-16 h-16 text-danger mx-auto mt-3"></i> 
                        <div class="text-3xl mt-5">Are you sure?</div>
                        <div class="text-slate-500 mt-2">
                            Do you really want to delete these records? 
                            <br>
                            This process cannot be undone.
                        </div>
                    </div>
                    <div class="px-5 pb-8 text-center">
                        <button type="button" data-tw-dismiss="modal" class="btn btn-outline-secondary w-24 mr-1">Cancel</button>
                        <button type="button" class="btn btn-danger w-24">Delete</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END: Delete Confirmation Modal -->
</div>