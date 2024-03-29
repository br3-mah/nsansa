<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <title>Nsansa Wellness | Video Session</title>
      <link href="https://fonts.googleapis.com/css?family=DM+Sans:400,500,700&display=swap" rel="stylesheet"/>
      <link rel="stylesheet" href="{{ asset('public/dist/css/meet.css')}}" />     
      <script>
        // Hide the preloader when the page finishes loading
        window.addEventListener('load', function() {
            var preloader = document.querySelector('.preloader');
            preloader.style.display = 'none';
        });
      </script>
  </head>
  
  <body>
    @include('page.chat._partials.phone-appointment-join-card')
    @include('page.chat._partials.phone-end-call')
    <!-- Preloader HTML -->
    <div class="preloader">
        <h3>Getting Started</h3>
        <div class="spinner">
            <div class="cube1"></div>
            <div class="cube2"></div>
        </div>
    </div>
    <div class="app-container">
      <button class="mode-switch">
        <img alt="Nsansa wellness" width="110%" class="w-6 rounded-full" src="{{ asset('uploads/sites/304/2022/06/logos.svg') }}">
        <!-- moon icon -->
        <svg
          class="moon"
          fill="none"
          stroke="#ffffff"
          stroke-linecap="round"
          stroke-linejoin="round"
          stroke-width="2"
          class="feather feather-moon"
          viewBox="0 0 24 24"
        >
          <defs />
          <path d="M21 12.79A9 9 0 1111.21 3 7 7 0 0021 12.79z" />
        </svg>
        <!-- moon icon -->
      </button>
      <div class="left-side">
        <span class="rec-timer">
          <div style="color:#ff5100; margin-right:2%" id="recorder-timer"></div>
        </span>
      </div>


      <div class="app-main">    
        <div class="video-call-wrapper" style="position: relative">
          <!-- Video Participant 3 -->
          <div style="width:100%; height:100%" class="remote-screen video-participant">
            <div class="participant-action">
              {{-- <button class="btn-mute"></button>
              <button class="btn-camera"></button> --}}
            </div>
            @hasrole('patient')
            <a href="#" class="name-tag">Therapist</a>
            @else
            <a href="#" class="name-tag">Patient</a>
            @endhasrole
            <video poster="data:image/png;base64,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" height="100%" width="100%" style=" object-fit: cover; background-position: cover; background-size:cover" height="100%" width="100%"height="100%" width="100%" style=" object-fit: cover; background-position: cover; background-size:cover" class="img-responsive" id='remoteVideo'>
                Your browser does not support the video tag.
            </video>
          </div>

          <div id="local-screen" style="bottom:0; right:0; position:absolute; width:20%; height:20%; float:left" class="video-participant">
            <a href="#" class="name-tag">You</a>
            <video  muted="muted" poster="https://api-private.atlassian.com/users/5e04ca154006ea0ea3273e3e/avatar?initials=public" height="100%" width="100%" style=" object-fit: cover; background-position: cover; background-size:cover" class="img-responsive" id='localVideo'>
                Your browser does not support the video tag.
            </video>
            <p class="text"></p>
          </div>

        </div>

        {{-- <span style="color: #0c709e; text-align:center" id="session-timer"></span> --}}
        <div class="video-call-actions">
          @hasanyrole(['admin', 'counselor', 'therapist'])
          <button title="Download audio" style="background:#002f44" class="video-action-button" id="downloadButton"> 
            <svg xmlns="http://www.w3.org/2000/svg" width="27" height="27" fill="currentColor" class="bi bi-download" viewBox="0 0 16 16">
              <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/>
              <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z"/>
            </svg>
          </button>
          <button title="View recordings" class="video-action-button"> 
            <svg xmlns="http://www.w3.org/2000/svg" width="27" height="27" fill="currentColor" class="bi bi-soundwave" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M8.5 2a.5.5 0 0 1 .5.5v11a.5.5 0 0 1-1 0v-11a.5.5 0 0 1 .5-.5zm-2 2a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zm4 0a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zm-6 1.5A.5.5 0 0 1 5 6v4a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm8 0a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm-10 1A.5.5 0 0 1 3 7v2a.5.5 0 0 1-1 0V7a.5.5 0 0 1 .5-.5zm12 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0V7a.5.5 0 0 1 .5-.5z"/>
            </svg>
          </button>
          <button onclick="startRecording()" id="start-btn" class="video-action-button start-recorder" title="Start Recording"></button>
          <button style="background-color:red" id="stop-btn" class="video-action-button stop-recorder" title="Stop Recording"></button>
          @endhasanyrole
          {{-- <button style="color:blueviolet" onclick="toggleAudioMute()" title="Mute / Unmute" class="audio-mic video-action-button mic"></button> --}}
          {{-- <button title="Hide / Unhide" onclick="toggleVideo()" class="video-cam video-action-button camera"></button> --}}
          {{-- <button class="video-action-button maximize"></button> --}}
          <button onclick="endCall()" title="End Call" style="background-color: #ff0000; color:#fff" class="video-action-button endcall"></button>
          <button title="Meeting Notes" onclick="open_notes()" class="video-action-button magnifier">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M15.5 3H5a2 2 0 0 0-2 2v14c0 1.1.9 2 2 2h14a2 2 0 0 0 2-2V8.5L15.5 3Z"></path><path d="M15 3v6h6"></path></svg>
          </button>
          <button title="Chat" onclick="open_chat()" class="video-action-button magnifier">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path>
            </svg>
          </button>
        </div>
      </div>


      <!-- Right Side -->
      <div id="right-side-toolbar" class="right-side">
        <button onclick="close_toolbar()" class="btn-close-right">
          <!-- Close Icon -->
          Close
          <svg
            xmlns="http://www.w3.org/2000/svg"
            width="24"
            height="24"
            fill="none"
            stroke="currentColor"
            stroke-linecap="round"
            stroke-linejoin="round"
            stroke-width="2"
            class="feather feather-x-circle"
            viewBox="0 0 24 24"
          >
            <defs></defs>
            <circle cx="12" cy="12" r="10"></circle>
            <path d="M15 9l-6 6M9 9l6 6"></path>
          </svg>
          <!-- Close Icon -->
        </button>

        {{-- Chat --}}
        <div id="right-side-chat" class="convoBody chat-container"> 
          <div class="chat-header">
            <button class="chat-header-button">Live Chat</button>
          </div>
          {{-- convoBody message_thread  --}}
          <div id="message_thread" class="chat-area">
          </div>
          <div class="chat-typing-area-wrapper">
            <div class="chat-typing-area">
              <input
                id="message_textbox"
                type="text"
                placeholder="Type your message..."
                class="chat-input"
              />
              <button onclick="send()" class="send-button">
                <!-- Send icon -->
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  fill="none"
                  stroke="currentColor"
                  stroke-width="2"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  class="feather feather-send"
                  viewBox="0 0 24 24"
                >
                  <path d="M22 2L11 13M22 2l-7 20-4-9-9-4 20-7z" />
                </svg>
                <!-- Send icon -->
              </button>
            </div>
          </div>
        </div> 

        <div id="right-side-notes" class="convoBody chat-container"> 
          <div class="chat-header justify-content-between">
            <button class="chat-header-button">Session Notes</button>
            <span id="notes_status"></span>
            
            <button class="btn">Save</button>
          </div>
          {{-- convoBody message_thread  --}}
          <div id="message_thread" class="chat-area">
            <textarea row="10" cols="70" style="height: 30px"  name="notes" onchange="save_notes()" id="taking-notes-textarea" class="chat-area editor">
              {{ $data['notes'] }}
            </textarea>
          </div> 
        {{-- Paticipants --}}
        <div class="participants">
          <!-- Participant pic 1 -->
          <div class="participant profile-picture">
            {{-- <img
              src="https://images.unsplash.com/photo-1576110397661-64a019d88a98?ixlib=rb-1.2.1&auto=format&fit=crop&w=1234&q=80"
              alt=""
            /> --}}
          </div>
          <!-- Participant pic 2 -->
          <div class="participant profile-picture">
            {{-- <img
              src="https://images.unsplash.com/photo-1566821582776-92b13ab46bb4?ixlib=rb-1.2.1&auto=format&fit=crop&w=900&q=60"
              alt=""
            /> --}}
          </div>
          <!-- Participant pic 3 -->
          <div class="participant profile-picture">
            {{-- <img
              src="https://images.unsplash.com/photo-1600207438283-a5de6d9df13e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1234&q=80"
              alt=""
            /> --}}
          </div>
          <!-- Participant pic 4 -->
          <div class="participant profile-picture">
            {{-- <img
              src="https://images.unsplash.com/photo-1581824283135-0666cf353f35?ixlib=rb-1.2.1&auto=format&fit=crop&w=1276&q=80"
              alt=""
            /> --}}
          </div>
          <div class="participant-more">2+</div>
        </div>
      </div>
      <button title="Expand" class="expand-btn">
        <!-- expand icon -->
        {{-- <svg
          xmlns="http://www.w3.org/2000/svg"
          width="24"
          height="24"
          viewBox="0 0 24 24"
          fill="none"
          stroke="currentColor"
          stroke-width="2"
          stroke-linecap="round"
          stroke-linejoin="round"
          class="feather feather-message-circle"
        >
          <path
            d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"
          />
        </svg> --}}
        <!-- expand icon -->
      </button>
    </div>
  </body>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script>
    $(document).ready(function(){
      var info = @json($data);
      $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': info['token']
          }
      });
    });
  </script>  
  <script src="https://unpkg.com/peerjs@1.4.7/dist/peerjs.min.js"></script>
  <script src="{{ asset('/public/js/peerjs.min.js') }}"></script>
  @include('page.chat._partials.phone-appointment-js')
  @include('page.chat._partials.pchat-js')
  {{-- <script src="{{ asset('dist/js/ckeditor-classic.js') }}"></script>
  <script>
        var editor = CKEDITOR.replace( 'notes ', {});
        // editor is object of your CKEDITOR
        editor.on('change',function(){
            console.log("test");
        });
  </script> --}}
</html>