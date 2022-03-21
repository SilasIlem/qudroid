<x-master>
    <x-slot name="header">
        <h4 id = navboard style = "width : 100vw; animation-duration : 4s; color : white" class="animated slideInLeft font-bold text-center leading-tight">
            {{__("Qudroid-Systems Chats")}}
        </h4>
    </x-slot>
<style>
    body {
        background : #b3aca3;
        background-size : cover;
        background-attachment : fixed;
    }

    header.py-1 {
        display : none;
    }

    .chat-app {
        padding: 4px 16px;
        display : flex;
    }

    #partition {
        min-width : 60%;
        max-width : 60%;
        position : relative;
    }
    
    .chatBox {
        min-width : 100%;
        max-width : 100%;
        max-height : 100%;
        box-shadow : inset 1px 0px 5px var(--color_dark2_pry);
        background : url('./images/chatback.jpg');
        background-size : cover;
        background-attachment : fixed;
        z-index : 50;
        position : absolute;
        top : 0px;
        left : 0px;
    }

    .chatBox.minied {
        min-height : 100%;
    }

    #chat-head {
        min-height : 8vh;
        max-height : 8vh;
        min-width : 100%;
        max-width : 100%;
        background : white;
        transform : translateY(-95%);
        opacity : 0;
        transition : all .4s linear;
        display : flex;
        padding : 20px;
        position : absolute;
        transform-origin : top left;
        top : 0px;
        z-index: 99;
    }

    #chat-head:hover {
        transform : translateY(0%);
        opacity : 1;
    }

    .avatar i {
        position : relative;
        bottom : 15px;
        font-size : 12px;
        left : 30px;
        color : blue;
    }

    .avatar img {
        height : 40px;
        min-width : 40px;
        max-width : 40px;
        border-radius : 50%;
        box-shadow : 0px 0px 12px gray, inset 0px 0px 8px blue;
    }

    .avatar img:hover {
        box-shadow : inset 0px 0px 15px rgb(104, 13, 13);
        transform : scale(1.1);
        transition : all .5s linear;
    }
    .chatName {
        margin-left : 10px;
        margin-top : 2px;
        max-height : 35px;
        display : flex;
        flex-direction : column;
        justify-content : center;
        min-width : 45px;
    }

    .chatName h6 {
        height : 10px;
        font-size : 16px;
        font-weight : bold;
    }

    .chatName span {
        font-size : 8px;
        height : 10px;
    }

    .chat-content {
        min-height : 92%;
        max-height : 80vh;
        overflow-y : scroll;
        overflow-x : hidden;
        min-width : 100%;
        max-width : 100%;
        padding-top : 15px;
        position : absolute;
    }

    .chat-content::-webkit-scrollbar-thumb {
        background : blue;
        width : 2px;
    }

    .chat {
        min-height : 50px;
        min-width : 100%;
        max-width : 100%;
        overflow :auto;
    }

    .chat-message {
        min-height : 28px;
        min-width : 200px;
        max-width : 50vw;
        padding : 5px;
        padding-left : 10px;
        color : white; 
        margin-bottom : 5px;  
        position : relative;
    }

    .chat-message p {
        max-width : 46vw;
        cursor : none;
    }

    .chat.chat-left {
        padding-left : 10px;
    }

    .chat-left .chat-body .chat-message {
        border-top-right-radius : 20px;
        border-bottom-left-radius : 20px;
        border-bottom-right-radius : 20px;
    }

    .chat.chat-right .chat-body .chat-message {
        border-top-left-radius : 20px;
        border-bottom-left-radius : 20px;
        border-bottom-right-radius : 20px;
    }

    .chat.chat-right {
        padding-right : 10px;
    }

    .chat-right .chat-message {
        background : var(--color_light2_pry);
        padding : 8px;
    }

    .chat-left .chat-message {
        background : var(--color_dark2_pry);
    }

    .chat-body {
        display : flex;
        flex-direction : column;
        min-width : 100%;
        max-width : 100%;
        min-height : 100%;
    }

    .chat-right .chat-body {
        align-items : flex-end;
    }

    .chat-right .time {
        padding-right : 40px;
    }
    .chat-footer {
        min-height : 8%;
        max-height : 8%;
        min-width : 100%;
        max-width : 100%;
        display : flex;
        position : absolute;
        bottom : 0px;
        background : rgba(255, 255, 255, 0.5);
        backdrop-filter : blur(10px);
    }

    .chat-footer i {
        margin-right : 8px;
        margin-bottom : 15px;
        float : right;
        font-size : 45px;
    }

    .chat-footer #form {
        width : 100%;
        padding : 4px 4%;
        margin-bottom : 0px;
        min-height : 100%;
    }

    #form input {
        width : 100%;
        height : 88%;
        border : none;
        box-shadow : inset 0px 0px 4px var(--color_dark2_pry);
        font-size : 16px;
        margin-bottom : 20px;
        border-radius : 8px;
    }

    .chat-message img {
        position : absolute;
        bottom : 10px;
        right : 10px;
        width : 20px;
        height : 20px;
        border-radius : 50%;
    }

    .time {
        font-size : 8px;
        margin-top : -4px;
        transform : scaleY(0);
        transform-origin : top;
    }
    
    .chat-left .time {
        padding-left : 40px;
    }

    .chat-message:hover + .time {
        transform : scaleY(1);
        transition : transform .2s ease-out;
    }

    #form input:focus {
        outline : none;
    }

    #form input::placeholder {
        font-size : 12px;
    }

    .room-list {
        min-height : 100%;
        max-height : 100%;
        min-width : 40%;
        max-width : 40%;
        background : white;
        overflow : hidden;
    }

    .room-list h3 {
        text-align : center;
    }

    .room-list ul {
        display : flex;
        flex-direction : column;
        min-height : 100%;
        max-height : 99%;
        min-width : 99%;
        overflow-y : scroll;
        padding : 10px 25px;
    }

    .room-list ul li {
        min-height : 60px;
        max-height : 60px;
        min-width : 100%;
        max-width : 100%;
        background : white;
        box-shadow : inset 0px 0px 4px var(--color_dark2_pry);
        margin : 20px 0px;
        color : blue;
        display : flex;
        align-items : center;
    }

    .room-list ul li:hover {
        background : var(--color_dark2_pry);
        color : white;
        transition : all .18s linear;
    }

    .room-list ul li i {
        margin-right : 12px;
    }
    .offline {
        font-size : 14px;
        color : blue;
    }

    .online {
        font-size : 16px;
        color : green;
    }

    .room-list ul li img {
        height : 40px;
        width : 40px;
        border-radius : 50%;
        margin : 10px;
    }

    .main {
        background : rgba(250, 250, 250, 0.684);
        backdrop-filter : blur(10px);
    }

    .goBack {
        display : none;
    }

    #room-info {
        min-width : 100%;
        max-width : 100%;
        min-height : 100%;
        max-height : 100%;
        box-shadow : inset 1px 0px 5px grey;
        background : white;
        display : flex;
        align-items : center;
    }

    #room-info h4 {
        text-align : center;
        width : 100%;
        font-weight : bolder;
        color : blue;
    }

    #toBottom {
        position : absolute;
        min-width : 100%;
        max-width : 100%;
        top : 80%;
        min-height : 4vh;
        max-height : 4vh;
        background : none;
        display : flex;
        justify-content : flex-end;
        align-content : center;
        z-index : 100;
        overflow : hidden;
    }

    #toBottom i {
        font-size : 2vh;
        color : white;
        background : purple;
        height : 4vh;
        width : 4vh;
        border-radius : 50%;
        text-align : center;
        padding-top : 1vh;
        margin-right : 10px;
        font-weight : bolder;
        display : none;
        cursor : pointer;
    }

    #toBottom.yeah i {
        display : inline-block;
        animation : slideInRight 1s linear forwards;
    }

    #details {
        min-height : 100%;
        min-width : 100%;
        position : absolute;
        background : white;
        z-index : 100;
        display : none;
    }

    #details.showInfo {
        display : block; 
    }

    #details button {
        width : 60px;
        height : 60px;
    }

    #details button * {
        position : absolute;
        top : 5px;
        left : 5px;
        font-size : 40px;
        opacity : 0;
    } 

    #details button #one {
        opacity : .7;
    }
    
    #details button:hover * {
        animation-name : appear;
        animation-delay : var(--delay);
        animation-duration : .3s;
        animation-timing-function: ease-in-out;
        animation-fill-mode : var(--stop);
    }

    #details button:hover #one {
        opacity : 0;
    }

    .close-head {
        position : absolute;
        right : 8px;
        top : 2vh;
        height : 5.2vh;
        width : 5.2vh;
        border : 3px blue dotted;
        border-radius : 50%;
        display : none;
    }

    .close-head:hover {
        background : blue;
        color : white;
        border : 2px solid rgb(114, 16, 16);
        transition : all .5s linear;
    }
    
    @keyframes appear {
        to {
            opacity : 1;
        }
    }

    #close-chatBox {
        background : none;
        animation : close-chatBox 1.4s linear forwards;
    }

    @keyframes close-chatBox {
        98% {
            opacity : 1;
            transform : scale(1);
        }
        100% {
            transform : scale(0);
            opacity : 0;
        }
    }

    #close-chatBox .chat-content {
        transform-origin : top;
        transform : scaleY(0);
        transition : transform .6s linear;
    }

    #close-chatBox .chat-footer {
        transform : translateY(-60vh);
        transition : transform .8s linear;
    }

    .contner {
        min-height : 87vh;
    }

    .friend .friend-name {
        position : relative;
        width : 100%;
    }

    .friend span {
        font-size : 10px;
        display : block;
        position : absolute;
        left : 0px;
        bottom : -14px;
    }

    @media screen and (max-width : 1200px) {
        .chat-message {
            max-width : 300px;
        }

        .chat-message p {
            max-width : 280px;
        }

        .room-list {
            z-index : 10;
        }

        .contner {
            position : relative;
        }

        .goBack {
            display : block;
        }

        .close-head {
            display : block;
        }
    }

    @media screen and (min-width : 1200px){

        .main {
            max-width : 70vw;
            margin-left : 15vw;
            margin-right : 1.5rem
        }
    }

    @media screen and (max-width : 764px) {
        .chat-message {
            max-width : 70%;
        }

        .chat-message p {
            max-width : 90%;
        }

        .contner {
            justify-content: space-around;
            padding : 4px 0px;
        }
        
        #room-info {
            position: absolute;
            z-index : 100;
            display : none;
        }
        #room-info.room-info {
            display : flex;
        }

        #partition {
            position : absolute;
            min-height : 100%;
            max-height : 100%;
            min-width : 100%;
            max-width : 100%;
            z-index : 999;
            display : none;
        }

        .room-list {
            min-width : 100%;
        }

        #partition.mobile-look {
            display : flex;
        }
    }
</style>

    <div id = containsEm class="overflow-auto py-5">
        <div class="max-w-10xl mx-1 sm:px-6 lg:px-8 biggie">
            <div class="main animated wobble overflow-hidden shadow-sm sm:rounded-lg">
                <div class="chat-app p-4 contner border-b border-grey-50 flex justify-between">
                    <div id = partition>
                        <div class="chatBox">
                            
                        </div>

                        <div id = room-info>
                            <h4>The Room's info goes here</h4>
                            <div id = details>
                                <button id = "close">
                                    <i id = one style = "--delay : .5s;--stop : initial;" class = "bi bi-dice-1-fill"></i>
                                    <i style = "--delay : 1s;--stop : initial;" class = "bi bi-dice-2-fill"></i>
                                    <i style = "--delay : 1.5s;--stop : initial;" class = "bi bi-dice-3-fill"></i>
                                    <i style = "--delay : 2s;--stop : initial;" class = "bi bi-dice-4-fill"></i>
                                    <i style = "--delay : 2.5s;--stop : initial;" class = "bi bi-dice-5-fill"></i>
                                    <i style = "--delay : 3s; --stop : forwards;" class = "bi bi-dice-6-fill"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    

                    <div class = room-list>
                            <h3>Chat Rooms</h3>
                        <ul id = list-of-rooms>
                            @foreach ($chatrooms as $room)

                                <li class = "room" data-port = {{$room->port}}><img src="{{asset('images/1.jpg')}}" /><div class = "room-name"><p> {{ $room->room_name }} </p></div></li>
                            
                            @endforeach
                        </ul>

                    </div>
                </div>
            </div>
        </div>
    </div>

<script>

    document.querySelectorAll('.room').forEach(room => {
        room.addEventListener('click', () => {
            document.querySelector('.chatBox').id = "";
            var port = parseInt(room.getAttribute('data-port'));
            //Open Socket when room is clicked.
            conn = new WebSocket(`ws://localhost:${port}`);
            conn.onerror = () => {
                console.log('Nope');
            }
            //When Socket Opens
            conn.onopen = function(e) {
                document.getElementById('partition').classList.toggle('mobile-look');
                document.querySelector('.chatBox').innerHTML = `
                    <div id = chat-head>
                        <div class="avatar">
                            <img src="{{asset('images/3.jpg')}}" alt="" srcset="">
                            <i class = "active bi bi-circle-fill"></i>
                        </div>
                        <div class = "chatName">
                            
                            <h6>${room.querySelector('.room-name p').innerHTML}</h6>
                            <span>78 Occupants</span>
                        </div>
                        
                        <button class = close-head>close</button>
                    </div>
                
                    <div id = chat-content class="chat-content">
                        
                    </div>
                    <div id = toBottom>
                        <i class = "bi bi-box-arrow-down"></i>
                    </div>
                    <div class="chat-footer">
                    
                            <div id = form>
                                <input id = enterMessage type="text" placeholder="Type your message...">
                            </div>
                            
                                <i id = send class = "bi bi-play-fill"></i>
                            
                    </div>`;

                document.querySelector('.chatBox').classList.add('minied');

                const content = document.getElementById('chat-content');
                content.scrollTo( { top : content.scrollHeight } );
                content.onscroll = () => {
                    document.getElementById('toBottom').classList.toggle('yeah', parseInt(content.scrollHeight - content.scrollTop) > ( content.offsetHeight + 50 ));
                };

                document.getElementById('enterMessage').addEventListener('keypress', (e) => {
                        if ( e.keyCode === 13) {
                            if (document.getElementById('enterMessage').value != ''){
                                document.getElementById('chat-content').innerHTML += `
                                    <div class="chat chat-right">
                                        <div class="chat-body">
                                            <div class="chat-message"><p>${document.getElementById('enterMessage').value}</p></div>
                                                <p class = "time">${new Date().getHours()} : ${new Date().getMinutes()}p.m.</p>
                                        </div>
                                    </div>
                                `;

                                conn.send(document.getElementById('enterMessage').value);
                                document.getElementById('enterMessage').value = '';
                                content.scrollTo( { top : content.scrollHeight } );
                            };
                        };
                    }
                );

                document.querySelector('.close-head').addEventListener('click', () => {
                    document.querySelector('.chatBox').id = "close-chatBox";
                    conn.close();
                    setTimeout(() => {
                        document.querySelector('.chatBox').innerHTML = "";
                        setTimeout(() => {
                        document.getElementById('partition').classList.toggle('mobile-look');
                    }, 500);
                        document.querySelector('.chatBox').classList.remove('minied');
                    }, 1500);
                });
                
                document.querySelector('#toBottom i').addEventListener('click', () => {
                    content.scrollTo( { top : content.scrollHeight } );
                });

                document.getElementById('send').addEventListener('click', () => {
                    if (document.getElementById('enterMessage').value != ''){
                        document.getElementById('chat-content').innerHTML += `
                            <div class="chat chat-right">
                                <div class="chat-body">
                                    <div class="chat-message"><p>${document.getElementById('enterMessage').value}</p></div>
                                        <p class = "time">${new Date().getHours()} : ${new Date().getMinutes()}p.m.</p>
                                </div>
                            </div>
                        `;

                        conn.send(document.getElementById('enterMessage').value);
                        document.getElementById('enterMessage').value = '';
                        content.scrollTo( { top : content.scrollHeight } );
                    };
                });

                document.querySelector('.avatar img').addEventListener('click', () => {
                    document.getElementById('details').classList.add('showInfo');
                    document.querySelector('#room-info').classList.add("room-info");
                });

                document.querySelector('#details #close').addEventListener('click', () => {
                    document.querySelector('#details').classList.remove('showInfo');
                    document.querySelector('#room-info').classList.remove('room-info');
                });
            };

            conn.onmessage = function(e) {
                console.log(e.data);
                document.getElementById('chat-content').innerHTML += `
                    <div class="chat chat-left">
                        <div class="chat-body">
                            <div class="chat-message"><p>${e.data}</p></div>
                                <p class = "time">${new Date().getHours()} : ${new Date().getMinutes()}p.m.</p>
                        </div>
                    </div>`;

                content?.scrollTo( { top : content.scrollHeight } );
            };
        });
    });
    
    

</script>
</x-master>