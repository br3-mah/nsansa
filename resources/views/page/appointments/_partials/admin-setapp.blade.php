@forelse ($adminapps as $appointment)
                    
                        @if (!empty($adminapps->toArray()))
                        <div class="items-center flex transition rounded-md p-2 duration-300 ease-in-out hover:bg-slate-100 dark:hover:bg-darkmode-400">
                            <div class="event p-3 -mx-3 flex items-center">
                                {{-- @if($appointment->status !== 0)
                                <div class="w-2 h-2 bg-pending rounded-full"></div>
                                @endif --}}
                                <a target="_blank" href="{{ route('appointment.show', ['id' => $appointment->id ]) }}">
                                    <div class="pr-10">
                                        <div class="event__title">
                                            {{ $appointment->title }}
                                            @if($appointment->status == 0)
                                            (<span class="text-danger">Cancelled</span>)
                                            @endif
                                        </div>
                                    
                                        <small class="text-slate-500 text-xs mt-0.5"> 
                                            {{ $appointment->start_date }} 
                                            <span class="mx-1">•</span>{{ $appointment->start_time ?? '' }}
                                        </small>
                                        {{-- <a title="view" href="{{ route('appointment.activate', ['id' => $appointment->id ]) }}" class="flex items-center absolute top-0 bottom-0 my-auto right-0" href=""> <i data-lucide="eye" class="w-4 h-4 text-slate-500"></i> </a> --}}
                                    </div>
                                </a>
                            </div>
                            {{-- <a class="flex items-center absolute top-0 bottom-0 right-2" href=""> <i data-lucide="edit" class="w-4 h-4 text-slate-500"></i> </a> --}}
                            
                            <div class="flex items-center space-x-3 justify-end">
                                {{-- @if($appointment->status == 0)
                                <a title="Reactivate" href="{{ route('appointment.activate', ['id' => $appointment->id ]) }}" class="flex zoom-in tooltip items-center absolute top-0 bottom-0 my-auto right-0" href=""> <i data-lucide="redo" class="w-4 h-4 text-slate-500"></i> </a>
                                @else
                                <a title="Cancel"  href="{{ route('appointment.deactivate', ['id' => $appointment->id ]) }}" class="flex zoom-in tooltip items-center absolute top-0 bottom-0 my-auto right-0" href=""> 
                                    <i data-lucide="x" class="w-4 h-4 text-slate-500"></i> 
                                </a>
                                @endif --}}
                                @if($appointment->status !== 0)
                                    <a title="Delete Permanently"  href="{{ route('appointment.destroy', ['id' => $appointment->id ]) }}" class="tooltip btn btn-secondary text-white">
                                        <i data-lucide="trash" class="w-4 h-4 text-danger"></i> 
                                    </a>
                                    <a title="Edit Appointment" href="{{ route('appointment.edit', ['id' => $appointment->id ]) }}" class="tooltip btn mx-1">
                                        <i data-lucide="edit-2" class="w-4 h-4 text-green-500"></i> 
                                    </a>
                                    @if($appointment->guests !== null)
                                    <a href="/therapy-session-appointment/{{ auth()->user()->id }}/{{ $appointment->guests->first()->chat_id ?? 0 }}/sender/patient/{{ $appointment->video_link }}" title="Join Video Call" class="tooltip btn btn-danger text-white">
                                        <i data-lucide="video" class="w-4 h-4 text-white"></i> 
                                    </a>
                                    @endif
                                @endif
                            </div>
                        </div>
                        @endif
                    @empty
                    <div class="text-slate-500 p-3 text-center hidden" id="calendar-no-events">No Appointments Made</div>
                    @endforelse