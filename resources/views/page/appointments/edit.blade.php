@extends('layouts.app')
@section('content')
<div class="content">
    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">
            Edit Appointment
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
            <form class="col-span-12" method="POST" action="{{ route('appointment.update') }}">
                @csrf
                <div class="intro-y box p-5 mt-5">
                    <div class="border border-slate-200/60 dark:border-darkmode-400 rounded-md p-5">
                        <div class="font-medium text-base flex items-center border-b border-slate-200/60 dark:border-darkmode-400 pb-5"> <i data-lucide="chevron-down" class="w-4 h-4 mr-2"></i> Appointment Information </div>
                        <div class="mt-5">
                            <div class="form-inline items-start flex-col xl:flex-row mt-5 pt-5 first:mt-0 first:pt-0">
                                <div class="form-label xl:w-64 xl:!mr-10">
                                    <div class="text-left">
                                        <div class="flex items-center">
                                            <div class="font-medium">Appointment Title</div>
                                            <div class="ml-2 px-2 py-0.5 bg-slate-200 text-slate-600 dark:bg-darkmode-300 dark:text-slate-400 text-xs rounded-md">Required</div>
                                        </div>
                                        {{-- <div class="leading-relaxed text-slate-500 text-xs mt-3"> Include min. 40 characters to make it more attractive and easy for buyers to find, consisting of product type, brand, and information such as color, material, or type. </div> --}}
                                    </div>
                                </div>
                                <div class="w-full mt-3 xl:mt-0 flex-1">
                                    <input id="appointment-name" value="{{ $appointment->title }}" name="title" type="text" class="form-control" placeholder="Appointment Title">
                                    {{-- <div class="form-help text-right">Maximum character 0/70</div> --}}
                                </div>
                            </div>
                            {{-- <div class="form-inline items-start flex-col xl:flex-row mt-5 pt-5 first:mt-0 first:pt-0">
                                <div class="form-label xl:w-64 xl:!mr-10">
                                    <div class="text-left">
                                        <div class="flex items-center">
                                            <div class="font-medium">Subject</div>
                                            <div class="ml-2 px-2 py-0.5 bg-slate-200 text-slate-600 dark:bg-darkmode-300 dark:text-slate-400 text-xs rounded-md">Required</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="w-full mt-3 xl:mt-0 flex-1">
                                    <select id="category" class="form-select">
                                        <option value="Fashion &amp; Make Up">Stress Management</option>
                                        <option value="Sport &amp; Outdoor">Anxiety Disorder</option>
                                        <option value="Hobby">Grieving</option>
                                    </select>
                                </div>
                            </div> --}}
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
                                        <select name="guest_id[]" id="subcategory" class="tom-select" multiple>
                                            @forelse ($users as $u)
                                                <option value="{{ $u->id }}">{{ $u->fname.' '.$u->lname }}</option>
                                            @empty
                                                
                                            @endforelse
                                        </select>
                                    <br>
                                    <br>
                                        @forelse ($guests as $u)
                                        <div class="flex items-center w-full py-2">
                                            <div class="w-9 h-9 image-fit zoom-in">
                                                @if($u->user->image_path == null)
                                                <div class="font-bolder border text-xs text-white w-4 h-4 sm:w-10 sm:h-10 rounded-full flex items-center justify-center text-slate-400 zoom-in tooltip" title="{{ $u->user->fname.' '.$u->user->lname  }}">
                                                    {{ $u->user->fname[0].' '.$u->user->lname[0] }}
                                                </div>
                                                @else
                                                <img src="{{ asset('public/storage/'.$u->user->image_path) }}" alt="{{ $u->user->lname.' '.$u->user->fname }}" class="rounded-full border-white shadow-md tooltip" title="Uploaded at {{ $u->user->created_at->toFormattedDateString() }}">
                                                @endif
                                            </div>
                                            <div class="ml-4">
                                                <a href="#" class="font-medium whitespace-nowrap">{{ $u->user->lname.' '.$u->user->fname }}</a> 
                                                <div class="text-slate-500 text-xs whitespace-nowrap mt-0.5">{{ $u->user->email }}</div>
                                            </div>
                                            <div class="ml-4">
                                                <a class="justify-end text-danger zoom-in tooltip" title="Remove guest" href="{{ route('appointment.remove_guest', ['id'=>$u->user->id, 'appointment_id' => $appointment->id]) }}">Remove</a>
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
                                    <select value="{{ $appointment->start_time }}" name="start_time" id="start_time" class="tom-select w-full">
                                        <option selected>{{ $appointment->start_time }}</option>
                                        <option value="01:00 AM">01:00 AM</option>
                                        <option value="02:00 AM">02:00 AM</option>
                                        <option value="03:00 AM">03:00 AM</option>
                                        <option value="04:00 AM">04:00 AM</option>
                                        <option value="05:00 AM">05:00 AM</option>
                                        <option value="06:00 AM">06:00 AM</option>
                                        <option value="07:00 AM">07:00 AM</option>
                                        <option value="09:00 AM">08:00 AM</option>
                                        <option value="10:00 AM">09:00 AM</option>
                                        <option value="11:00 AM">10:00 AM</option>
                                        <option value="12:00 AM">12:00 AM</option>
                                        <option value="1:00 PM">1:00 PM</option>
                                        <option value="2:00 PM">2:00 PM</option>
                                        <option value="3:00 PM">3:00 PM</option>
                                        <option value="4:00 PM">4:00 PM</option>
                                        <option value="5:00 PM">5:00 PM</option>
                                        <option value="6:00 PM">6:00 PM</option>
                                        <option value="7:00 PM">7:00 PM</option>
                                        <option value="8:00 PM">8:00 PM</option>
                                        <option value="9:00 PM">9:00 PM</option>
                                        <option value="10:00 PM">10:00 PM</option>
                                        <option value="11:00 PM">11:00 PM</option>
                                        <option value="12:00 PM">12:00 PM</option>
                                    </select>
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
                                    <select value="{{ $appointment->end_time }}" name="end_time" id="end_time" class="tom-select w-full">
                                        <option value="01:00 AM">01:00 AM</option>
                                        <option value="02:00 AM">02:00 AM</option>
                                        <option value="03:00 AM">03:00 AM</option>
                                        <option value="04:00 AM">04:00 AM</option>
                                        <option value="05:00 AM">05:00 AM</option>
                                        <option value="06:00 AM">06:00 AM</option>
                                        <option value="07:00 AM">07:00 AM</option>
                                        <option value="09:00 AM">08:00 AM</option>
                                        <option value="10:00 AM">09:00 AM</option>
                                        <option value="11:00 AM">10:00 AM</option>
                                        <option value="12:00 AM">12:00 AM</option>
                                        <option value="1:00 PM">1:00 PM</option>
                                        <option value="2:00 PM">2:00 PM</option>
                                        <option value="3:00 PM">3:00 PM</option>
                                        <option value="4:00 PM">4:00 PM</option>
                                        <option value="5:00 PM">5:00 PM</option>
                                        <option value="6:00 PM">6:00 PM</option>
                                        <option value="7:00 PM">7:00 PM</option>
                                        <option value="8:00 PM">8:00 PM</option>
                                        <option value="9:00 PM">9:00 PM</option>
                                        <option value="10:00 PM">10:00 PM</option>
                                        <option value="11:00 PM">11:00 PM</option>
                                        <option value="12:00 PM">12:00 PM</option>
                                    </select>                                </div>
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
                                    <div id="basic-datepicker">
                                        <div class="preview">
                                            <input type="text" value="{{ $appointment->start_date }}" name="start_date" id="start_date" class="datepicker form-control" data-single-mode="true">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-inline items-start flex-col xl:flex-row mt-5 pt-5 first:mt-0 first:pt-0">
                                <div class="form-label xl:w-64 xl:!mr-10">
                                    <div class="text-left">
                                        <div class="flex items-center">
                                            <div class="font-medium">End Date</div>
                                            {{-- <div class="ml-2 px-2 py-0.5 bg-slate-200 text-slate-600 dark:bg-darkmode-300 dark:text-slate-400 text-xs rounded-md">Required</div> --}}
                                        </div>
                                    </div>
                                </div>
                                <div class="w-full mt-3 xl:mt-0 flex-1">
                                    <div id="basic-datepicker">
                                        <div class="preview">
                                            <input type="text" value="{{ $appointment->end_date }}" name="end_date" id="end_date" class="datepicker form-control" data-single-mode="true">
                                        </div>
                                    </div>
                                </div>
                                <input type="hidden" id="app_id" value="{{ $appointment->id }}" name="app_id" class="form-control"/>
                                <input type="hidden" id="user_id" value="{{ $appointment->user_id }}" name="user_id" class="form-control"/>
                                <input type="hidden" id="type" value="{{ $appointment->type }}" name="type" class="form-control"/>
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
                                            <div class="font-medium">Comments</div>
                                            <div class="ml-2 px-2 py-0.5 bg-slate-200 text-slate-600 dark:bg-darkmode-300 dark:text-slate-400 text-xs rounded-md">Required</div>
                                        </div>
                                        {{-- <div class="leading-relaxed text-slate-500 text-xs mt-3">
                                            <div>Make sure the product description provides a detailed explanation of your product so that it is easy to understand and find your product.</div>
                                            <div class="mt-2">It is recommended not to enter info on mobile numbers, e-mails, etc. into the product description to protect your personal data.</div>
                                        </div> --}}
                                    </div>
                                </div>
                                <div class="w-full mt-3 xl:mt-0 flex-1">
                                    <textarea name="comments" class="editor">
                                        {{ $appointment->comments }}
                                    </textarea>
                                    <div class="form-help text-right">Maximum character 0/2000</div>
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

                <div class="flex justify-end flex-col md:flex-row gap-2 mt-5">
                    <button type="submit" class="btn py-3 btn-primary w-full md:w-52">Updated</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection