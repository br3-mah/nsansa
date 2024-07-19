@hasrole('counselor')
<style>
    .file-input-container {
        position: relative;
        overflow: hidden;
        display: inline-block;
    }

    .file-input {
        position: absolute;
        left: 0;
        top: 0;
        opacity: 0;
        cursor: pointer;
        width: 100%;
        height: 100%;
    }

    .file-input-button-1, .file-input-button-2, .file-input-button-3, .file-input-button-4 {
        padding: 10px 15px;
        background-color: #007BFF;
        color: white;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }
</style>
<div class="intro-x px-6 w-full mb-2">
    <div class="py-4">
        <h4 class="text-lg font-extrabold mr-auto flex space-x-6 py-autox">
            Your profile has not been approved yet.
        </h4>
        
        <p class="py-2">Please wait while we review your account</p>

        @if (App\Models\User::hasNotUploaded())
        <div class="pulse-effect w-full bg-primary py-4 flex space-x-2 p-2 rounded-lg text-white">
            <span>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-info-circle-fill" viewBox="0 0 16 16">
                    <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
                    </svg>
            </span>
            &nbsp;&nbsp;
            <span>
                Make sure to upload all neccessary qualification documents.
            </span>
        </div>
        @else
        <div class="pulse-effect w-full bg-primary py-4 flex space-x-2 p-2 rounded-lg text-white">
            <span>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-info-circle-fill" viewBox="0 0 16 16">
                    <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
                    </svg>
            </span>
            &nbsp;&nbsp;
            <span>
                Your documents are being processed.
            </span>
        </div>
        @endif
    </div>

    {{-- @dd (App\Models\User::hasNotUploaded()) --}}
    @if (App\Models\User::hasNotUploaded())
    <div class="lg:flex gap-2">
        <div class="box w-full lg:mb-0 mb-2 lg:pb-4 lg:w-1/2 p-4" style="padding:6%; background-image:url('https://img.freepik.com/premium-vector/certificate-documents-award-verified-icon-illustration_515653-418.jpg?w=2000'); background-size:cover; background-color:#9374AD;">

        </div>
        <div class="lg:w-1/2 lg:px-2 sm:px-2">
            <form action="{{ route('user.files') }}" method="POST" enctype="multipart/form-data" class="w-full">
                @csrf
                <div class="py-2 gap-2 h-20" style="height: 40vh">
                    <div class="file-input-container">
                        <input type="file" class="file-input" name="nrc_doc" id="nrc_doc">
                        <button class="file-input-button-1" type="button">NRC Document</button>
                    </div> 
                    <div class="file-input-container">
                        <input type="file" class="file-input" name="cv_doc" id="cv_doc">
                        <button class="file-input-button-2" type="button">C.V Document</button>
                    </div> 
                    {{-- <div class="file-input-container">
                        <input type="file" class="file-input" name="license_doc" id="license_doc">
                        <button class="file-input-button-3" type="button">License Document</button>
                    </div>  --}}
                    <div class="file-input-container">
                        <input type="file" class="file-input" name="cert_doc" id="cert_doc">
                        <button class="file-input-button-4" type="button">License or Certificate Document</button>
                    </div>  
                </div>

                <div class="mt-4">
                    <button type="submit" class="btn btn-sm btn-warning">Submit Files</button>
                </div>
            </form>
        </div>
    </div>
    @endif

</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function() {
    $('#nrc_doc').on('change', function() {
        var fileName = $(this).val().split('\\').pop();
        $('.file-input-button-1').text('Done');
        // $('.file-input-button-1').b
    });

    $('#cv_doc').on('change', function() {
        var fileName = $(this).val().split('\\').pop();
        $('.file-input-button-2').text('Done');
    });

    $('#cert_doc').on('change', function() {
        var fileName = $(this).val().split('\\').pop();
        $('.file-input-button-4').text('Done');
    });

    $('#license_doc').on('change', function() {
        var fileName = $(this).val().split('\\').pop();
        $('.file-input-button-3').text('Done');
    });
});
</script>
@endhasrole