
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