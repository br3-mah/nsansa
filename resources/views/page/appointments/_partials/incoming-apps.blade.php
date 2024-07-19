@if(!empty($incoming_appointments->toArray()))
                    {{-- @dd($incoming_appointments->toArray()) --}}
                    @forelse ($incoming_appointments as $app)
                    @if($app->appointment != null)
                    <div class="relative items-center flex transition rounded-md p-2">
                        <div class="event p-3 -mx-3 {{  $app->appointment->status == 0 ? 'disabled bg-slate-200 italic' : 'cursor-pointer' }} flex items-center">
                            {{-- @if($app->appointment->status != 0)
                            <div class="w-2 h-2 bg-pending rounded-full mr-3"></div>
                            @endif --}}
                            <a target="_blank" href="{{ route('appointment.show', ['id' => $app->appointment->id ]) }}">
                                <div class="pr-10 text-left items-start">
                                    <div class="event__title">
                                        {{ $app->appointment->title }}
                                        @if($app->appointment->status == 0)
                                        (<span class="text-danger">Cancelled</span>)
                                        @endif
                                    </div>
                                
                                    <div class="text-slate-500 text-xs mt-0.5"> 
                                        <!-- <span class="event__days">2</span>--> 
                                        {{ $app->appointment->start_date }} <span class="mx-1">•</span>{{ $app->appointment->start_time ?? '' }}
                                    </div>
                                    {{-- <a title="view" href="{{ route('appointment.activate', ['id' => $appointment->id ]) }}" class="flex items-center absolute top-0 bottom-0 my-auto right-0" href=""> <i data-lucide="eye" class="w-4 h-4 text-slate-500"></i> </a> --}}
                                </div>
                            </a>
                        </div>                        
                        <div class="flex items-center space-x-3 justify-end">
                            {{-- @if($appointment->status == 0)
                            <a title="Reactivate" href="{{ route('appointment.activate', ['id' => $appointment->id ]) }}" class="flex zoom-in tooltip items-center absolute top-0 bottom-0 my-auto right-0" href=""> <i data-lucide="redo" class="w-4 h-4 text-slate-500"></i> </a>
                            @else
                            <a title="Cancel"  href="{{ route('appointment.deactivate', ['id' => $appointment->id ]) }}" class="flex zoom-in tooltip items-center absolute top-0 bottom-0 my-auto right-0" href=""> 
                                <i data-lucide="x" class="w-4 h-4 text-slate-500"></i> 
                            </a>
                            @endif --}}
                            @if($app->appointment->status == 1)
                            <a title="Delete Permanently"  href="{{ route('appointment.destroy', ['id' => $app->appointment->id ]) }}" class="btn btn-secondary text-white">
                                <i data-lucide="trash" class="w-4 h-4 text-danger"></i> 
                            </a>
                            <a title="Edit" href="{{ route('appointment.edit', ['id' => $app->appointment->id ]) }}" class="btn mx-1">
                                <i data-lucide="edit-2" class="w-4 h-4 text-green-500"></i> 
                            </a>
                            
                                @if($app->appointment->type == 'video')
                                <a href="/therapy-session-appointment/{{ auth()->user()->id }}/{{ $app->chat_id ?? 0 }}/receiver/patient/{{ $app->appointment->video_link }}" title="Join Video Call" class="btn btn-danger text-white fl-right items-end">
                                    <i data-lucide="video" class="w-4 h-4 text-white"></i> 
                                </a>
                                @else
                                <a href="/phone-appointment/{{ auth()->user()->id }}/{{ $app->appointment->guests->first()->chat_id ?? 0 }}/receiver/patient/{{ $app->appointment->video_link }}" title="Join Phone Call" class="tooltip btn btn-success text-white">
                                    <i data-lucide="phone" class="w-4 h-4 text-white"></i> 
                                </a>
                                @endif
                            @else
                            <a href="#" style="background-color: #393b3b" title="Waiting for counselor to accept" class="btn btn-secondary text-white">
                                <i data-lucide="video" class="w-4 h-4 text-white"></i> 
                            </a>
                            @endif
                        </div>
                    </div>
                    @endif
                    @empty
                    <div class="text-slate-500 p-3 text-center hidden" id="calendar-no-events">No Appointments Made</div>
                    
                    @endforelse
                    @else 
                    <div class="items-center justify-center centered" style="text-align: center">
                            {{-- <img class="intro-y mx-auto" width="300" src="https://cdni.iconscout.com/illustration/free/thumb/empty-box-4085812-3385481.png">
                            <h3>No Appointments</h3> --}}
                    </div>
                    @endif