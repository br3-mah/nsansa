<template>
<div class="header">
    <nav>
        <img width="20%" src="uploads/sites/304/2022/06/logos.svg" class="rounded logo">
        <ul>
            <li><img src="https://i.postimg.cc/L8zxQBhv/live.png" class="active"></li>
            <li title="Video"><img src="https://i.postimg.cc/JnggC78Q/video.png"></li>
            <li title="Invite Someone"><img src="https://i.postimg.cc/k4DZH604/users.png"></li>
            <li title="Quick Settings"><img src="https://i.postimg.cc/v84Fqkyz/setting.png"></li>
        </ul>
    </nav>
    <div class="container">
        <div class="top-icons">
            <video  class="img-responsive" autoplay id='localVideo'>
                Your browser does not support the video tag.
            </video>
            <video  class="img-responsive" autoplay id='remoteVideo'>
                Your browser does not support the video tag.
            </video>
        </div>
        <div class="row">
            <div class="col-1">
                <img height="75%" width="50px" src="https://media1.popsugar-assets.com/files/thumbor/YPjaz8052B7wAJ_dZl99jxVL0zg/fit-in/2048xorig/filters:format_auto-!!-:strip_icc-!!-/2020/02/10/627/n/1922729/330be6f43c47a571_chantablue/i/Chanta-Blue.jpg" class="host-img">
                <div class="contarols">
                    <img src="https://i.postimg.cc/3NVtVtgf/chat.png">
                    <img src="https://i.postimg.cc/BQPYHG0r/disconnect.png">
                    <img src="https://i.postimg.cc/BQPYHG0r/record.png">
                    <img src="https://i.postimg.cc/fyJH8G00/call.png" class="call-icon">
                    <img src="https://i.postimg.cc/bJFgSmFY/mic.png">
                    <img src="https://i.postimg.cc/Y2sDvCJN/cast.png">
                </div>
            </div>
            <div class="col-2">
                <div class="joined">
                    <p>People Joined</p>
                    <div>
                        <img src="https://i.postimg.cc/WzFnG0QG/people-1.png">
                        <img src="https://i.postimg.cc/fRhGbb92/people-2.png">
                        <img src="https://i.postimg.cc/02mgxSbK/people-3.png">
                        <img src="https://i.postimg.cc/K8rd3y7Z/people-4.png">
                        <img src="https://i.postimg.cc/HWFGfzsC/people-5.png">
                    </div>
                </div>
                <div class="invite">
                    <p>Invite More People</p>
                    <div>
                        <img src="https://i.postimg.cc/7LHjgQXS/user-1.png">
                        <img src="https://i.postimg.cc/q71SQXZS/user-2.png">
                        <img src="https://i.postimg.cc/h4kwCGpD/user-3.png">
                        <img src="https://i.postimg.cc/GtyfL0hn/user-4.png">
                        <img src="https://i.postimg.cc/FFd8gSbC/user-5.png">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</template>

<script>
    export default {
        data() {
            return {}
        }
    }
</script>

<style>
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'poppins', sans-serif;

}
.header{
    width: 100%;
    height: 100vh;
    background: #00122e;
    position: relative;

}
nav{
    position: absolute;
    top: 0;
    left: 0;
    bottom: 0;
    background: #182842;
    width: 120px;
    padding: 10px 0;

}
nav .logo{
    width: 56px;
    display: block;
    margin: auto;
    cursor: pointer;
}
nav ul{
    margin-top: 160px;

}
nav ul li{
    list-style: none;

}
nav ul li img{
    width: 50px;
    display: block;
    margin: 10px auto;
    padding: 10px;
    cursor: pointer;
    opacity: 0.5;
    border-radius: 10px;
    transition: opacity 0.5s, background 0.5s;
}
nav ul li img:hover{
    opacity: 1;
    background: #4d6181;

}
.active{
    opacity: 1;
    background: #4d6181;
}
.container{
    margin-left: 120px;
    padding: 0 2.5%;

}
.top-icons{
    display: flex;
    align-items: center;
    justify-content: flex-end;
    padding: 25px 0;

}
.top-icons img{
    width: 25px;
    margin-left: 40px;
    cursor: pointer;

}
.row{
    margin-top: 15px;
    display: flex;
    justify-content: space-between;

}
.col-1{
    flex-basis: 65%;

}
.col-2{
    flex-basis: 33%;
}
.host-img{
    width: 100%;
    border-radius: 15px;
}
.contarols{
    display: flex;
    align-items: center;
    justify-content: center;
}
.contarols img{
    width: 40px;
    margin: 20px 10px;
    cursor: pointer;
    transition: transform 0.5s;
}
.contarols .call-icon{
    width: 70px;

}
.contarols img:hover{
    transform: translateY(-10px);

}
.joined{
    background: #182842;
    border-radius: 15px;
    padding: 30px 40px 50px;
    color: #fff;

}
.joined div{
    margin-top: 20px;
    display: grid;
    grid-template-columns: auto auto auto;
    grid-gap: 20px;

}
.joined img{
    width: 100%;
    border-radius: 10px;
    cursor: pointer;

}
.invite{
    background: #182842;
    border-radius: 15px;
    padding: 30px 40px 50px;
    color: #fff;
    margin-top: 20px;

}
.invite img{
    margin-top: 20px;
    width: 50px;
    margin-left: 5px;
    border-radius: 50%;
    cursor: pointer;
}
</style>