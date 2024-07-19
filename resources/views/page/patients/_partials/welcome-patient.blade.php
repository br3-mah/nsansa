@hasrole('patient')
    <div class="intro-x px-6">
        <div class="my-6">
            <h1 class="text-xl font-extrabold mr-auto flex space-x-6 py-autox">
                <span>Get Help. Get Better</span>
            </h1>
            <div class="w-full text-secondary py-3">Get the Guidance you need from top Experts right away.</div>
            <div class="pulse-effect w-full bg-primary flex space-x-2 p-2 py-4 rounded-lg text-white">
                <span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-info-circle-fill" viewBox="0 0 16 16">
                        <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
                        </svg>
                </span>
                &nbsp;&nbsp;
                <span>
                    Please wait while we assign you to a counselor.
                </span>
            </div>
        </div>
        <div class="lg:flex gap-2">
            <div class="lg:w-1/2 lg:px-2 sm:px-2">
                <div class="w-full">
                    <div class="flex box w-full py-6 p-3 lg:m-3 text-white" style="background-color:#9374AD">
                        <span class="mr-2">
                            <img width="30px" src="https://cdn.iconscout.com/icon/free/png-256/chatting-418-530377.png?f=avif">
                        </span>
                        <span>
                            <span class="font-bold">Online Chat Sessions</span>
                            <br>
                            <small>
                                Chat anonymously with an expert 
                            </small>
                        </span>
                        {{-- <i data-lucide="chevron-right"></i> --}}
                    </div>
                    <div class="box flex mt-2 py-6 p-3 m-3 text-white" style="background-color:#AE04B4">
                        <span class="mr-2">
                            <img width="30px" class="rounded-full" src="https://cdn.iconscout.com/icon/premium/png-256-thumb/video-call-103-772229.png?f=avif">
                        </span>
                        <span>
                            <span class="font-bold">Voice and Video Calls</span>
                            <br>
                            <small>
                                Speak to an expert or get on a call with them
                            </small>
                        </span>
                        {{-- <i data-lucide="chevron-right"></i> --}}
                    </div>
                    <div class="box flex mt-2 py-6 p-3 m-3" style="background-color:#05C3E5">
                        <span class="mr-2">
                            <img width="30px" src="https://cdn.iconscout.com/icon/premium/png-256-thumb/doctor-615-1178523.png?f=avif">
                        </span>
                        <span>
                            <span class="font-bold">Face to Face Sessions</span>
                            <br>    
                            <small>
                                Connect to 1-on-1 in-person with an expert.
                            </small>
                        </span>
                        {{-- <i data-lucide="chevron-right"></i> --}}
                    </div>
                </div>
            </div>
            <div class="text-white box w-full lg:mb-0 mb-2 lg:w-1/2 p-4" style="padding:6%; background-image:url('{{ asset("/public/dist/memes/remote.jpg") }}'); background-size:cover; background-color:#9374AD;">

                
                {{-- <h1>Making through life's toughest times. Together.</h1>

                <button class="mt-20 btn btn-warning btn-sm">Take a Quiz</button> --}}
            </div>
        </div>
    </div>
@endhasrole