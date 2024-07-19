@hasrole('counselor')
<div class="intro-x px-6 w-full mb-2">
    <div class="py-4">
        <h4 class="text-lg font-extrabold mr-auto flex space-x-6 py-autox">
            No Patients Assigned to You
        </h4>
        
        <p class="py-2">Make Online and Live Consultation Easily with Nsansa Wellness</p>

        <div class="pulse-effect w-full bg-warning py-4 flex space-x-2 p-2 rounded-lg text-white">
            <span>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-info-circle-fill" viewBox="0 0 16 16">
                    <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
                    </svg>
            </span>
            &nbsp;&nbsp;
            <span>
                You will recieve an email once a patient is assigned to you.
            </span>
        </div>
    </div>
    <div class="lg:flex gap-2">
        <div class="box w-full lg:mb-0 mb-2 lg:pb-4 lg:w-1/2 p-4" style="padding:6%; background-image:url('{{ asset("/public/dist/memes/no-patients.jpg") }}'); background-size:cover; background-color:#9374AD;">

        </div>
        <div class="lg:w-1/2 lg:px-2 sm:px-2">
            <div class="w-full">
                <div class="hover:shadow-lg flex box w-full py-8 p-3 lg:m-3 text-white" style="background-color:#9374AD">
                    <span class="mr-2">
                        <img width="30px" src="https://cdn.iconscout.com/icon/free/png-256/ecosystem-2871958-2383613.png">
                    </span>
                    <span>
                        A Complete mental health ecosystem
                        <br>
                        <small>
                            Earn ZMW 3000 as an online therapist
                        </small>
                    </span>
                    <i data-lucide="chevron-right"></i>
                </div>
                <div class="box flex mt-2 py-8 p-3 m-3 text-white" style="background-color:#22A89C">
                    <span class="mr-2">
                        <img width="30px" class="rounded-full" src="https://cdn.iconscout.com/icon/premium/png-256-thumb/files-1433950-1211984.png?f=avif">
                    </span>
                    <span>
                        Patient Record Management
                        <br>
                        <small>
                            Manage your patient medical information
                        </small>
                    </span>
                    <i data-lucide="chevron-right"></i>
                </div>
                <div class="box flex mt-2 py-8 p-3 m-3" style="background-color:#e9f7ff">
                    <span class="mr-2">
                        <img width="30px" src="https://cdn.iconscout.com/icon/premium/png-256-thumb/activity-4-185786.png?f=avif">
                    </span>
                    <span>
                        Assign Homework Activities and Actions
                        <br>
                        <small>
                            Create and assign homework activities for your patients.s
                        </small>
                    </span>
                    <i data-lucide="chevron-right"></i>
                </div>
            </div>
        </div>
    </div>
</div>
@endhasrole