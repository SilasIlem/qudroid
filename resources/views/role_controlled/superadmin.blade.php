<x-master>

    <x-slot name="header">
        <div id = superadmintop>
            <i class = "bi bi-plus" onclick = supermenu()></i>
            <h4 style = "min-width : 80vw; margin-left : 40px; animation-duration : 4s; color : white" class="animated slideInRight font-bold text-center leading-tight">
                {{ Auth::user()->name }}
            </h4>
        </div>
    </x-slot>

    <style>

        *::-webkit-scrollbar {
            width : 5px;
        }

        #superadmintop {
            display : flex;
            justify-content: space-between;
        }

        #superadmintop i {
            height : 100%;
            width : 10vw;
            font-size : 30px;
            padding-top : 5px;
            background : inherit;
        }

        fieldset {
            min-width : 80vw;
            max-width : min-content;
            min-height : 400px;
            padding : 5px;
            border : 1px solid black;
        }

        .cont {
            display : flex;
            align-items : center;
            justify-content: center;
            padding-top : 40px;
            flex-direction : column;
        }

        legend {
            padding : 5px 12px;
            border : 0px;
            text-align : center;
            width : 200px;
        }

        #allcontained {
            margin : 10px;
            min-height : 390px;
            overflow-x : scroll;
        }

        #allcontained table {
            min-width : 80vw;
            max-width : 80vw;
            overflow : scroll;
            max-height : 50px;
            border-collapse : collapse;
        }

        #allcontained table * {
            padding : 8px;
            border : 1px black solid;
        }

        .dialog {
            position : absolute;
            min-height : 60vh;
            max-height : 60vh;
            min-width : 50vw;
            max-width : 50vw;
            top : 20vh;
            display : none;
            background : var(--glassy_background_light_pry_2);
        }

        #view.show {
            display : block;
        }

        #edit.show {
            display : block;
        }

        #delete.show {
            display : block;
        }

        .button {
            width : 100px;
            padding : 2px 5px;
            color : var(--natural_color_light);
            margin : 5px;
        }

        .b-view {
            background : var(--color_dark2_pry);
        }

        .b-edit {
            background : var(--color_light2_pry);
        }

        .b-delete {
            background : var(--natural_color_dark)
        }
        .dialog button {
            position : absolute;
            top : 5px;
            height : 50px;
            color: var(--natural_color_light);
            width : 50px;
            right : 5px;
        }
        #menu {
            display : flex;
            justify-content: space-around;
            align-items : center;
            color : var(--natural_color_light);
            position : fixed;
            left : 0px;
            flex-direction : column;
            height : 100%;
            width : 200px;
            transform : translateX(-220px);
            transition : all .5s linear;
            background : var(--color_dark2_pry);
        }

        #menu.opensupermenu {
            transform : translateX(0px);
        }
    </style>

    
<style>
    * {
        padding : 0px;
        margin : 0px;
        box-sizing : border-box;
    }

    *:not(body)::-webkit-scrollbar {
        display : none;
    }  

    body {
        overflow-x : hidden;
        overflow-y : scroll;
    }

     .container {
        min-height : 250vh;
        min-width : 100vw;
        overflow-x : hidden;
        overflow-y : scroll;
        background : white;
     }

    #adminlinks {
        height : 100vh;
        min-width : 240px;
        background : black;
        position : fixed;
        z-index : 1;
        top : 0vh;
        left : 0px;
        display : flex;
        list-style : none;
        flex-direction: column;
        justify-content : space-around;
        align-items : center;
        transition : all .1s linear;
    } 

    #adminlinks i.bi-list.admins {
        position : absolute;
        font-size : 30px;
    }

    #adminlinks h2 span {
        color : white;
        text-align : center;
    }

    #adminlinks li {
        min-width : 100%;
        height : 45px;
        text-align : center;
        position : relative;
        padding-top : 16px;
        color : white;
    }

    #adminlinks p span {
        width : 170px;
        margin-left : 10px;
    }

    #adminlinks i {
        color : white;
        text-align : center;
        position : absolute;
        height : 100%;
        left : 30px;
    }

    #adminlinks li:hover {
        background : rgb(255, 255, 255);
        color : grey;
    }

    #adminlinks li:hover i {
        color : grey;
    }

    .container.under #adminlinks {
        animation : toplinks .3s linear forwards;
    }

    @keyframes toplinks {
        0% {
            opacity : 0;
        }

        20% {
            opacity : 0;
        }

        80% {
            top : 0px;
            position : fixed;
            left : 0vw;
            height : 50px;
            flex-direction: row;
            min-width : 100vw;
            opacity : 0;
            max-width : 100vw;
        }

        90% {
            opacity : 0;
        }

        100% {
            opacity : 1;
            top : 0px;
            position : fixed;
            left : 0vw;
            height : 50px;
            flex-direction: row;
            min-width : 100vw;
            max-width : 100vw;
        }
    }

    #mini-container {
        position : absolute;
        right : 12px;
        top : 80px;
        min-width : calc(100vw - 140px);
        max-width : calc(100vw - 140px);
        padding : 28px;
        box-shadow : 0px 0px 200px rgb(199, 199, 199);
        border-radius : 8px;
    }

    .container.under #mini-container {
        min-width : calc(100vw - 12px);
        max-width : calc(100vw - 12px);
    }

    .container.under #adminlinks h2 {
        display : none;
    }

    .container.under #adminlinks li {
        min-width : 120px;
        max-width : 120px;
    }

    #adminlinks.little {
        min-width : 80px;
        max-width : 80px;
    }

    #adminlinks.little span, .container.under span {
        display : none;
    }

    .adminlinks-tooltip {
        position : absolute;
        background :rgb(255, 255, 255);
        padding : 16px;
        top : 0px;
        border-radius : 8px;
        box-shadow : 0px 0px 4px grey;
        left : 120px;
        color : grey;
        opacity : 0;
        width : 200px;
        pointer-events : none;
    }
    
    #adminlinks.little li:hover .adminlinks-tooltip, .container.under li:hover .adminlinks-tooltip {
        width : max-content;
        opacity : 1;
    }

    .container.under li, .container.under p {
        display : flex;
        justify-content: center;
    }

    .container.under i {
        position : relative;
    }


    .container.under .adminlinks-tooltip {
        top : 60px;
        left : 0px;
        color : grey;
    }

    #adminlinks i.bi-list.admins {
        left : 20px;
    }

    @media screen and (max-width : 1200px) {
        #adminlinks .link-head {
            display : none;
        }
    }
</style>

<div class = container>
    <ul id = adminlinks>

        <h2>
            <span>Menu</span>
            <i onclick = "toggleMenu();" class = "bi bi-list admins"></i>
        </h2>
        
       
        <li class = link>
            <a href="">
            <p><i class = "bi bi-grid"></i><span>Dashboard</span></p>
            <div class="adminlinks-tooltip">Dashboard</div>
            </a>
        </li>
       
        <li class = link>
            <p><i class = "bi bi-images"></i><span>Images</span></p>
            <div class="adminlinks-tooltip">Images</div>
        </li>
        <li class = link>
            <p><i class = "bi bi-newspaper"></i><span>Messages</span></p>
            <div class="adminlinks-tooltip">Messages</div>
        </li>
        <li class = link>
            <p><i class = "bi bi-file-earmark-zip"></i><span>File Manager</span></p>
            <div class="adminlinks-tooltip">File Manager</div>
        </li>
        <li class = link>
            <p><i class = "bi bi-keyboard"></i><span>Settings</span></p>
            <div class="adminlinks-tooltip">Settings</div>
        </li>
        <li class = link>
            <p><i class = "bi bi-cpu"></i><span>Analytics</span></p>
            <div class="adminlinks-tooltip">Analytics</div>
        </li>
       
      
    </ul>


<!-- chart libraries start -->
<script src="{{asset('bower_components/flot/excanvas.min.js')}}"></script>
<script src="{{asset('bower_components/flot/jquery.flot.js')}}"></script>
<script src="{{asset('bower_components/flot/jquery.flot.pie.js')}}"></script>
<script src="{{asset('bower_components/flot/jquery.flot.stack.js')}}"></script>
<script src="{{asset('bower_components/flot/jquery.flot.resize.js')}}"></script>
<!-- chart libraries end -->
<script src="{{asset('js/init-chart.js')}}"></script>
        
<script>
    window.addEventListener('scroll', () => {
        const container = document.querySelector('.container');
        container.classList.toggle("under", window.scrollY > 1000);
    });

    function toggleMenu() {
        document.getElementById('adminlinks').classList.toggle('little');
    };
</script>

    <ul id = menu>
        <li>Home</li>
        <li>Admins</li>
        <li>View</li>
        <li>Fly Away</li>
        <li>Do Something</li>
    </ul>
    <div style = "display : flex; justify-content : center;" class="py-5">
        <div style = "width : 100%;" class=" mx-1 sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-4 cont bg-white border-b border-grey-50 ">
                    <div class = dialog id = view>
                        <h2>View User Well WEll</h2>
                        <button onclick = "document.getElementById('view').classList.toggle('show');">close</button>
                    </div>
                    <div class = dialog id = edit>
                        <h2>Edit User Nibi</h2>
                        <button onclick = "document.getElementById('edit').classList.toggle('show');">close</button>
                    </div>
                    <div class = dialog id = delete>
                        <h2>Delete User Danun Danun</h2>
                        <button onclick = "document.getElementById('delete').classList.toggle('show');">close</button>
                    </div>
                    <fieldset>
                        <legend>All Users</legend>
                    

                    <table style = "max-width : 90vw;" class="table table-striped table-bordered bootstrap-datatable datatable responsive">
                        <thead>
                        <tr>
                            <th>Username</th>
                            <th>Date registered</th>
                            <th>Role</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                    
                                <tr>
                                    <td>{{$user->name}}</td>
                                    <td class="center">{{$user->created_at}}</td>
                                    <td class="center">
                                        @if($user->roles()->pluck('name')->contains('superadmin'))
                                            SuperAdmin
                                        @elseif($user->roles()->pluck('name')->contains('admin'))
                                            Admin
                                        @else
                                            User
                                        @endif    
                                    </td>
                                    <td class="center">
                                        <span class="label-success label label-default">Active</span>
                                    </td>
                                    <td class="center">
                                        <a class="button b-view" href="javascript:void(0); var user = '{{$user->email}}';document.getElementById('view').classList.toggle('show');">
                                            <i class="glyphicon glyphicon-zoom-in icon-white"></i>
                                            View
                                        </a>
                                        <a class="button b-edit" href="javascript:void(0); var user = '{{$user->email}}';document.getElementById('edit').classList.toggle('show');">
                                            <i class="glyphicon glyphicon-edit icon-white"></i>
                                            Edit
                                        </a>
                                        <a class="button b-delete" href="javascript:void(0); var user = '{{$user->email}}';document.getElementById('delete').classList.toggle('show');">
                                            <i class="glyphicon glyphicon-trash icon-white"></i>
                                            Delete
                                        </a>
                                    </td>
                                </tr>
                       
                            @endforeach
                        </tbody>
                        </table>
                    </fieldset>
                    <fieldset>
                        <legend>All Roles</legend>
                        <div id = allcontained>
                            <table>
                                <thead>
                                    <tr>
                                        <th>
                                            Username
                                        </th>
                                        <th>
                                            Email
                                        </th>
                                        <th>
                                            Admin?
                                        </th>
                                        <th>
                                            SuperAdmin?
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($users as $user) 
                                    <tr>
                                        <td>{{$user->name}}</td>
                                        <td>{{$user->email}}</td>
                                        @if($user->roles()->pluck('name')->contains('admin'))
                                            <td>Yes</td>
                                        @else
                                            <td>No</td>
                                        @endif
                                        @if($user->roles()->pluck('name')->contains('superadmin'))
                                            <td>Yes</td>
                                        @else
                                            <td>No</td>
                                        @endif
                                    </div>
                                    
                                    
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </fieldset>

                </div>
            </div>
        </div>
    </div>
    <script>
        const supermenu = () => {
            document.getElementById('menu').classList.toggle('opensupermenu');
            document.getElementById('')
        }
    </script>
</x-master>