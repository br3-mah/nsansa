
        $(function () {
            var localVideo = document.getElementById('localVideo');
            var remoteVideo = document.getElementById('remoteVideo');
            var answerButton = document.getElementById('answerCallButton');

            answerButton.onclick = answerCall;

            $('input[type=file]').on('change', prepareUpload);
        });

        var files;
        var conversationID;
        var luid;
        var ruid;
        var startTime;
        var localStream;
        var pc;
        var offerOptions = {
            offerToReceiveAudio: 1,
            offerToReceiveVideo: 1
        };
        var isCaller = false;
        var peerConnectionDidCreate = false;
        var candidateDidReceived = false;


        var app = new Vue({
            el: "#master",
            data:{
                conversationId : 1,
                channel : 'chat-room-1',
                messages : 'Hello',
                withUser : '',
                text : '',
                tst : 'here i am Yes',
                constraints : {
                    audio: false,
                    video: true
                },
            },
            beforeMount () {
                // Cookies.set('uuid', this.currentUser.id);
                // Cookies.set('conversationID', this.conversationId);
            },
            mounted() {
                // console.log(this.msg);
                // this.listenForNewMessage();
                this.startVideoCallToUser (1);
            },
            methods: {
                startVideoCallToUser (id) {
                    Cookies.set('remoteUUID', id);
                    window.remoteUUID = id;
                    luid = Cookies.get('uuid');
                    ruid = Cookies.get('remoteUUID');
                    isCaller = true;
                    start()
                },
                check(id) {
                    return id === this.currentUser.id;
                },
                send() {
                    axios.post('/nsawellness/chat/message/send',{
                        conversationId : this.conversationId,
                        text: this.text,
                    }).then((response) => {
                        this.text = '';
                    });
                },
            }
        });

        function onSignalMessage(m){
        console.log(m.subtype);
        if(m.subtype === 'offer'){
            console.log('got remote offer from ' + m.from + ', content ' + m.content);
            Cookies.set('remoteUUID', m.from);
            onSignalOffer(m.content);
        }else if(m.subtype === 'answer'){
            onSignalAnswer(m.content);
        }else if(m.subtype === 'candidate'){
            onSignalCandidate(m.content);
        }else if(m.subtype === 'close'){
            onSignalClose();
        }else{
            console.log('unknown signal type ' + m.subtype);
        }
    }
    
    function onSignalClose() {
        trace('Ending call');
        pc.close();
        pc = null;

        closeMedia();
        clearView();
    }

    function closeMedia(){
        localStream.getTracks().forEach(function(track){track.stop();});
    }

    function clearView(){
        localVideo.srcObject = null;
        remoteVideo.srcObject = null;
    }

    function onSignalCandidate(candidate){
        onRemoteIceCandidate(candidate);
    }

    function onRemoteIceCandidate(candidate){
        trace('onRemoteIceCandidate : ' + candidate);
        if(peerConnectionDidCreate){
            addRemoteCandidate(candidate);
        }else{
            //remoteCandidates.push(candidate);
            var candidates = Cookies.getJSON('candidate');
            if(candidateDidReceived){
                candidates.push(candidate);
            }else{
                candidates = [candidate];
                candidateDidReceived = true;
            }
            Cookies.set('candidate', candidates);
        }
    }

    function onSignalAnswer(answer){
        onRemoteAnswer(answer);
    }

    function onRemoteAnswer(answer){
        trace('onRemoteAnswer : ' + answer);
        pc.setRemoteDescription(answer).then(function(){onSetRemoteSuccess(pc)}, onSetSessionDescriptionError);
    }

    function onSignalOffer(offer){
        Cookies.set('offer', offer);
        $('#incomingVideoCallModal').modal('show');
    }

    function answerCall() {
        isCaller = false;
        luid = Cookies.get('uuid');
        ruid = Cookies.get('remoteUUID');
        $('#incomingVideoCallModal').modal('hide');
        start()
    }

    function gotStream(stream) {
        trace('Received local stream');
        localVideo.srcObject = stream;
        localStream = stream;
        call()
    }

    function start() {

        trace('Requesting local stream');

        navigator.mediaDevices.getUserMedia({
            audio: true,
            video: {
                width: {
                    exact: 320
                },
                height: {
                    exact: 240
                }
            }
        })
        .then(gotStream)
        .catch(function(e) {
            alert('getUserMedia() error: ' + e.name);
        });
    }

    function call() {
        conversationID = Cookies.get('conversationID');

        trace('Starting call');
        startTime = window.performance.now();
        var videoTracks = localStream.getVideoTracks();
        var audioTracks = localStream.getAudioTracks();
        if (videoTracks.length > 0) {
            trace('Using video device: ' + videoTracks[0].label);
        }
        if (audioTracks.length > 0) {
            trace('Using audio device: ' + audioTracks[0].label);
        }

        var configuration = { "iceServers": [{ "urls": "stun:stun.ideasip.com" }] };
        pc = new RTCPeerConnection(configuration);

        trace('Created local peer connection object pc');

        pc.onicecandidate = function(e) {
            onIceCandidate(pc, e);
        };

        pc.oniceconnectionstatechange = function(e) {
            onIceStateChange(pc, e);
        };

        pc.onaddstream = gotRemoteStream;

        pc.addStream(localStream);

        trace('Added local stream to pc');

        peerConnectionDidCreate = true;

        if(isCaller) {
            trace(' createOffer start');
            trace('pc createOffer start');

            pc.createOffer(
                offerOptions
            ).then(
                onCreateOfferSuccess,
                onCreateSessionDescriptionError
            );
        }else{
            onAnswer()
        }
    }

    function onAnswer(){
        var remoteOffer = Cookies.getJSON('offer');

        pc.setRemoteDescription(remoteOffer).then(function(){onSetRemoteSuccess(pc)}, onSetSessionDescriptionError);

        pc.createAnswer().then(
            onCreateAnswerSuccess,
            onCreateSessionDescriptionError
        );
    }

    function onCreateAnswerSuccess(desc) {
        trace('Answer from pc:\n' + desc.sdp);
        trace('pc setLocalDescription start');
        pc.setLocalDescription(desc).then(
            function() {
                onSetLocalSuccess(pc);
            },
            onSetSessionDescriptionError
        );
        conversationID = Cookies.get('conversationID');
        var message = {from: luid, to:ruid, type: 'signal', subtype: 'answer', content: desc, time:new Date()};
        axios.post('/trigger/' + conversationID , message );
    }

    function onSetRemoteSuccess(pc) {
        trace(pc + ' setRemoteDescription complete');
        applyRemoteCandidates();
    }

    function applyRemoteCandidates(){
        var candidates = Cookies.getJSON('candidate');
        for(var candidate in candidates){
            addRemoteCandidate(candidates[candidate]);
        }
        Cookies.remove('candidate');
    }

    function addRemoteCandidate(candidate){
        pc.addIceCandidate(candidate).then(
            function() {
                onAddIceCandidateSuccess(pc);
            },
            function(err) {
                onAddIceCandidateError(pc, err);
            });
    }

    function onIceCandidate(pc, event) {
        if (event.candidate){
            trace(pc + ' ICE candidate: \n' + (event.candidate ? event.candidate.candidate : '(null)'));
            conversationID = Cookies.get('conversationID');
            var message = {from: luid, to:ruid, type: 'signal', subtype: 'candidate', content: event.candidate, time:new Date()};
            axios.post('/trigger/' + conversationID , message );
        }
    }

    function onAddIceCandidateSuccess(pc) {
        trace(pc + ' addIceCandidate success');
    }

    function onAddIceCandidateError(pc, error) {
        trace(pc + ' failed to add ICE Candidate: ' + error.toString());
    }

    function onIceStateChange(pc, event) {
        if (pc) {
            trace(pc + ' ICE state: ' + pc.iceConnectionState);
            console.log('ICE state change event: ', event);
        }
    }

    function onCreateSessionDescriptionError(error) {
        trace('Failed to create session description: ' + error.toString());
    }

    function onCreateOfferSuccess(desc) {
        trace('Offer from pc\n' + desc.sdp);
        trace('pc setLocalDescription start');
        pc.setLocalDescription(desc).then(
            function() {
                onSetLocalSuccess(pc);
            },
            onSetSessionDescriptionError
        );

        conversationID = Cookies.get('conversationID');
        var message = {from: luid, to:ruid, type: 'signal', subtype: 'offer', content: desc, time:new Date()};
        axios.post('/trigger/' + conversationID , message );
    }

    function onSetLocalSuccess(pc) {
        trace( pc + ' setLocalDescription complete');
    }

    function onSetSessionDescriptionError(error) {
        trace('Failed to set session description: ' + error.toString());
    }

    function gotRemoteStream(e) {
        if (remoteVideo.srcObject !== e.stream) {
            remoteVideo.srcObject = e.stream;
            trace('pc received remote stream');
        }
    }

    function trace(arg) {
        var now = (window.performance.now() / 1000).toFixed(3);
        console.log(now + ': ', arg);
    }

    function prepareUpload(event)
    {
        files = event.target.files;
    }                           