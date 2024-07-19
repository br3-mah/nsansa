@extends('layouts.app')
@section('content')
<div class="content">
    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">
            {{ $appointment->title }}                                         
            @if($appointment->status == 0)
                (<span class="text-danger">Cancelled</span>)
            @endif
            <small style="color: #4CE1AB">{{ $appointment->start_time }}</small>
        </h2>
        <a href="{{ route('appointment') }}" class="intro-x btn shadow-md mr-2">Back to Appointments</a>
    </div>
    <div class="intro-y flex flex-col sm:flex-row items-center mt-2">
        <div class="col-span-12 w-full">
            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                    </ul>
                </div>
            @endif
            <form class="col-span-12" method="POST" action="{{ route('appointment.store') }}">
                @csrf
                <div class="intro-y box p-5 mt-5">
                    <div class="border border-slate-200/60 dark:border-darkmode-400 rounded-md p-5">
                        <div class="font-medium text-base flex items-center border-b border-slate-200/60 dark:border-darkmode-400 pb-5"> <i data-lucide="chevron-down" class="w-4 h-4 mr-2"></i> Appointment Information </div>
                        <div class="mt-5">
                            <div class="form-inline items-start flex-col xl:flex-row mt-5 pt-5 first:mt-0 first:pt-0">
                                <div class="form-label xl:w-64 xl:!mr-10">
                                    <div class="text-left">
                                        <div class="flex items-center">
                                            <div class="font-medium">Invite Guests</div>
                                        </div>
                                        <div class="leading-relaxed text-slate-500 text-xs mt-3"> You can choose from the existing user list. </div>
                                    </div>
                                </div>
                                <div class="w-full mt-3 xl:mt-0 flex-1">
                                        {{-- <option value="Fashion &amp; Make Up">Fashion &amp; Make Up</option> --}}
                                        @forelse ($guests as $u)
                                        <div class="flex items-center py-2">
                                            <div class="w-9 h-9 image-fit zoom-in">
                                                @if($u->user->image_path == null)
                                                <div class="font-bolder border text-xs text-white w-4 h-4 sm:w-10 sm:h-10 rounded-full flex items-center justify-center text-slate-400 zoom-in tooltip" title="{{ $u->user->fname.' '.$u->user->lname  }}">
                                                    {{ $u->user->fname[0].' '.$u->user->lname[0] }}
                                                </div>
                                                @else
                                                <img src="{{ asset('public/storage/'.$u->user->image_path) }}" alt="{{ $u->user->lname.' '.$u->user->fname }}" class="rounded-lg border-white shadow-md tooltip" title="Uploaded at {{ $u->user->created_at->toFormattedDateString() }}">
                                                @endif
                                            </div>
                                            <div class="ml-4">
                                                <a href="" class="font-medium whitespace-nowrap">{{ $u->user->lname.' '.$u->user->fname }}</a> 
                                                <div class="text-slate-500 text-xs whitespace-nowrap mt-0.5">{{ $u->user->email }}</div>
                                            </div>
                                        </div>
                                        @empty
                                        @endforelse
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END: Product Information -->
                <!-- BEGIN: Product Detail -->
                <div class="intro-y box p-5 mt-5">
                    <div class="border border-slate-200/60 dark:border-darkmode-400 rounded-md p-5">
                        <div class="font-medium text-base flex items-center border-b border-slate-200/60 dark:border-darkmode-400 pb-5"> <i data-lucide="chevron-down" class="w-4 h-4 mr-2"></i> Appointment Detail </div>
                        <div class="mt-5">
                            <div class="form-inline items-start flex-col xl:flex-row mt-5 pt-5 first:mt-0 first:pt-0">
                                <div class="form-label xl:w-64 xl:!mr-10">
                                    <div class="text-left">
                                        <div class="flex items-center">
                                            <div class="font-medium">Start Time</div>
                                            {{-- <div class="ml-2 px-2 py-0.5 bg-slate-200 text-slate-600 dark:bg-darkmode-300 dark:text-slate-400 text-xs rounded-md">Required</div> --}}
                                        </div>
                                    </div>
                                </div>
                                <div class="w-full mt-3 xl:mt-0 flex-1">
                                    <input class="text-dark" disabled value="{{ $appointment->start_time }}"/> 
                                </div>
                            </div>
                            <div class="form-inline items-start flex-col xl:flex-row mt-5 pt-5 first:mt-0 first:pt-0">
                                <div class="form-label xl:w-64 xl:!mr-10">
                                    <div class="text-left">
                                        <div class="flex items-center">
                                            <div class="font-medium">End Time</div>
                                            {{-- <div class="ml-2 px-2 py-0.5 bg-slate-200 text-slate-600 dark:bg-darkmode-300 dark:text-slate-400 text-xs rounded-md">Required</div> --}}
                                        </div>
                                    </div>
                                </div>
                                <div class="w-full mt-3 xl:mt-0 flex-1">
                                    <input class="text-dark" disabled value="{{ $appointment->end_time }}"/>                     
                                </div>
                            </div>
                            <div class="form-inline items-start flex-col xl:flex-row mt-5 pt-5 first:mt-0 first:pt-0">
                                <div class="form-label xl:w-64 xl:!mr-10">
                                    <div class="text-left">
                                        <div class="flex items-center">
                                            <div class="font-medium">Start Date</div>
                                            {{-- <div class="ml-2 px-2 py-0.5 bg-slate-200 text-slate-600 dark:bg-darkmode-300 dark:text-slate-400 text-xs rounded-md">Required</div> --}}
                                        </div>
                                    </div>
                                </div>
                                <div class="w-full mt-3 xl:mt-0 flex-1">
                                    <p>{{ $appointment->start_date }}</p>
                                </div>
                            </div>
                            <div class="form-inline items-start flex-col xl:flex-row mt-5 pt-5 first:mt-0 first:pt-0">
                                <div class="form-label xl:w-64 xl:!mr-10">
                                    <div class="text-left">
                                        <div class="flex items-center">
                                            <div class="font-medium">End Date</div>
                                            {{-- <div disabled class="ml-2 px-2 py-0.5 bg-slate-200 text-slate-600 dark:bg-darkmode-300 dark:text-slate-400 text-xs rounded-md">Required</div> --}}
                                        </div>
                                    </div>
                                </div>
                                <div class="w-full mt-3 xl:mt-0 flex-1">
                                    <p>{{ $appointment->end_date }}</p>
                                </div>
                                <input type="hidden" id="user_id" value="{{ Auth::user()->id }}" name="user_id" class="form-control"/>
                                <input type="hidden" id="type" value="{{ request()->get('type') }}" name="type" class="form-control"/>
                                <input type="hidden" id="status" value="1" name="status" class="form-control"/>

                            </div>
                            {{-- <div class="form-inline items-start flex-col xl:flex-row mt-5 pt-5 first:mt-0 first:pt-0">
                                <div class="form-label xl:w-64 xl:!mr-10">
                                    <div class="text-left">
                                        <div class="flex items-center">
                                            <div class="font-medium">Condition</div>
                                            <div class="ml-2 px-2 py-0.5 bg-slate-200 text-slate-600 dark:bg-darkmode-300 dark:text-slate-400 text-xs rounded-md">Required</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="w-full mt-3 xl:mt-0 flex-1">
                                    <div class="flex flex-col sm:flex-row">
                                        <div class="form-check mr-4">
                                            <input id="condition-new" class="form-check-input" type="radio" name="horizontal_radio_button" value="horizontal-radio-chris-evans">
                                            <label class="form-check-label" for="condition-new">New</label>
                                        </div>
                                        <div class="form-check mr-4 mt-2 sm:mt-0">
                                            <input id="condition-second" class="form-check-input" type="radio" name="horizontal_radio_button" value="horizontal-radio-liam-neeson">
                                            <label class="form-check-label" for="condition-second">Second</label>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}
                            <div class="form-inline items-start flex-col xl:flex-row mt-5 pt-5 first:mt-0 first:pt-0">
                                <div class="form-label xl:w-64 xl:!mr-10">
                                    <div class="text-left">
                                        <div class="flex items-center">
                                            <div class="font-medium">Notes</div>
                                            {{-- <div class="ml-2 px-2 py-0.5 bg-slate-200 text-slate-600 dark:bg-darkmode-300 dark:text-slate-400 text-xs rounded-md">Required</div> --}}
                                        </div>
                                    </div>
                                </div>
                                <div class="w-full mt-3 xl:mt-0 flex-1">
                                        {!! $appointment->comments !!}
                                </div>
                            </div>
                            {{-- <div class="form-inline items-start flex-col xl:flex-row mt-5 pt-5 first:mt-0 first:pt-0">
                                <div class="form-label xl:w-64 xl:!mr-10">
                                    <div class="text-left">
                                        <div class="flex items-center">
                                            <div class="font-medium">Product Video</div>
                                        </div>
                                        <div class="leading-relaxed text-slate-500 text-xs mt-3"> Add a video so that buyers are more interested in your product. <a href="https://themeforest.net/item/midone-jquery-tailwindcss-html-admin-template/26366820" class="text-primary font-medium" target="blank">Learn more.</a> </div>
                                    </div>
                                </div>
                                <div class="w-full mt-3 xl:mt-0 flex-1">
                                    <button class="btn btn-outline-secondary w-40"> <i data-lucide="plus" class="w-4 h-4 mr-2"></i> Add Video URL </button>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                </div>
                @if($appointment->user_id == auth()->user()->id)
                <div class="flex justify-end flex-col md:flex-row gap-2 mt-5">
                    @if($appointment->status == 0) 
                    <a title="Reactivate" href="{{ route('appointment.activate', ['id' => $appointment->id ]) }}" class="btn py-3 btn-primary w-full md:w-52">Reactivate Appointment</a>
                    @else
                    <a title="Cancel" href="{{ route('appointment.deactivate', ['id' => $appointment->id ]) }}" class="btn py-3 btn-default w-full md:w-52">Cancel Appointment</a>
                    @endif
                    <a title="Delete permanently" href="{{ route('appointment.destroy', ['id' => $appointment->id ]) }}" class="btn py-3 btn-danger w-full md:w-52">Delete Appointment</a>
                    <a  title="Cancel" href="{{ route('appointment.edit', ['id' => $appointment->id ]) }}" class="btn py-3 btn-warning w-full md:w-52">Edit Appointment</a>
                </div>
                @endif
            </form>
        </div>
    </div>
</div>
@endsection