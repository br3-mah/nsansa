var Peer = require('simple-peer')

// get video/voice stream
navigator.mediaDevices.getUserMedia({
  video: true,
  audio: true
}).then(gotMedia).catch(() => {})

function gotMedia (stream) {
  var peer1 = new Peer({ initiator: true, stream: stream })
  var peer2 = new Peer()

  peer1.on('signal', data => {
    var x = peer2.signal(data);
    console.log('peer 1'+x);
  })

  peer2.on('signal', data => {
    var y = peer1.signal(data);
    console.log('peer 2'+y);
  })

  peer1.on('stream', stream => {
    // got remote video stream, now let's show it in a video tag
    var localVideo = document.getElementById('localVideo')
    // var localVideoText = document.getElementById('remoteVideoText');
    if ('srcObject' in localVideo) {
        localVideo.srcObject = stream
        // localVideoText.append( "<strong>Local</strong>" );
        //   console.log(localVideo.srcObject);
    } else {
        localVideo.src = window.URL.createObjectURL(stream) // for older browsers
    }
    localVideo.play()
  })

  peer2.on('stream', stream => {
    // got remote video stream, now let's show it in a video tag
    var remoteVideo = document.getElementById('remoteVideo');
    var remoteVideoText = document.getElementById('remoteVideoText');

    if ('srcObject' in remoteVideo) {
        remoteVideo.srcObject = stream
        remoteVideoText.append( "<strong>Remote</strong>" );
    } else {
        remoteVideo.src = window.URL.createObjectURL(stream) // for older browsers
    }
    remoteVideo.play()
  })
}