<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Nsansa Wellness | Video Session</title>

    <!-- Add Google Font -->
    <link href="https://fonts.googleapis.com/css?family=DM+Sans:400,500,700&display=swap" rel="stylesheet"/>
    <link rel="stylesheet" href="{{ asset('public/dist/css/meet.css ')}}" />
  </head>

  
  <body>
    <div class="app-container">
      <button class="mode-switch">
        <!-- sun icon -->

        <img alt="Nsansa wellness" width="110%" class="w-6 rounded-full" src="{{ asset('uploads/sites/304/2022/06/logos.svg') }}">
        <!-- sun icon -->

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
        {{-- <div class="navigation">
          <a href="#" class="nav-link icon">
            <!-- Home icon -->
            <svg
              xmlns="http://www.w3.org/2000/svg"
              fill="none"
              stroke="currentColor"
              stroke-width="2"
              stroke-linecap="round"
              stroke-linejoin="round"
              class="feather feather-home"
              viewBox="0 0 24 24"
            >
              <path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z" />
              <path d="M9 22V12h6v10" />
            </svg>
            <!-- Home icon -->
          </a>

          <a href="#" class="nav-link icon">
            <!-- comment icon -->
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="24"
              height="24"
              viewBox="0 0 24 24"
              fill="none"
              stroke="currentColor"
              stroke-width="2"
              stroke-linecap="round"
              stroke-linejoin="round"
              class="feather feather-message-square"
            >
              <path
                d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"
              />
            </svg>
            <!-- comment icon -->
          </a>
          <a href="#" class="nav-link icon">
            <!-- ringing phone icon -->
            <svg
              xmlns="http://www.w3.org/2000/svg"
              fill="none"
              stroke="currentColor"
              stroke-width="2"
              stroke-linecap="round"
              stroke-linejoin="round"
              class="feather feather-phone-call"
              viewBox="0 0 24 24"
            >
              <path
                d="M15.05 5A5 5 0 0119 8.95M15.05 1A9 9 0 0123 8.94m-1 7.98v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07 19.5 19.5 0 01-6-6 19.79 19.79 0 01-3.07-8.67A2 2 0 014.11 2h3a2 2 0 012 1.72 12.84 12.84 0 00.7 2.81 2 2 0 01-.45 2.11L8.09 9.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45 12.84 12.84 0 002.81.7A2 2 0 0122 16.92z"
              />
            </svg>
            <!-- ringing phone icon -->
          </a>
          <a href="#" class="nav-link icon">
            <!-- disk icon -->
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="24"
              height="24"
              viewBox="0 0 24 24"
              fill="none"
              stroke="currentColor"
              stroke-width="2"
              stroke-linecap="round"
              stroke-linejoin="round"
              class="feather feather-hard-drive"
            >
              <line x1="22" y1="12" x2="2" y2="12" />
              <path
                d="M5.45 5.11L2 12v6a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-6l-3.45-6.89A2 2 0 0 0 16.76 4H7.24a2 2 0 0 0-1.79 1.11z"
              />
              <line x1="6" y1="16" x2="6.01" y2="16" />
              <line x1="10" y1="16" x2="10.01" y2="16" />
            </svg>
            <!-- disk icon -->
          </a>
          <a href="#" class="nav-link icon">
            <!-- people icon -->
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="24"
              height="24"
              viewBox="0 0 24 24"
              fill="none"
              stroke="currentColor"
              stroke-width="2"
              stroke-linecap="round"
              stroke-linejoin="round"
              class="feather feather-users"
            >
              <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2" />
              <circle cx="9" cy="7" r="4" />
              <path d="M23 21v-2a4 4 0 0 0-3-3.87" />
              <path d="M16 3.13a4 4 0 0 1 0 7.75" />
            </svg>
            <!-- people icon -->
          </a>
          <a href="#" class="nav-link icon">
            <!-- Folder icon -->
            <svg
              xmlns="http://www.w3.org/2000/svg"
              fill="none"
              stroke="currentColor"
              stroke-width="2"
              stroke-linecap="round"
              stroke-linejoin="round"
              class="feather feather-folder"
              viewBox="0 0 24 24"
            >
              <path
                d="M22 19a2 2 0 01-2 2H4a2 2 0 01-2-2V5a2 2 0 012-2h5l2 3h9a2 2 0 012 2z"
              />
            </svg>
            <!-- Folder icon -->
          </a>
          <a href="#" class="nav-link icon">
            <!-- Setting icon -->
            <svg
              xmlns="http://www.w3.org/2000/svg"
              fill="none"
              stroke="currentColor"
              stroke-width="2"
              stroke-linecap="round"
              stroke-linejoin="round"
              class="feather feather-settings"
              viewBox="0 0 24 24"
            >
              <circle cx="12" cy="12" r="3" />
              <path
                d="M19.4 15a1.65 1.65 0 00.33 1.82l.06.06a2 2 0 010 2.83 2 2 0 01-2.83 0l-.06-.06a1.65 1.65 0 00-1.82-.33 1.65 1.65 0 00-1 1.51V21a2 2 0 01-2 2 2 2 0 01-2-2v-.09A1.65 1.65 0 009 19.4a1.65 1.65 0 00-1.82.33l-.06.06a2 2 0 01-2.83 0 2 2 0 010-2.83l.06-.06a1.65 1.65 0 00.33-1.82 1.65 1.65 0 00-1.51-1H3a2 2 0 01-2-2 2 2 0 012-2h.09A1.65 1.65 0 004.6 9a1.65 1.65 0 00-.33-1.82l-.06-.06a2 2 0 010-2.83 2 2 0 012.83 0l.06.06a1.65 1.65 0 001.82.33H9a1.65 1.65 0 001-1.51V3a2 2 0 012-2 2 2 0 012 2v.09a1.65 1.65 0 001 1.51 1.65 1.65 0 001.82-.33l.06-.06a2 2 0 012.83 0 2 2 0 010 2.83l-.06.06a1.65 1.65 0 00-.33 1.82V9a1.65 1.65 0 001.51 1H21a2 2 0 012 2 2 2 0 01-2 2h-.09a1.65 1.65 0 00-1.51 1z"
              />
            </svg>
            <!-- Setting icon -->
          </a>
        </div> --}}
      </div>
      <div class="app-main">            
            <div class="join-card">
              <input type="hidden" class="dont-show" name="localPeerId" id="localPeerId" readonly>
              <input type="hidden" class="dont-show" value="{{ $data['peer_id']}}" name="remotePeerId" id="remotePeerId">
              {{-- <input type="text" name="remotePeerId" id="remotePeerId"> --}}
              <button onclick="join()" class="button" id="btn-call">Join Session</button>
            </div>

        
            @hasrole('counselor')
            <a href='' id="downloadButton" style="color:white; font-size:13px;" class="button"> Download </a>
            @endhasrole
        <div class="video-call-wrapper" style="position: relative">
          <!-- Video Participant 1 -->
        

          <!-- Video Participant 2 -->
          {{-- <div class="remote-screen video-participant">
            <div class="participant-action">
              <button class="btn-mute"></button>
              <button class="btn-camera"></button>
            </div>
            <a href="#" class="name-tag">Emmy Lou</a>
            <img
              src="https://images.unsplash.com/photo-1500917293891-ef795e70e1f6?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1650&q=80"
              alt="participant"
            />
          </div> --}}
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
            <video height="100%" width="100%"height="100%" width="100%" style=" object-fit: cover; background-position: cover; background-size:cover" class="img-responsive" id='remoteVideo'>
                Your browser does not support the video tag.
            </video>
          </div>

          {{-- <div class="remote-screen video-participant">
            <div class="participant-action">
              <button class="btn-mute"></button>
              <button class="btn-camera"></button>
            </div>
            <a href="#" class="name-tag">Tim Russel</a>
            <video height="100%" width="100%" class="img-responsive" id='remoteVideo'>
                Your browser does not support the video tag.
            </video>
          </div> --}}
          <!-- Video Participant 4 -->
          {{-- <div class="video-participant">
            <div class="participant-action">
              <button class="btn-mute"></button>
              <button class="btn-camera"></button>
            </div>
            <a href="#" class="name-tag">Jessica Bell</a>
            <img
              src="https://images.unsplash.com/photo-1600207438283-a5de6d9df13e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1234&q=80"
              alt="participant"
            />
          </div> --}}
          <!-- Video Participant 5 -->
          {{-- <div class="video-participant">
            <div class="participant-action">
              <button class="btn-mute"></button>
              <button class="btn-camera"></button>
            </div>
            <a href="#" class="name-tag">Ryan Patrick</a>
            <img
              src="https://images.unsplash.com/photo-1581824283135-0666cf353f35?ixlib=rb-1.2.1&auto=format&fit=crop&w=1276&q=80"
              alt="participant"
            />
          </div> --}}
          <!-- Video Participant 6 -->
          {{-- <div class="video-participant">
            <div class="participant-action">
              <button class="btn-mute"></button>
              <button class="btn-camera"></button>
            </div>
            <a href="#" class="name-tag">Tina Cate</a>
            <img
              src="https://images.unsplash.com/photo-1542596594-649edbc13630?ixlib=rb-1.2.1&auto=format&fit=crop&w=1234&q=80"
              alt="participant"
            />
          </div> --}}

          <div id="local-screen" style="bottom:0; right:0; position:absolute; width:20%; height:20%; float:left" class="video-participant">
            {{-- 
            <div class="participant-action">
              <button class="btn-mute"></button>
              <button class="btn-camera"></button>
            </div> 
            --}}
            <a href="#" class="name-tag">You</a>
            <video  muted="muted" poster="https://api-private.atlassian.com/users/5e04ca154006ea0ea3273e3e/avatar?initials=public" height="100%" width="100%" style=" object-fit: cover; background-position: cover; background-size:cover" class="img-responsive" id='localVideo'>
                Your browser does not support the video tag.
            </video>
            <p class="text"></p>
          </div>

        </div>

        <div class="video-call-actions">
          @hasanyrole(['admin', 'counselor', 'therapist'])
          <span>
            <div style="color:#FF2300; margin-right:2%" id="recorder-timer"></div>
          </span>
          <button onclick="startRecording()" id="start-btn" class="video-action-button start-recorder" title="Start Recording"></button>
          <button onclick="stopRecording()" style="background-color:red" id="stop-btn" class="video-action-button stop-recorder" title="Stop Recording"></button>
          @endhasanyrole
          <button onclick="toggleAudioMute()" title="Mute / Unmute" class="audio-mic video-action-button mic"></button>
          <button title="Hide / Unhide" onclick="toggleVideo()" class="video-cam video-action-button camera"></button>
          {{-- <button class="video-action-button maximize"></button> --}}
          <button onclick="endCall()" title="End Call" class="video-action-button endcall">Leave</button>
          <button title="Take Notes" onclick="open_notes()" class="video-action-button magnifier">
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
          <div class="chat-header">
            <button class="chat-header-button">Session Notes</button>
          </div>
          {{-- convoBody message_thread  --}}
          {{-- <div id="message_thread" class="chat-area"> --}}
          <textarea row="10" cols="70" style="height: 30px"  name="notes" onclick="save_notes()" id="taking-notes" class="chat-area editor"></textarea>
          {{-- <div class="chat-typing-area-wrapper">
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
          </div> --}}
        </div> 
        {{-- Paticipants --}}
        <div class="participants">
          <!-- Participant pic 1 -->
          <div class="participant profile-picture">
            <img
              src="https://images.unsplash.com/photo-1576110397661-64a019d88a98?ixlib=rb-1.2.1&auto=format&fit=crop&w=1234&q=80"
              alt=""
            />
          </div>
          <!-- Participant pic 2 -->
          <div class="participant profile-picture">
            <img
              src="https://images.unsplash.com/photo-1566821582776-92b13ab46bb4?ixlib=rb-1.2.1&auto=format&fit=crop&w=900&q=60"
              alt=""
            />
          </div>
          <!-- Participant pic 3 -->
          <div class="participant profile-picture">
            <img
              src="https://images.unsplash.com/photo-1600207438283-a5de6d9df13e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1234&q=80"
              alt=""
            />
          </div>
          <!-- Participant pic 4 -->
          <div class="participant profile-picture">
            <img
              src="https://images.unsplash.com/photo-1581824283135-0666cf353f35?ixlib=rb-1.2.1&auto=format&fit=crop&w=1276&q=80"
              alt=""
            />
          </div>
          <div class="participant-more">2+</div>
        </div>
      </div>
      <button title="Expand" class="expand-btn">
        <!-- expand icon -->
        <svg
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
        </svg>
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
  <script th:inline="javascript">
      $(document).ready(function() {
          $('.remote-screen').show();
          $('#stop-btn').hide();
          $('#right-side-toolbar').hide();
          $('#right-side-chat').hide();
          $('#right-side-notes').hide();
          $('#downloadButton').hide();
          $('.dont-show').hide();
          $('.recorder-timer').hide();
          // document.getElementById("local-screen").style.width = "100%"
          // document.getElementById("local-screen").style.height = "100%"
          // if (window.matchMedia("(max-width: 767px)").matches){}else{}
      });
      const btnCall = document.getElementById('btn-call');
      const myId = document.getElementById('localPeerId');
      const peerId = document.getElementById('remotePeerId');
      // const localScreen = document.getElementById('local-screen');
      // const remoteScreen = document.getElementByClassName('remote-screen');
      var user_role = "{{ preg_replace('/[^A-Za-z0-9. -]/', '',  auth()->user()->roles->pluck('name')) }}";

      var localVideo = document.getElementById('localVideo');
      var remoteVideo = document.getElementById('remoteVideo');
      var getUserMedia = navigator.getUserMedia || navigator.webkitGetUserMedia || navigator.mozGetUserMedia;
      // var myID = '';
      
      var data = @json($data);
      // if sender run this
      if (data['source'] === 'receiver') {
        var peer = new Peer();
      } else {
        var peer = new Peer(peerId.value);
      }
            
      let downloadButton = document.getElementById("downloadButton");
      let stopRecBtn = document.getElementById("stop-btn");
      let startRecBtn = document.getElementById("start-btn");
      let localStream;
      let remoteStream;


      navigator.mediaDevices.getUserMedia({ video: true, audio: true}).then(stream =>{
          localStream = stream;
          localVideo.srcObject = localStream;
          localVideo.onloadedmetadata = () => localVideo.play();
      });
  
      // if (user_role !== 'patient') {
      //   // Generate an ID (Link)
      //   peer.on('open', id => {
      //       alert(id);
      //       const remotePeerId = peerId.value;
      //       const call = peer.call(remotePeerId, localStream);
      //       // call of undefine 'on' from 'call'
      //       console.log(call);
      //       // alert('joining');
      //       // alert(remotePeerId);

      //       // call.on('stream', stream => {
      //       //     remoteVideo.srcObject = stream;
      //       //     remoteVideo.onloadedmetadata = () => remoteVideo.play();
      //       //     $('.remote-screen').show();
      //       // });
      //   });
      // }

      function join(){
          const remotePeerId = peerId.value;
          const call = peer.call(remotePeerId, localStream);
          alert('joining');
          alert(remotePeerId);

          call.on('stream', stream => {
              remoteVideo.srcObject = stream;
              remoteVideo.onloadedmetadata = () => remoteVideo.play();
              $('.remote-screen').show();
          })
      }
  
      peer.on('call', call => {
          call.answer(localStream);
          call.on('stream', stream => {
              remoteVideo.srcObject = stream;
              remoteStream = stream;
              remoteVideo.onloadedmetadata = () => remoteVideo.play();
          })
      })


      function toggleVideo(){      
        localStream.getVideoTracks()[0].enabled = !(localStream.getVideoTracks()[0].enabled);

        if(localStream.getVideoTracks()[0].enabled){        
          $(".video-cam").removeClass("camera-off");
          $(".video-cam").removeClass("camera-off-bg");
          $(".video-cam").addClass("camera");
        }else{
          $(".video-cam").removeClass("camera");
          $(".video-cam").addClass("camera-off");
          $(".video-cam").addClass("camera-off-bg");
          $("#localVideo").poster = "https://api-private.atlassian.com/users/5e04ca154006ea0ea3273e3e/avatar?initials=public"
        }

      }

      function toggleAudioMute(){
        localStream.getAudioTracks()[0].enabled = !(localStream.getAudioTracks()[0].enabled);

        if(localStream.getAudioTracks()[0].enabled){        
          $(".audio-mic").removeClass("mic-off");
          $(".audio-mic").removeClass("mic-off-bg");
          $(".audio-mic").addClass("mic");
        }else{
          $(".audio-mic").removeClass("mic");
          $(".audio-mic").addClass("mic-off");
          $(".audio-mic").addClass("mic-off-bg");
        }
      }

      // ************** Recording Module ************* //
      // var isRec = 0;
      var lengthInMS = 5000;

      function startRecording(){

        recording(remoteStream, lengthInMS);
        // start the timer
        $('.recorder-timer').show();
        var input = {
            year: 0,
            month: 0,
            day: 0,
            hours: 2,
            minutes: 10,
            seconds: 30
        };

        var timestamp = new Date(input.year, input.month, input.day,
        input.hours, input.minutes, input.seconds);

        var interval = 1;

        setInterval(function () {
            timestamp = new Date(timestamp.getTime() + interval * 1000);
            document.getElementById('recorder-timer').innerHTML = timestamp.getHours() + 'h:' + timestamp.getMinutes() + 'm:' + timestamp.getSeconds() + 's';
            // document.getElementById('recorder-timer').innerHTML = timestamp.getDay() + 'd:' + timestamp.getHours() + 'h:' + timestamp.getMinutes() + 'm:' + timestamp.getSeconds() + 's';
        }, Math.abs(interval) * 1000);
      }

      var recordedData = [];
      function recording(stream, lengthInMS){
        try {
            let recorder = new MediaRecorder(stream);
            recorder.ondataavailable = (event) => recordedData.push(event.data);
            recorder.start();
            $('#start-btn').hide();
            $('#stop-btn').show();
            console.log(`${recorder.state} for ${lengthInMS / 1000} seconds…`);
            let stopped = new Promise((resolve, reject) => {
              recorder.onstop = resolve;
              recorder.onerror = (event) => reject(event.name);
            });
            let recorded = setTimeout(
            () => {
              console.log(recorder.state);
              if (recorder.state === "recording") {
                // remoteVideo.src = URL.createObjectURL(recorder.getBlob());
                recorder.stop();
              }
            },
            10000
            );

            return Promise.all([
              stopped,
              recorded
            ])
            .then(() => {
              let recordedBlob = new Blob(recordedData, { type: "video/webm" });
              // remoteVideo.src = URL.createObjectURL(recordedBlob);
              // downloadButton.href = recording.src;
              downloadButton.href = URL.createObjectURL(recordedBlob);
              downloadButton.download = "RecordedVideo.webm";
              $('.recorder-timer').hide();
              $('#start-btn').show();
              $('#stop-btn').hide();
              $('#downloadButton').show();
            });
        } catch (err) {
          alert('Oops, Can not record video unless patient joins the session');
        }
      }

      function stopRecording(recordedData){
        let recordedBlob = new Blob(recordedData, { type: "video/webm" });
        downloadButton.href = URL.createObjectURL(recordedBlob);
        downloadButton.download = "RecordedVideo.webm";
        $('#downloadButton').show();
        $('#start-btn').hide();
        $('#stop-btn').stop();
      }
      // ************** End Recording Module ******** //

      function endCall(){
        peer.destroy();
        $('.remote-screen').hide();
        $('#local-screen').css = "width:100%; height:100%; margin:0 auto;"
      }

  
      // ************** ToolBar *************
      function close_toolbar(){
        $('#right-side-notes').hide();
        $('#right-side-toolbar').hide();
        $('#right-side-chat').hide();
      }  
      function open_chat(){
        $('#right-side-notes').hide();
        $('#right-side-toolbar').show();
        $('#right-side-chat').show();
      }
      function open_notes(){
        $('#right-side-chat').hide();
        $('#right-side-notes').show();
        $('#right-side-toolbar').show();
      }

      // ********* When taking notes *********

      function save_notes(){
          console.log('Typing...');
          // Print entered value in a div box
          // $("#save-notes").text("Saving...");
          setTimeout(
            () => {
              $.ajax({
                type:'POST',
                url:'{{ route("send.remote_id") }}',
                data: {
                    peer_id,
                    info
                },
                success:function(data) {
                  console.log(data);
                }
              });
            },
            5000
          );
      };

</script>


<script>
  const user = {!! auth()->user()->toJson() ?? '' !!};
  var data = @json($data);
  var chat_id; 
  var owner = null; 
  var aDay = 24*60*60*1000;
  var msgFeild = document.getElementById("message_textbox");
  
  startChat(data['chat_id'], 'sender', data['source'], data['role']);
  
  function startChat(id, who, names, role){
      chat_id = id;
      // alert(chat_id);
      owner = who;
      $('#chat_receiver_name').text(names);
      $('#chat_receiver_role').text(role.toString().replace(/[^a-zA-Z ]/g, "").toUpperCase());
      $('#message_thread').empty();
      // $('#message_thread div').empty();
      // {{-- Get chat message thread --}}
      $.ajax({
          type:'GET',
          url:'{{ route("chat.index") }}',
          data: {
              id,owner
          },
          success:function(data) {
              let messages = data.chat_session.chat_messages;
              
              // UPDATED
              console.log(messages);
              for (const message of messages){
                    console.log(user['id'] != message.user_id);
                  if(user['id'] != message.user_id){

                      $('#message_thread').append('<div class="message-wrapper">\
                        <div class="profile-picture">\
                          <img\
                            src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTAKwLNQorSghh-caEq8UwWJmd60z4trnBNqbJujqDuq3rWxEJwU7QsdwpFzAWl1J6sijE&usqp=CAU"\
                            alt=""\
                          />\
                        </div>\
                        <div class="message-content">\
                          <p class="name">'+ message.user.fname +' '+ message.user.lname +'</p>\
                          <div class="message">'+ message.message +'</div>\
                        </div>\
                      </div>');
                  }else{
                      $('#message_thread').append('<div class="message-wrapper reverse">\
                          <div class="profile-picture">\
                            <img\
                              src="https://png.pngtree.com/background/20211217/original/pngtree-traditional-african-color-pattern-picture-image_1590972.jpg"\
                              alt=""\
                            />\
                          </div>\
                          <div class="message-content">\
                            <p class="name">'+ message.user.fname +' '+ message.user.lname +'</p>\
                            <div class="message">'+ message.message +'</div>\
                          </div>\
                        </div>');
                  }
              } 
              $('#message_thread').scrollTop($('#message_thread')[0].scrollHeight);
          },
          
          error: function (msg) {
              console.log(msg);
              var errors = msg.responseJSON;
          }
      });
  }

  function send(){
      var message = $('#message_textbox').val();
      // alert(chat_id);
      // alert(message_id);
      let user_id = user['id'];
      let status = 1;
      // $('#message_thread').empty();
      // $('#message_thread div').empty();
      // {{-- Get chat message thread --}}
      $.ajax({
          type:'POST',
          url:'{{ route("chat.store") }}',
          data: {
              user_id,
              message,
              chat_id,
              status,
          },
          success:function(data) {    
              update();
              $('#message_textbox').val(''); 
              $('#message_thread').scrollTop($('#message_thread')[0].scrollHeight);
              
          },
          
          error: function (msg) {
              console.log(msg);
              var errors = msg.responseJSON;
          }
      });


  }

  // // Execute a function when the user presses a key on the keyboard
  // msgFeild.addEventListener("keypress", function(event) {
  // // If the user presses the "Enter" key on the keyboard
  //     if (event.key === "Enter") {
  //         // Cancel the default action, if needed
  //         event.preventDefault();
  //         // Trigger the button element with a click
  //         send();
  //     }
  // });

  function update(){
      let user_id = user['id'];
      if(chat_id !== undefined){
          $.ajax({    
              type:'GET',
              url:'{{ route("chat.stream") }}',
              data: { 
                  chat_id,owner
              },
              success:function(data) {
                  let messages = data.chat_messages;
                  console.log('Messages Thread Below');

                  try {
                      // console.log(Object.keys(messages).length);
                      // console.log(messages);
                      if(Object.keys(messages).length > 0){
                          for (const message of messages){
                              console.log(message);
                              if(user['id'] != message.user_id){
                                  $('#message_thread').append('<div class="message-wrapper">\
                                    <div class="profile-picture">\
                                        <img\
                                          src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTAKwLNQorSghh-caEq8UwWJmd60z4trnBNqbJujqDuq3rWxEJwU7QsdwpFzAWl1J6sijE&usqp=CAU"\
                                          alt=""\
                                        />\
                                      </div>\
                                      <div class="message-content">\
                                        <p class="name">'+ message.user.fname +' '+ message.user.lname +'</p>\
                                        <div class="message">'+ message.message +'</div>\
                                      </div>\
                                    </div>\
                                  ');
                                  $('#message_thread').scrollTop($('#message_thread')[0].scrollHeight);

                              }else{
                                  $('#message_thread').append('<div class="message-wrapper reverse">\
                                    <div class="profile-picture">\
                                        <img\
                                          src="https://png.pngtree.com/background/20211217/original/pngtree-traditional-african-color-pattern-picture-image_1590972.jpg"\
                                          alt=""\
                                        />\
                                      </div>\
                                      <div class="message-content">\
                                        <p class="name">'+ message.user.fname +' '+ message.user.lname +'</p>\
                                        <div class="message">'+ message.message +'</div>\
                                      </div>\
                                    </div>\
                                  ');
                                  $('#message_thread').scrollTop($('#message_thread')[0].scrollHeight);
                              }
                          }
                      } 
                  }catch(err){
                      console.log('Not updates yet');
                  }         
              },
              
              error: function (msg) {
                  console.log(msg);
                  var errors = msg.responseJSON;
              }
          });
      }
  }

  function init(){
      $('#message_thread').empty();
  }

  var default_avatar = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR4n4D5jth4fm4GE7ut7lWW-04lnDO2OkD-sg&usqp=CAU';
  
  function handleError(image) {
      image.src = default_avatar;
  }

  function back(){
      $('.convoBody').hide();
      $('.chatList').show();
  }
  function timeSince(timeStamp) {
      var now = new Date(), secondsPast = (now.getTime() - timeStamp) / 1000;
      if (secondsPast < 60) {
          return parseInt(secondsPast) + 's ago';
      }
      if (secondsPast < 3600) {
          return parseInt(secondsPast / 60) + 'min ago';
      }
      if (secondsPast <= 86400) {
          return parseInt(secondsPast / 3600) + 'h ago';
      }
      if (secondsPast > 86400) {
          day = timeStamp.getDate();
          month = timeStamp.toDateString().match(/ [a-zA-Z]*/)[0].replace(" ", "");
          year = timeStamp.getFullYear() == now.getFullYear() ? "" : " " + timeStamp.getFullYear();
          return day + " " + month + year;
      }
  }

  // const currentTimeStamp = new Date().getTime();
  // console.log(timeSince(currentTimeStamp));

  // var intervalId = window.setInterval(function(){
  //     update();
  // }, 1000);

  var myclose = false;
  function ConfirmClose(){
      if (event.clientY < 0)
      {
          event.returnValue = 'You have closed the browser. Do you want to logout from your application?';
          setTimeout('myclose=false',10);
          myclose=true;
      }
  }

  function HandleOnClose(){
      if (myclose==true) 
      {
          //the url of your logout page which invalidate session on logout 
          location.replace('/contextpath/j_spring_security_logout') ;
      }   
  }
</script> 

{{-- <script src="{{ asset('dist/js/ckeditor-classic.js') }}"></script>
<script>
      var editor = CKEDITOR.replace( 'notes ', {});
      // editor is object of your CKEDITOR
      editor.on('change',function(){
          console.log("test");
      });
</script> --}}
</html>
