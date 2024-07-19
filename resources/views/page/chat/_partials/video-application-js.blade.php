
  <script th:inline="javascript">
      $(document).ready(function() {
          $('.remote-screen').show();
          $('#stop-btn').hide();
          $('#right-side-toolbar').hide();
          $('#right-side-chat').hide();
          $('#right-side-notes').hide();
          $('.dont-show').hide();
          $('#downloadButton').hide();
          $('.joinmessage').hide();
          $('.joinloader').hide();
          $('.end-call-card').hide();
          
          $('#oops').hide();
          $('.refresh-btn').hide();
      });
      const btnCall = document.getElementById('btn-call');
      const myId = document.getElementById('localPeerId');
      const peerId = document.getElementById('remotePeerId');
      var info = @json($data);
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
      let stopRecordingButton = document.getElementById("stop-btn");
      let localStream;
      let remoteStream;


      navigator.mediaDevices.getUserMedia({ video: true, audio: true}).then(stream =>{
          localStream = stream;
          localVideo.srcObject = localStream;
          localVideo.onloadedmetadata = () => localVideo.play();
          // Get the local video track
          const videoTrack = stream.getVideoTracks()[0];
          // Adjust video constraints to reduce quality
          const videoConstraints = {
            width: { max: 640 },
            height: { max: 480 },
            frameRate: { max: 15 },
          };
          // Apply the new video constraints to the video track to limit data usage
          videoTrack.applyConstraints(videoConstraints).then(() => {
              console.log('Video constraints applied successfully!');
          }).catch((error) => {
              console.error('Failed to apply video constraints:', error);
          });
      }).catch((error) => {
          $('#card-info').hide();
          $('.join-btn').hide();
          $('#oops').show();
          $('.refresh-btn').show();
          console.error('Error accessing user media:', error);
      });

      function join(){   
        
          $('.joinmessage').hide();       
          $('.joinloader').show();
          $('.join-card-content').hide();
          
          const remotePeerId = peerId.value;
          const call = peer.call(remotePeerId, localStream);
          // PeerJS will limit the bandwidth used by the video stream during the call, reducing the network data usage.
          const videoReceiveBandwidth = 200; // Set the desired video receive bandwidth in Kbps
          const sender = call.peerConnection.getSenders()[0];

          const parameters = sender.getParameters();
          parameters.encodings[0].maxBitrate = videoReceiveBandwidth * 1000; // Convert to bps
          sender.setParameters(parameters);

          
          call.on('stream', stream => {
            const cool = new Audio('/public/ringer/joined.wav');
            cool.play();
              if(stream.active === true){
                  $('.join-card').hide();
                  remoteVideo.srcObject = stream;
                  remoteVideo.onloadedmetadata = () => remoteVideo.play();
                  $('.remote-screen').show();
              }else{
                  $('.joinloader').hide();
                  $('.joinmessage').show();
              }            
              const threeHours = 3 * 60 * 60 * 1000; // 3 hours in milliseconds
              setTimeout(endCall, threeHours);
          });

          call.on('error', error => {
            if (error.type === 'peer-unavailable') {
              // Stream is unavailable
              console.log('Stream is unavailable');
            } else {
              // Handle other errors
              console.error('An error occurred:', error);
            }
          });

          setTimeout(() => {
            // Code to be executed after 6 seconds
            $('.joinloader').hide();
            $('.joinmessage').show();
          }, 10000);

      }
  
      peer.on('call', call => {
          
          const audio = new Audio('/public/ringer/incoming.wav');
          audio.play();
          // const userResponse = confirm("Allow patient to join video call");
          // if(userResponse){
            call.answer(localStream);
            
            // PeerJS will limit the bandwidth used by the video stream during the call, reducing the network data usage.
            const videoReceiveBandwidth = 200; // Set the desired video receive bandwidth in Kbps
            const sender = call.peerConnection.getSenders()[0];

            const parameters = sender.getParameters();
            parameters.encodings[0].maxBitrate = videoReceiveBandwidth * 1000; // Convert to bps
            sender.setParameters(parameters);

            call.on('stream', stream => {
                sessionTimer();
                remoteVideo.srcObject = stream;
                                          remoteStream = stream;
                remoteVideo.onloadedmetadata = () => remoteVideo.play();
            })
          // }
          
          // if(!userResponse){
          //   alert(userResponse);
          //   call.close();
          //   endCall();
          // }
      }); 


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

        function startRecording(){
          recording(remoteStream);
          recorderTimer();
        }


        // Recording function
        var recordedData = [];
        let recordedVid;
        function recording(stream){
          try {
              // start the timer and recording media
              console.log('recording...');
              $('#recorder-timer').show();
              $('#start-btn').hide();
              $('#stop-btn').show();


              // Set the recorder
              let recorder = new MediaRecorder(stream);
              recorder.ondataavailable = (event) => recordedData.push(event.data);
              recorder.start();
              
              stopRecordingButton.addEventListener('click', function(){
                recorder.stop();
              });

              var fulltime =  10800000;
              let stopped = new Promise((resolve, reject) => {
                recorder.onstop = resolve;
                recorder.onerror = (event) => reject(event.name);
              });

              let recorded = setTimeout(() => {
                console.log('timeout...');
                if (recorder.state === "recording") {
                  recorder.stop();
                }
              },fulltime);

              return Promise.all([
                  stopped,
                  recorded
              ]).then(() => {
                  console.log('stopped...');
                  let recordedBlob = new Blob(recordedData, { type: "video/webm" });
                  
                  downloadButton.href = URL.createObjectURL(recordedBlob);
                  downloadButton.download = "RecordedVideo.webm";
             
                  $('#start-btn').show();
                  $('#stop-btn').hide();
                  $('#recorder-timer').hide();
                  $('#downloadButton').show();
                  save_recording(recordedBlob);
              });
          } catch (err) {
              alert('Oops, Can not record video unless patient joins the session');
          }
        }

      function save_recording(recordedBlob){
        const user = {!! auth()->user()->toJson() ?? '' !!};
        const formData = new FormData();
        formData.append('video', recordedBlob, 'RecordedVideo.webm');
        formData.append('counselor_id', user['id']);
        formData.append('chat_id', info['chat_id']);
        // Make the POST request to your Laravel backend
        fetch("{{ route('upload-video') }}", {
          method: 'POST',
          body: formData
        })
        .then(response => {
          console.log(response);
          if (response.ok) {
            console.log('Video uploaded successfully');
          } else {
            console.error('Failed to upload video');
          }
        })
        .catch(error => {
          console.error('Error uploading video:', error);
        });
      }

      function refresh(){
        location.reload();
      }

      // ************** End Recording Module ******** //
      function endCall(){
        peer.destroy();
        $('.remote-screen').hide();
        $('#local-screen').hide();
        
        if(user_role === 'patient'){
          $('.end-call-card').show();
          closeTransaction();
        }else{
          $('.end-call-card').show();
        }
      }


      function closeTransaction(){
        const user = {!! auth()->user()->toJson() ?? '' !!};
        const formDatas = new FormData();
        formDatas.append('counselor_id', user['id']);
        formDatas.append('chat_id', info['chat_id']);
        // formData.append('time', info['chat_id']);
        // Make the POST request to your Laravel backend
        fetch("{{ route('close-session-call') }}", {
          method: 'POST',
          body: formDatas
        })
        .then(response => {
          console.log(response);
          $('#su_id').val(response.data.su_id);
        })
        .catch(error => {
          console.error('Error uploading video:', error);
        });
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
        const user = {!! auth()->user()->toJson() ?? '' !!};
        const my_notes = $('#taking-notes-textarea').val();
        $('#notes_status').html('<span>Saving...</span>');

        const formDatax = new FormData();
        formDatax.append('chat_id', info['chat_id']);
        formDatax.append('notes', my_notes);
        formDatax.append('status', 1);
        formDatax.append('user_id', user['id']);
        
        console.log('Typing...');

        fetch("{{ route('save-notes') }}", {
          method: 'POST',
          body: formDatax
        })
        .then(response => {
          console.log(response);
          if (response.ok) {
            $('#notes_status').html('<span>Saved.</span>');
          } else {
            $('#notes_status').html('<span style="color:red">Failed to save notes.</span>');
          }
        })
        .catch(error => {
          $('#myText').html('<span style="color:red">Check your internet connection</span>');
        });
      }


      // Countdown Timer
      function sessionTimer() {
        const input = {
            hours: 3,
            minutes: 0,
            seconds: 0
        };

        const timestamp = new Date().getTime() + (input.hours * 60 * 60 * 1000);
        let interval;

        function updateTimer() {
            const currentTime = new Date().getTime();
            const timeDifference = timestamp - currentTime;

            if (timeDifference <= 0) {
                clearInterval(interval);
                document.getElementById('session-timer').innerHTML = "Session Expired";
                endCall();
            } else {
                const remainingHours = Math.floor(timeDifference / (60 * 60 * 1000));
                const remainingMinutes = Math.floor((timeDifference % (60 * 60 * 1000)) / (60 * 1000));
                const remainingSeconds = Math.floor((timeDifference % (60 * 1000)) / 1000);

                document.getElementById('session-timer').innerHTML =
                    ('0' + remainingHours).slice(-2) + 'h:' +
                    ('0' + remainingMinutes).slice(-2) + 'm:' +
                    ('0' + remainingSeconds).slice(-2) + 's';
            }
        }

        updateTimer(); // Initial update

        interval = setInterval(updateTimer, 1000); // Update the timer every second
    }


</script>