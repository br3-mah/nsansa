{{-- @dd(Request::route()->uri) --}}
{{-- @if(Request::route()->uri == 'counseling-center') --}}
<div id="onChatMenu" class="top-bar-boxed h-[70px] md:h-[65px] z-[51] border-b border-white/[0.08] mt-12 md:mt-0 -mx-3 sm:-mx-8 md:-mx-0 px-3 md:border-b-0 relative md:fixed md:inset-x-0 md:top-0 sm:px-8 md:px-10 md:pt-10 md:bg-gradient-to-b md:from-slate-100 md:to-transparent dark:md:from-darkmode-700">
    <div class="h-full flex items-center">
        <!-- BEGIN: Logo -->
        <a href="{{ route('home')}}" class="logo -intro-x hidden md:flex xl:w-[180px] block">
            <img style="border-radius: 100%" src="{{ asset('uploads/sites/304/2022/06/logos.svg') }}" class="logo__image w-6" alt="" loading="lazy" />
            {{-- <img alt="Midone - HTML Admin Template" class="logo__image w-6" src="dist/images/logo.svg"> --}}
            <span class="logo__text text-white text-lg ml-3"> Nsansa Wellness </span> 
        </a>
        <!-- END: Logo -->
        <!-- BEGIN: Breadcrumb -->
        <nav aria-label="breadcrumb" class="-intro-x h-[45px] mr-auto">
            <ol class="breadcrumb breadcrumb-light">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">Nsansa Wellness</a></li>
                <li class="capitalize breadcrumb-item active" aria-current="page">
                    {{ 
                        str_replace(['-', '{', '}', '/'], [' ', '', '', ' > '], Request::route()->uri)
                    }}
                </li>
            </ol>
        </nav>
        <!-- END: Breadcrumb -->
        <!-- BEGIN: Search -->
        <div class="intro-x relative mr-3 sm:mr-6">
            {{-- <div class="search hidden sm:block">
                <input type="text" class="search__input form-control border-transparent" placeholder="Search...">
                <i data-lucide="search" class="search__icon dark:text-slate-500"></i> 
            </div> --}}
            <a class="notification notification--light sm:hidden" href=""> <i data-lucide="search" class="notification__icon dark:text-slate-500"></i> </a>
            <div class="search-result">
                <div class="search-result__content">
                    <div class="search-result__content__title">Pages</div>
                    <div class="mb-5">
                        <a href="" class="flex items-center">
                            <div class="w-8 h-8 bg-success/20 dark:bg-success/10 text-success flex items-center justify-center rounded-full"> <i class="w-4 h-4" data-lucide="inbox"></i> </div>
                            <div class="ml-3">Mail Settings</div>
                        </a>
                        <a href="" class="flex items-center mt-2">
                            <div class="w-8 h-8 bg-pending/10 text-pending flex items-center justify-center rounded-full"> <i class="w-4 h-4" data-lucide="users"></i> </div>
                            <div class="ml-3">Users & Permissions</div>
                        </a>
                        <a href="" class="flex items-center mt-2">
                            <div class="w-8 h-8 bg-primary/10 dark:bg-primary/20 text-primary/80 flex items-center justify-center rounded-full"> <i class="w-4 h-4" data-lucide="credit-card"></i> </div>
                            <div class="ml-3">Transactions Report</div>
                        </a>
                    </div>
                    <div class="search-result__content__title">Users</div>
                    <div class="mb-5">
                        <a href="" class="flex items-center mt-2">
                            <div class="w-8 h-8 image-fit">
                                <img alt="Midone - HTML Admin Template" class="rounded-full" src="dist/images/profile-1.jpg">
                            </div>
                            <div class="ml-3">{{ Auth::User()->lname }}</div>
                            <div class="ml-auto w-48 truncate text-slate-500 text-xs text-right">alpacino@left4code.com</div>
                        </a>
                        <a href="" class="flex items-center mt-2">
                            <div class="w-8 h-8 image-fit">
                                <img alt="Midone - HTML Admin Template" class="rounded-full" src="dist/images/profile-4.jpg">
                            </div>
                            <div class="ml-3">Robert De Niro</div>
                            <div class="ml-auto w-48 truncate text-slate-500 text-xs text-right">robertdeniro@left4code.com</div>
                        </a>
                        <a href="" class="flex items-center mt-2">
                            <div class="w-8 h-8 image-fit">
                                <img alt="Midone - HTML Admin Template" class="rounded-full" src="dist/images/profile-4.jpg">
                            </div>
                            <div class="ml-3">Kevin Spacey</div>
                            <div class="ml-auto w-48 truncate text-slate-500 text-xs text-right">kevinspacey@left4code.com</div>
                        </a>
                        <a href="" class="flex items-center mt-2">
                            <div class="w-8 h-8 image-fit">
                                <img alt="Midone - HTML Admin Template" class="rounded-full" src="dist/images/profile-4.jpg">
                            </div>
                            <div class="ml-3">Kevin Spacey</div>
                            <div class="ml-auto w-48 truncate text-slate-500 text-xs text-right">kevinspacey@left4code.com</div>
                        </a>
                    </div>
                    <div class="search-result__content__title">Products</div>
                    <a href="" class="flex items-center mt-2">
                        <div class="w-8 h-8 image-fit">
                            <img alt="Midone - HTML Admin Template" class="rounded-full" src="dist/images/preview-6.jpg">
                        </div>
                        <div class="ml-3">Samsung Q90 QLED TV</div>
                        <div class="ml-auto w-48 truncate text-slate-500 text-xs text-right">Electronic</div>
                    </a>
                    <a href="" class="flex items-center mt-2">
                        <div class="w-8 h-8 image-fit">
                            <img alt="Midone - HTML Admin Template" class="rounded-full" src="dist/images/preview-14.jpg">
                        </div>
                        <div class="ml-3">Oppo Find X2 Pro</div>
                        <div class="ml-auto w-48 truncate text-slate-500 text-xs text-right">Smartphone &amp; Tablet</div>
                    </a>
                    <a href="" class="flex items-center mt-2">
                        <div class="w-8 h-8 image-fit">
                            <img alt="Midone - HTML Admin Template" class="rounded-full" src="dist/images/preview-13.jpg">
                        </div>
                        <div class="ml-3">Sony A7 III</div>
                        <div class="ml-auto w-48 truncate text-slate-500 text-xs text-right">Photography</div>
                    </a>
                    <a href="" class="flex items-center mt-2">
                        <div class="w-8 h-8 image-fit">
                            <img alt="Midone - HTML Admin Template" class="rounded-full" src="dist/images/preview-2.jpg">
                        </div>
                        <div class="ml-3">Sony A7 III</div>
                        <div class="ml-auto w-48 truncate text-slate-500 text-xs text-right">Photography</div>
                    </a>
                </div>
            </div>
        </div>
        <!-- END: Search -->
        <a href="#" onclick="startYourTour()" class="-intro-x md:flex xl:w-[180px] flex items-center">
            <i data-lucide="help-circle" class="notification__icon text-slate-400"></i> 
            <span class="text-white text-sm ml-3 text-slate-400"> Quick tour </span> 
        </a>
        <!-- BEGIN: Notifications -->
        <div class="intro-x dropdown mr-4 sm:mr-6">
            
            <div class="dropdown-toggle notification notification--bullet cursor-pointer" role="button" aria-expanded="false" data-tw-toggle="dropdown"> 
                <i data-lucide="bell" class="notification__icon dark:text-slate-500"></i> 
            </div>
            <div class="notification-content pt-2 dropdown-menu">
                <div class="notification-content__box dropdown-content">
                    <div class="notification-content__title">Notifications</div>
                    @isset($notifications)
                        @php
                            $counter = 1;
                        @endphp
                        @forelse ($notifications as $note)
                        @if ($counter < 6)
                        <div class="cursor-pointer relative flex items-center py-2">
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
        
                            @endswitch                                        {{-- <div class="w-3 h-3 bg-success absolute right-0 bottom-0 rounded-full border-2 border-white"></div> --}}
                            </div>
                            <div class="ml-2 overflow-hidden">
                                <div class="flex items-center">
                                    <a href="javascript:;" class="font-medium truncate mr-5">{{ $note->data['sender'] }}</a> 
                                    <div class="text-xs text-slate-400 ml-auto whitespace-nowrap">{{ $note->created_at->toFormattedDateString() }}</div>
                                </div>
                                <div class="w-full truncate text-slate-500 mt-0.5">{{ $note->data['message'] }}</div>
                            </div>
                        </div>
                        @endif
                        @php
                            $counter++;
                        @endphp
                        @empty
                        @endforelse
                        <div class="mt-4 border-top border text-center w-full items-center justify-content-center justify-center">
                            <a href="{{ route('notification') }}">View more</a>
                        </div>
                    @endisset
                </div>
            </div>
        </div>
        <!-- END: Notifications -->

        <!-- BEGIN: Account Menu -->
        <div class="intro-x dropdown w-8 h-8">
            <div class="dropdown-toggle w-8 h-8 rounded-full bg-white overflow-hidden shadow-lg image-fit zoom-in scale-110" role="button" aria-expanded="false" data-tw-toggle="dropdown">
                @if(Auth::user()->image_path == null)
                <div class="border border-white text-center py-2 px-1 text-gray-400 font-extrabold text-xs bg-white" title="{{ Auth::user()->fname.' '.Auth::user()->lname  }}">
                    <small>{{ Auth::user()->fname[0].' '.Auth::user()->lname[0] }}</small>
                </div>
                @else
                <img alt="Profile" src="{{ asset('public/storage/'.Auth::user()->image_path) }}">
                @endif
            </div>
            <div class="dropdown-menu w-56"
            >
                <ul class="dropdown-content bg-primary/80 before:block before:absolute before:bg-black before:inset-0 before:rounded-md before:z-[-1] text-white">
                    <li class="p-2">
                        <div class="font-medium">{{ Auth::User()->fname.' '.Auth::User()->lname }}</div>
                        @hasanyrole(['admin', 'administrator', 'manager', 'staff'])
                        <div class="capitalize flex justify-start space-x-4 text-xs text-white/60 mt-0.5 dark:text-slate-500">
                            <i class="w-4 w-4" data-lucide="shield"></i>
                            <span class="mt-1 ml-1">{{ preg_replace('/[^A-Za-z0-9. -]/', '',  Auth::user()->roles->pluck('name'))}}</span>
                        </div>
                        @endhasanyrole
                        @hasanyrole(['patient', 'user', 'users'])
                        <div class="capitalize flex space-xart text-xs text-white/60 mt-0.5 dark:text-slate-500">
                            <i class="w-4 w-4" data-lucide="user"></i>
                            <span class="mt-1 ml-1">{{ preg_replace('/[^A-Za-z0-9. -]/', '',  Auth::user()->roles->pluck('name'))}}</span>
                        </div>
                        @endhasanyrole
                        @hasanyrole(['counselor', 'therapist'])
                        <div class="capitalize flex space-x-2 justify-start text-xs text-white/60 mt-0.5 dark:text-slate-500">
                            <i class="w-4 w-4" data-lucide="verified"></i>
                            <span class="mt-1 ml-1">{{ preg_replace('/[^A-Za-z0-9. -]/', '',  Auth::user()->roles->pluck('name'))}}</span>
                        </div>
                        @endhasanyrole
                        <div class="capitalize flex justify-start space-x-4 text-xs text-white/60 mt-0.5 dark:text-slate-500">
                            <i class="w-4 w-4" data-lucide="at-sign"></i>
                            <span class="mt-1 ml-1">{{ Auth::user()->email }}</span>
                        </div>
                    </li>
                    <li>
                        <hr class="dropdown-divider border-white/[0.08]">
                    </li>

                    <li>
                        <a href="{{ route('profile') }}" class="dropdown-item hover:bg-white/5"> <i data-lucide="user" class="w-4 h-4 mr-2"></i>Profile</a>
                    </li>
                    
                    @hasanyrole(['counselor', 'therapist', 'admin', 'administrator'])
                    <li>
                        <a href="{{ route('tickets') }}" class="dropdown-item hover:bg-white/5"> <i data-lucide="ticket" class="w-4 h-4 mr-2"></i>Sold Tickets</a>
                    </li>
                    <li>
                        <a href="{{ route('settings.index') }}" class="dropdown-item hover:bg-white/5"> <i data-lucide="wrench" class="w-4 h-4 mr-2"></i>Settings</a>
                    </li>
                    @else
                    <li>
                        <a href="{{ route('settings.index') }}" class="dropdown-item hover:bg-white/5"> <i data-lucide="wrench" class="w-4 h-4 mr-2"></i>Preferences</a>
                    </li>
                    @endhasanyrole

                    @can('users.create')
                    <li>
                        <a href="{{ route('users.create')}}" class="dropdown-item hover:bg-white/5"> <i data-lucide="edit" class="w-4 h-4 mr-2"></i> Add an Account </a>
                    </li>
                    @endcan
                    <li>
                        <a disabled href="{{ route('password.request') }}" class="dropdown-item hover:bg-white/5"> <i data-lucide="lock" class="w-4 h-4 mr-2"></i> Reset Password </a>
                    </li>
                    <li>
                        <a href="" class="dropdown-item hover:bg-white/5"> <i data-lucide="help-circle" class="w-4 h-4 mr-2"></i> Help </a>
                    </li>
                    <li>
                        <hr class="dropdown-divider border-white/[0.08]">
                    </li>
                    <li>
                        <a  href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                      document.getElementById('logout-form').submit();" class="dropdown-item hover:bg-white/5"> <i data-lucide="toggle-right" class="w-4 h-4 mr-2"></i> Logout </a>
                         <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </li>
                </ul>
            </div>
        </div>
        <!-- END: Account Menu -->
    </div>
</div>
        
        <!-- BEGIN: Notifications -->
        
        <!-- END: Account Menu -->
    </div>
</div>