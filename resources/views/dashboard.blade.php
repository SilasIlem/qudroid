<x-master>
    <x-slot name="header">
        <h4 style = "width : 100vw; animation-duration : 4s; color : white;" class="animated slideInLeft font-bold text-center leading-tight">
            {{__("Qudroid Systems")}}
        </h4>
    </x-slot>

    	<!-- Morris Charts CSS -->
      <link href="{{ asset('vendors/bower_components/morris.js/morris.css') }}" rel="stylesheet" type="text/css"/>
	
      <!-- Data table CSS -->
      <link href="{{ asset('vendors/bower_components/datatables/media/css/jquery.dataTables.min.css') }}" rel="stylesheet" type="text/css"/>
      
      <link href="{{ asset('vendors/bower_components/jquery-toast-plugin/dist/jquery.toast.min.css') }}" rel="stylesheet" type="text/css">
        
      <!-- Custom CSS -->
      
      <link rel="stylesheet" href="{{ asset('css/bootstrap-icons/bootstrap-icons.css') }}" />
    
    
<style>
 
.show {
  display : block;
}

.proMems {
  text-align : right;
}

#grid1 h2 {
  color : white;
}

.news div {
  min-width : 150px;
  text-align : center;
}

@media screen and (min-width : 764px){
  .proMems{
    max-width : 69vw;
  }

  #firstQ {
    -webkit-clip-path: polygon(0 0, 0% 100%, 100% 0);
    clip-path: polygon(0 0, 0% 100%, 100% 0);
  }

  #secondQ {
    -webkit-clip-path: polygon(100% 100%, 0% 100%, 100% 0); 
    clip-path: polygon(100% 100%, 0% 100%, 100% 0);
  }
}

.topbar {
  display : flex;
  flex-direction : row;
  position : sticky;
  width : 80vw;
  float : right;
  justify-content : space-around;
  align-items : center;
  min-height : 120px;
  padding-top : 50px;
  flex-wrap : wrap;
  overflow-y : initial;
}

@media screen and (max-width : 764px){


  #containsEm {
    width : 100vw;
  }

  .proMems {
    text-align : left;
    min-width : 80w;
  }

  span#firstQ {
    font-size : 0.5em;
  }
  
  span#secondQ {
    display : none;
  }
  img#dashlogo.up {
    display : none;
  }
  .boxcont {
    position : fixed;
    z-index : 100000000;
    width : 30px;
    height : 30px;
    bottom : 15px;
    left : var(--pos);
  }
}

.box {
  position : fixed;
  z-index : 100000000;
  width : 30px;
  height : 30px;
  bottom : 15px;
  transform : rotateX(-30deg);
  animation : animate 4s linear infinite;
  left : var(--pos);
  transform : rotateX(-30deg);
  transform-style : preserve-3d;
}

.box:hover span {
  background : linear-gradient(var(--back), var(--glassy_background_light_pry_1));
  transition : background 5s linear;
}

.box:hover + .boxOptions {
  display : flex;
}

@keyframes animate {
  from {
    transform : rotateX(-30deg) rotateY(0deg);
  }
  to {
    transform : rotateX(-30deg) rotateY(360deg);
  }
}

.sides {
  position : absolute;
  top : 0;
  left : 0;
  width : 100%;
  height : 100%;
  transform-style : preserve-3d;
}

.sides span{
  top : 0;
  left : 0px;
  position : absolute;
  min-width : 100%;
  min-height : 100%;
  background : linear-gradient(var(--glassy_background_light_pry_1), var(--back));
  transform : rotateY(calc(90deg*var(--i))) translateZ(15px);
}

.itemsOptions {
  position : fixed;
  bottom : 40px;
  left : var(--pos);
  z-index : 100000000;
  min-height : 200px;
  width : 45px;
  border-bottom-left-radius: 10px;
  display : none;
  border-bottom-right-radius: 10px;
}

.boxcont:hover .itemsOptions {
  display : block;
}

.itemsOptions ul {
  display : flex;
  flex-direction : column;
  min-width : 100%;
  max-width : 100%;
  min-height : 100%;
  justify-content : space-around;
  align-items : center;
  color : white;
  font-size : 18px;
}

.itemsOptions ul li {
  border : 1px solid black;
  padding : 5px;
  margin : 10px;
  background : var(--back);
  border-radius : 50%;
  animation : slideUP var(--up) linear forwards;
  margin-left : var(--left);
}

@keyframes slideUP {
  from {
    opacity : 0;
    transform : translateY(20px) rotatez(-20deg);
  }

  to {
    opacity : 1;
    transform : translateY(0px) rotatez(-20deg);
  }
}

#dashlogo {
  width : 80px;
  height : 80px;
  position : fixed;
  top : 20px;
  left : 7vw;
  border-radius : 50%;
  box-shadow : 0px 0px 8px green,
              0px 0px 12px yellow,
              0px 0px 18px red,
              0px 0px 26px blue;
  z-index : -2;
  cursor : pointer;
  display : none;
}

@media screen and (min-width : 1500px){
  #dashlogo {
    left : 8.5vw;
  }
}
.img-thumbnail {
  margin-top : 20px;
}

#dashlogo:hover {
  box-shadow : inset 0px 0px 8px rgb(31, 255, 244),
              0px 0px 26px blue;                 
}  

body {
  background : rgb(238, 233, 233);
}

#grid1 .searchable {
  color : white;
} 

.proMem {
  min-height : 300px;
  min-width : 100%;
  max-width : 100%;
  margin : 20px 0px;
  overflow-x : hidden;
}

.proMem .innerdiv {
  min-width : 100%;
  min-height : 300px;
  transition : all .5s ease-in-out;
  z-index : 5;
}

.innerdiv.left {
  transform : translateX(-50%);
}

.innerdiv.right {
  transform : translateX(50%);
}

.proMem:hover .innerdiv {
  transform : translateX(0%);
}

@media screen and (min-width : 1024px){
  
  .innerdiv.left {
    transform : translateX(-60%);
  }

  .innerdiv.right {
    transform : translateX(60%);
  }

}

.innerdiv.left {
  display : flex;
  flex-direction : row-reverse;
}

.innerdiv.right {
  display : flex;
}

.innerdiv img {
  height : 300px;
  width : 300px;
  border-radius : 50%;
}

.innerdiv div {
  min-width : 50%;
  max-width : 50%;
  min-height : 300px;
}

.innerdiv div {
  display : flex;
  flex-direction : column;
  justify-content : space-around;
  background : white;
}

.innerdiv.left div {
  align-items : flex-start;
  text-align : left;
}

.innerdiv.right div {
  align-items : right;
}

.innerdiv div p {
  color : grey;
}

.innerdiv div p span {
  font-size : 18px;
  text-decoration : underline;
  font-weight : bolder;
  text-transform : uppercase;
  margin-right : 20px;
}

.floating {
  min-height : 50px;
  position : absolute;
  min-width: 50px;
  max-width: 50px;
  border : 2px solid yellow;
  animation : float var(--s) linear infinite;
}

@keyframes float {
  to {
    transform : translateX(500px) rotate(5deg) translateY(300px);
  }
}

@media screen and (max-width : 1164px){
  .proMem .left img {
    margin-left : -50px;
    width : 180px;
    height : 180px;
    z-index : 10;
  }

  .proMem .right img {
    margin-right : -50px;
    width : 180px;
    height : 180px;
    z-index : 10;
  }

  .proMem .innerdiv div {
    opacity : 0;
  }

  .proMem:hover img {
    opacity : 0;
    transition : all .3s linear;
  }

  .proMem:hover .left div {
    opacity : 1;
    transform : translateX(40px);
  }

  .proMem:hover .right div{
    opacity : 1;
    transform : translateX(-40px);
  }
}

#bPortCont {
  width : 100%;
  height : 100px;
  display : flex;
  justify-content: center;
  align-items : center;
  padding-top : 50px;
}

#bPort {
  padding : 10px;
  border-radius : 8px;
  border : 2px solid white;
  outline : 2px solid blue;
  color : white;
  background :rgb(18, 18, 136);
}

#portfolioShow {
  max-width : 100%;
  display : flex;
  flex-wrap : wrap;
}

.navbar-to-top {
  position : sticky;
  top : 0px;
  display : flex;
  margin : 0px;
  max-width : 100%;
  height : 80px;
  background : white;
}

.navbar-to-top img {
  height : 50px;
  width : 50px;
}

@media screen and (min-width: 768px){
  .container {
      width: 100%;
  }
}

</style>

<div class="boxcont" style = "--pos : 2vw; --back : var(--color_dark2_pry);">
<div class = box >
  <div class="sides">
    <span class="side" style = "--i : 0"></span>
    <span class="side" style = "--i : 1"></span>
    <span class="side" style = "--i : 2"></span>
    <span class="side" style = "--i : 3"></span>
  </div>
</div>

<div class="itemsOptions" style = "--pos : 1.8vw; --back : var(--color_dark2_pry);">
  <ul>
    <li style = "--up : .5s; --left : 50px">One</li>
    <li style = "--up : 1s; --left : 0px">Two</li>
    <li style = "--up : 1.5s; --left : 50px;">Three</li>
  </ul>
</div>
</div>
<div class="boxcont" style = "--pos : 10.4vw; --back : var(--color_light2_pry);">
<div id = midbox class = box >
  <div class="sides">
    <span class="side" style = "--i : 0"></span>
    <span class="side" style = "--i : 1"></span>
    <span class="side" style = "--i : 2"></span>
    <span class="side" style = "--i : 3"></span>
  </div>
</div>

<div class="itemsOptions" style = "--pos : 10.2vw; --back : var(--color_light2_pry);">
  <ul>
    <li style = "--up : .5s; --left : 0px">One</li>
    <li style = "--up : 1s; --left : 0px">Two</li>
    <li style = "--up : 1.5s; --left : 0px;">Three</li>
  </ul>
</div>
</div>
<div class="boxcont" style = "--pos : 19vw; --back : var(--color_dark_pry);">

<div class = box >
  <div class="sides">
    <span class="side" style = "--i : 0"></span>
    <span class="side" style = "--i : 1"></span>
    <span class="side" style = "--i : 2"></span>
    <span class="side" style = "--i : 3"></span>
  </div>
</div>

<div class="itemsOptions" style = "--pos : 18.6vw; --back : var(--color_dark_pry);">
  <ul>
    <li style = "--up : .5s; --left : -50px">One</li>
    <li style = "--up : 1s; --left : 0px">Two</li>
    <li style = "--up : 1.5s; --left : -50px;">Three</li>
  </ul>
</div>
</div>

<img id = dashlogo src="{{asset('./images/' . Auth::user()->avatar .'.jpg')}}" alt="">
<div class = "topbar animated slideInRight" style = "animation-duration: 3s;">
  <div class="news" style = "--color : var(--unusual_color_light)">

    <a data-toggle="tooltip" title="<?php
      if(sizeof($users) == 1){
        echo "1 Member";
      } else {
        echo sizeof($users) . " new Members";
      } ?>"
     class="well top-block" href="#" data-original-title="6 new members.">
        <i class="glyphicon glyphicon-user blue"></i>

        <div>Total Members</div>
        <div></div>
        <span class="notification">
          {{sizeOf($users)}}
        </span>
    </a>
</div>
<div class="news" style = "--color : var(--color_dark2_pry)">
      <?php $admins = 0 ?>
        @foreach ($users as $user)

          @if($user->roles->pluck('name')->contains('admin'))
            <?php $admins += 1 ?>
          @endif
            
        @endforeach
  <a data-toggle="tooltip" title="{{$admins}} Group Members." class="well top-block" href="#pro">
      <i class="glyphicon glyphicon-star green"></i>

      <div>Group Members</div>
      <div>
        
        
      </div>
      <span class="notification green">{{$admins}}</span>
  </a>
</div>
<div class="news" style = "--color : var(--color_dark_pry)">
  <a data-toggle="tooltip" title="5 new events in Gallery." class="well top-block" href="{{route('gallery')}}">
      <i class="glyphicon glyphicon-star green"></i>

      <div>Events</div>
   
      <span class="notification red">4</span>
  </a>
</div>
<div class="news" style = "--color : var(--color_light2_pry);">
  <a data-toggle="tooltip" title="17 new messages." class="well top-block" href="{{route('chats')}}">
      <i class="glyphicon glyphicon-star green"></i>

      <div>Messages</div>

      <span class="notification yellow">17</span>
  </a>
</div>
</div>

<style>
  #details {
    min-height : calc(100vh - 150px);
    min-width : 20vw;
    /* background : rgb(255, 255, 255); */
    position : fixed;
    display : flex;
    justify-content: space-between;
    top : 140px;
    padding : 8px;
    z-index : 999999999;
  }

  #onlyshown {
    min-height : 100%;
    min-width : 20vw;
    max-width : 20vw;
  }

  .latershown {
    min-width : 74vw;
    max-width : 76vw;
    opacity : 0;
    pointer-events : none;
    background : white;
    position : fixed;
    right : 40px;
    min-height : calc(100vh - 150px);
    top : 140px;
    overflow-x : scroll;
    transition : all 1s linear;
  }

  li button.nowshows + .latershown {
    pointer-events : initial;
    opacity : 1;
    transition : all 1s linear;
  }

  #onlyshown > ul {
    display : flex;
    flex-direction : column;
    justify-content : space-between;
    height : 50vh;
  }

  #onlyshown li > button {
    margin : auto;
    background : white;
    border-radius : 8px;
    height : 60px;
    width : 100%;
    padding : 4px;
    box-shadow : 0px 0px 16px grey;
  }

  #onlyshown li .description {
    transform : scaleY(-100px);
    display : none;
    transition : all .3s linear;
    z-index : -1;
    max-height : 0px;
  }

  #onlyshown li:hover .description {
    transform : scaleY(0px);
    transition : all .8s linear;
    min-height : 32px;
    max-height : max-content;
    display : block;
    width : 90%;
    box-shadow : inset 0px 0px 8px grey;
    padding : 12px;
    background : white;
    margin : auto;
  }
</style>
<div id="details">
  <div id="onlyshown">
    <ul>
      <li class = personals>
        <button>My Details</button>
        
        <div class="latershown slideInRight">
          

          <style>
            #q-profile-container {
              min-height : 700px;
              max-height : 700px;
              margin : 8vh auto;
              width : 600px;
              overflow : hidden;
            }
            #q-profile-wrapper {
              min-height : 700px;
              max-height : 700px;
              display : flex;
              animation : trai 8s linear infinite;
              width : calc(600px * 4);
            }

            @keyframes train {
              25% {
                transform : translateX(-600px);
              }
              50% {
                transform : translateX(-1200px);
              }
              75% {
                transform : translateX(-1800px);
              }
              100% {
                transform : translateX(-2400px);
              }
            }
            .q-profile {
              min-height : 700px;
              max-height : 700px;
              background : rgb(247, 247, 247);
              min-width : 600px;
              box-shadow : 0px 0px 4px var(--color_dark2_pry);
              border-radius : 6px;
            }

            .q-profile img#back {
              height : 300px;
              width : 100%;
            }

            .q-profile #edit-frontdiv, .q-profile img#front {
              width : 150px;
              max-height : 160px;
            }

            .q-profile #edit-frontdiv {
              outline : 4px solid white;
            }

            .q-profile #edit-front {
              width : 100%;
              pointer-events : none;
              display : flex;
              justify-content: center;
              height : 160px;
              position : absolute;
              bottom : -50px;
            }

            .q-profile #edit-back {
              width : 100%;
              pointer-events : none;
              position : absolute;
            }

            .q-profile .bi-brush {
              position : absolute;
              bottom : 0px;
              width : 50px;
              height : 50px;
              padding : 16px;
              opacity : 0;
              transition : all .3s linear;
              color : white;
              background : rgba(128, 128, 128, 0.623);
              right : 0px;
            }

            .q-profile #edit-frontdiv:hover .bi-brush, .q-profile #edit-back:hover .bi-brush {
              opacity : 1;
              pointer-events : initial;
              cursor : pointer;
              transition : all .3s linear;
            }

            #p-block {
              margin-top : 120px;
              text-align : center;
            }

            #p-block h3 {
              color : orange;
            }

            #opinions {
              margin-top : 20px;
            }

            #opinions ul {
              display : flex;
              border-top : 1px grey solid;
              border-bottom : 1px grey solid;
              box-shadow : inset 0px 0px 8px grey;
              flex-direction : row;
              margin-right : 16px;
              justify-content: space-around;
              padding : 16px;
              align-items : center;
              height : 80px;
            }

            #opinions ul li {
              display : flex;
              flex-direction : column;
              align-items : center;
            }

            button#edit-profile {
              height : 30px;
              width : 300px;
              border : 1px solid grey;
              box-shadow : 0px 0px 8px var(--color_dark2_pry);
              border-radius : 8px;
              text-align : center;
              margin : 30px auto;
            }

          </style>
          <div id="q-profile-nav">
            <ul>
              <li><a href="#profile-1">Profile</a></li>
              <li><a href="#profile-2">Followers</a></li>
            </ul>
          </div>
          <div id="q-profile-container">
              
            <div id="q-profile-wrapper">
              <div class="q-profile">

                <div style = "position : relative;">
                  <div style = "position : relative;" id="edit-back">
                    <img id = "back" src="{{ asset('images/dashback.jpg') }}" alt="" />
                    <i class = "bi bi-brush"></i>
                  </div>
                  <div id = "edit-front">
                    <div id = edit-frontdiv style = "position : relative;">
                      <img id = "front" src="{{ asset('images/chatback.jpg')}}" alt="">
                      <i class = "bi bi-brush"></i>  
                    </div>
                  </div>
                </div>
                <div id = "p-block">
                  <h3>{{ Auth::user()->name }}</h3>
                  <h5>{{ Auth::user()->bio }}</h5>
                </div>
  
                <div id = "opinions">
                  <ul>
                    <li>
                      <h4>Posts</h4>
                      <p>68</p>
                    </li>
                    <li>
                      <h4>Likes</h4>
                      <p>27</p>
                    </li>
                    <li>
                      <h4>Dislikes</h4>
                      <p>4</p>
                    </li>
                  </ul>
                </div>
  
                <div style = "display : flex; justify-content : center;">
                  <button id = edit-profile>Edit Profile</button>
                </div>
              </div>
              <div class="q-profile">
                welcome to my world
              </div>
              <div class="q-profile">welcome to the future</div>
              <div class="q-profile">It is here</div>
              <div class="q-profile">Here it is</div>
            </div>

          </div>



{{--
<!-- Row -->
<div class="row">
<div class="col-lg-12">
<div class="">
<div class="panel-wrapper collapse in">
<div class="panel-body pa-0">
<div class="col-sm-12 col-xs-12">
<div class="form-wrap">
<form action="#">
  <div class="form-body overflow-hide">
    <div class="form-group">
      <label class="control-label mb-10" for="exampleInputuname_1">Name</label>
      <div class="input-group">
        <div class="input-group-addon"><i class="icon-user"></i></div>
        <input type="text" class="form-control" id="exampleInputuname_1" placeholder="willard bryant">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label mb-10" for="exampleInputEmail_1">Email address</label>
      <div class="input-group">
        <div class="input-group-addon"><i class="icon-envelope-open"></i></div>
        <input type="email" class="form-control" id="exampleInputEmail_1" placeholder="xyz@gmail.com">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label mb-10" for="exampleInputContact_1">Contact number</label>
      <div class="input-group">
        <div class="input-group-addon"><i class="icon-phone"></i></div>
        <input type="email" class="form-control" id="exampleInputContact_1" placeholder="+102 9388333">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label mb-10" for="exampleInputpwd_1">Password</label>
      <div class="input-group">
        <div class="input-group-addon"><i class="icon-lock"></i></div>
        <input type="password" class="form-control" id="exampleInputpwd_1" placeholder="Enter pwd" value="password">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label mb-10">Gender</label>
      <div>
        <div class="radio">
          <input type="radio" name="radio1" id="radio_1" value="option1" checked="">
          <label for="radio_1">
          M
          </label>
        </div>
        <div class="radio">
          <input type="radio" name="radio1" id="radio_2" value="option2">
          <label for="radio_2">
          F
          </label>
        </div>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label mb-10">Country</label>
      <select class="form-control" data-placeholder="Choose a Category" tabindex="1">
        <option value="Category 1">USA</option>
        <option value="Category 2">Austrailia</option>
        <option value="Category 3">India</option>
        <option value="Category 4">UK</option>
      </select>
    </div>
  </div>
  <div class="form-actions mt-10">			
    <button type="submit" class="btn btn-success mr-10 mb-30">Update profile</button>
  </div>				
</form>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="modal-footer">
<button type="button" class="btn btn-success waves-effect" data-dismiss="modal">Save</button>
<button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Cancel</button>
</div>
</div>
<!-- /.modal-content -->
</div>
<!-- /.modal-dialog -->
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-9 col-xs-12">
<div class="panel panel-default card-view pa-0">
<div class="panel-wrapper collapse in">
<div  class="panel-body pb-0">
<div  class="tab-struct custom-tab-1">
<ul role="tablist" class="nav nav-tabs nav-tabs-responsive" id="myTabs_8">
<li class="active" role="presentation"><a  data-toggle="tab" id="profile_tab_8" role="tab" href="#profile_8" aria-expanded="false"><span>profile</span></a></li>
<li  role="presentation" class="next"><a aria-expanded="true"  data-toggle="tab" role="tab" id="follo_tab_8" href="#follo_8"><span>followers<span class="inline-block">(246)</span></span></a></li>
<li role="presentation" class=""><a  data-toggle="tab" id="photos_tab_8" role="tab" href="#photos_8" aria-expanded="false"><span>photos</span></a></li>
<li role="presentation" class=""><a  data-toggle="tab" id="earning_tab_8" role="tab" href="#earnings_8" aria-expanded="false"><span>earnings</span></a></li>
<li role="presentation" class=""><a  data-toggle="tab" id="settings_tab_8" role="tab" href="#settings_8" aria-expanded="false"><span>settings</span></a></li>
<li class="dropdown" role="presentation">
<a  data-toggle="dropdown" class="dropdown-toggle" id="myTabDrop_7" href="#" aria-expanded="false"><span>More</span> <span class="caret"></span></a>
<ul id="myTabDrop_7_contents"  class="dropdown-menu">
<li class=""><a  data-toggle="tab" id="dropdown_13_tab" role="tab" href="#dropdown_13" aria-expanded="true">About</a></li>
<li class=""><a  data-toggle="tab" id="dropdown_14_tab" role="tab" href="#dropdown_14" aria-expanded="false">Followings</a></li>
<li class=""><a  data-toggle="tab" id="dropdown_15_tab" role="tab" href="#dropdown_15" aria-expanded="false">Likes</a></li>
<li class=""><a  data-toggle="tab" id="dropdown_16_tab" role="tab" href="#dropdown_16" aria-expanded="false">Reviews</a></li>
</ul>
</li>
</ul>
<div class="tab-content" id="myTabContent_8">
<div  id="profile_8" class="tab-pane fade active in" role="tabpanel">
<div class="col-md-12">
<div class="pt-20">
<div class="streamline user-activity">
<div class="sl-item">
<a href="javascript:void(0)">
<div class="sl-avatar avatar avatar-sm avatar-circle">
<img class="img-responsive img-circle" src="dist/img/user.png" alt="avatar"/>
</div>
<div class="sl-content">
<p class="inline-block"><span class="capitalize-font txt-success mr-5 weight-500">Clay Masse</span><span>invited to join the meeting in the conference room at 9.45 am</span></p>
<span class="block txt-grey font-12 capitalize-font">3 Min</span>
</div>
</a>
</div>

<div class="sl-item">
<a href="javascript:void(0)">
<div class="sl-avatar avatar avatar-sm avatar-circle">
<img class="img-responsive img-circle" src="dist/img/user1.png" alt="avatar"/>
</div>
<div class="sl-content">
<p class="inline-block"><span class="capitalize-font txt-success mr-5 weight-500">Evie Ono</span><span>added three new photos in the library</span></p>
<div class="activity-thumbnail">
<img src="dist/img/thumb-1.jpg" alt="thumbnail"/>
<img src="dist/img/thumb-2.jpg" alt="thumbnail"/>
<img src="dist/img/thumb-3.jpg" alt="thumbnail"/>
</div>
<span class="block txt-grey font-12 capitalize-font">8 Min</span>
</div>
</a>	
</div>

<div class="sl-item">
<a href="javascript:void(0)">
<div class="sl-avatar avatar avatar-sm avatar-circle">
<img class="img-responsive img-circle" src="dist/img/user2.png" alt="avatar"/>
</div>
<div class="sl-content">
<p class="inline-block"><span class="capitalize-font txt-success mr-5 weight-500">madalyn rascon</span><span>assigned a new task</span></p>
<span class="block txt-grey font-12 capitalize-font">28 Min</span>
</div>
</a>	
</div>

<div class="sl-item">
<a href="javascript:void(0)">
<div class="sl-avatar avatar avatar-sm avatar-circle">
<img class="img-responsive img-circle" src="dist/img/user3.png" alt="avatar"/>
</div>
<div class="sl-content">
<p class="inline-block"><span class="capitalize-font txt-success mr-5 weight-500">Ezequiel Merideth</span><span>completed project wireframes</span></p>
<span class="block txt-grey font-12 capitalize-font">yesterday</span>
</div>
</a>	
</div>

<div class="sl-item">
<a href="javascript:void(0)">
<div class="sl-avatar avatar avatar-sm avatar-circle">
<img class="img-responsive img-circle" src="dist/img/user4.png" alt="avatar"/>
</div>
<div class="sl-content">
<p class="inline-block"><span class="capitalize-font txt-success mr-5 weight-500">jonnie metoyer</span><span>created a group 'Hencework' in the discussion forum</span></p>
<span class="block txt-grey font-12 capitalize-font">18 feb</span>
</div>
</a>
</div>
</div>
</div>
</div>
</div>

<div  id="follo_8" class="tab-pane fade" role="tabpanel">
<div class="row">
<div class="col-lg-12">
<div class="followers-wrap">
<ul class="followers-list-wrap">
<li class="follow-list">
<div class="follo-body">
<div class="follo-data">
<img class="user-img img-circle"  src="dist/img/user.png" alt="user"/>
<div class="user-data">
<span class="name block capitalize-font">Clay Masse</span>
<span class="time block truncate txt-grey">No one saves us but ourselves.</span>
</div>
<button class="btn btn-success pull-right btn-xs fixed-btn">Follow</button>
<div class="clearfix"></div>
</div>
<div class="follo-data">
<img class="user-img img-circle"  src="dist/img/user1.png" alt="user"/>
<div class="user-data">
<span class="name block capitalize-font">Evie Ono</span>
<span class="time block truncate txt-grey">Unity is strength</span>
</div>
<button class="btn btn-success btn-outline pull-right btn-xs fixed-btn">following</button>
<div class="clearfix"></div>
</div>
<div class="follo-data">
<img class="user-img img-circle"  src="dist/img/user2.png" alt="user"/>
<div class="user-data">
<span class="name block capitalize-font">Madalyn Rascon</span>
<span class="time block truncate txt-grey">Respect yourself if you would have others respect you.</span>
</div>
<button class="btn btn-success btn-outline pull-right btn-xs fixed-btn">following</button>
<div class="clearfix"></div>
</div>
<div class="follo-data">
<img class="user-img img-circle"  src="dist/img/user3.png" alt="user"/>
<div class="user-data">
<span class="name block capitalize-font">Mitsuko Heid</span>
<span class="time block truncate txt-grey">I’m thankful.</span>
</div>
<button class="btn btn-success pull-right btn-xs fixed-btn">Follow</button>
<div class="clearfix"></div>
</div>
<div class="follo-data">
<img class="user-img img-circle"  src="dist/img/user.png" alt="user"/>
<div class="user-data">
<span class="name block capitalize-font">Ezequiel Merideth</span>
<span class="time block truncate txt-grey">Patience is bitter.</span>
</div>
<button class="btn btn-success pull-right btn-xs fixed-btn">Follow</button>
<div class="clearfix"></div>
</div>
<div class="follo-data">
<img class="user-img img-circle"  src="dist/img/user1.png" alt="user"/>
<div class="user-data">
<span class="name block capitalize-font">Jonnie Metoyer</span>
<span class="time block truncate txt-grey">Genius is eternal patience.</span>
</div>
<button class="btn btn-success btn-outline pull-right btn-xs fixed-btn">following</button>
<div class="clearfix"></div>
</div>
</div>
</li>
</ul>
</div>
</div>
</div>
</div>
<div  id="photos_8" class="tab-pane fade" role="tabpanel">
<div class="col-md-12 pb-20">
<div class="gallery-wrap">
<div class="portfolio-wrap project-gallery">
<ul id="portfolio_1" class="portf auto-construct  project-gallery" data-col="4">
<li  class="item"   data-src="dist/img/gallery/equal-size/mock1.jpg" data-sub-html="<h6>Bagwati</h6><p>Classic view from Rigwood Jetty on Coniston Water an old archive shot similar to an old post but a little later on.</p>" >
<a href="">
<img class="img-responsive" src="dist/img/gallery/equal-size/mock1.jpg"  alt="Image description" />
<span class="hover-cap">Bagwati</span>
</a>
</li>
<li class="item" data-src="dist/img/gallery/equal-size/mock2.jpg"   data-sub-html="<h6>Not a Keyboard</h6><p>Classic view from Rigwood Jetty on Coniston Water an old archive shot similar to an old post but a little later on.</p>">
<a href="">
<img class="img-responsive" src="dist/img/gallery/equal-size/mock2.jpg"  alt="Image description" />
<span class="hover-cap">Not a Keyboard</span>
</a>
</li>
<li class="item" data-src="dist/img/gallery/equal-size/mock3.jpg" data-sub-html="<h6>Into the Woods</h6><p>Classic view from Rigwood Jetty on Coniston Water an old archive shot similar to an old post but a little later on.</p>">
<a href="">
<img class="img-responsive" src="dist/img/gallery/equal-size/mock3.jpg"  alt="Image description" />
<span class="hover-cap">Into the Woods</span>
</a>
</li>
<li class="item" data-src="dist/img/gallery/equal-size/mock4.jpg"  data-sub-html="<h6>Ultra Saffire</h6><p>Classic view from Rigwood Jetty on Coniston Water an old archive shot similar to an old post but a little later on.</p>">
<a href="">
<img class="img-responsive" src="dist/img/gallery/equal-size/mock4.jpg"  alt="Image description" />
<span class="hover-cap"> Ultra Saffire</span>
</a>
</li>

<li class="item" data-src="dist/img/gallery/equal-size/mock5.jpg" data-sub-html="<h6>Happy Puppy</h6><p>Classic view from Rigwood Jetty on Coniston Water an old archive shot similar to an old post but a little later on.</p>">
<a href="">
<img class="img-responsive" src="dist/img/gallery/equal-size/mock5.jpg"  alt="Image description" />	
<span class="hover-cap">Happy Puppy</span>
</a>
</li>
<li class="item" data-src="dist/img/gallery/equal-size/mock6.jpg"  data-sub-html="<h6>Wooden Closet</h6><p>Classic view from Rigwood Jetty on Coniston Water an old archive shot similar to an old post but a little later on.</p>">
<a href="">
<img class="img-responsive" src="dist/img/gallery/equal-size/mock6.jpg"  alt="Image description" />
<span class="hover-cap">Wooden Closet</span>
</a>
</li>
<li class="item" data-src="dist/img/gallery/equal-size/mock7.jpg" data-sub-html="<h6>Happy Puppy</h6><p>Classic view from Rigwood Jetty on Coniston Water an old archive shot similar to an old post but a little later on.</p>">
<a href="">
<img class="img-responsive" src="dist/img/gallery/equal-size/mock7.jpg"  alt="Image description" />	
<span class="hover-cap">Happy Puppy</span>
</a>
</li>
<li class="item" data-src="dist/img/gallery/equal-size/mock8.jpg"  data-sub-html="<h6>Wooden Closet</h6><p>Classic view from Rigwood Jetty on Coniston Water an old archive shot similar to an old post but a little later on.</p>">
<a href="">
<img class="img-responsive" src="dist/img/gallery/equal-size/mock8.jpg"  alt="Image description" />
<span class="hover-cap">Wooden Closet</span>
</a>
</li>
</ul>
</div>
</div>
</div>	
</div>
<div  id="earnings_8" class="tab-pane fade" role="tabpanel">
<!-- Row -->
<div class="row">
<div class="col-lg-12">
<form id="example-advanced-form" action="#">
<div class="table-wrap">
<div class="table-responsive">
<table class="table table-striped display product-overview" id="datable_1">
<thead>
<tr>
<th>Date</th>
<th>Item Sales Colunt</th>
<th>Earnings</th>
</tr>
</thead>
<tfoot>
<tr>
<th colspan="2">total:</th>
<th></th>
</tr>
</tfoot>
<tbody>
<tr>
<td>monday, 12</td>
<td>
3
</td>
<td>$400</td>
</tr>
<tr>
<td>tuesday, 13</td>
<td>
2
</td>
<td>$400</td>
</tr>
<tr>
<td>wednesday, 14</td>
<td>
3
</td>
<td>$420</td>
</tr>
<tr>
<td>thursday, 15</td>
<td>
5
</td>
<td>$500</td>
</tr>
<tr>
<td>friday, 15</td>
<td>
3
</td>
<td>$400</td>
</tr>
<tr>
<td>saturday, 16</td>
<td>
3
</td>
<td>$400</td>
</tr>
<tr>
<td>sunday, 17</td>
<td>
3
</td>
<td>$400</td>
</tr>
<tr>
<td>monday, 18</td>
<td>
3
</td>
<td>$500</td>
</tr>
<tr>
<td>tuesday, 19</td>
<td>
3
</td>
<td>$400</td>
</tr>
</tbody>
</table>
</div>
</div>
</form>
</div>
</div>
</div>
<div  id="settings_8" class="tab-pane fade" role="tabpanel">
<!-- Row -->
<div class="row">
<div class="col-lg-12">
<div class="">
<div class="panel-wrapper collapse in">
<div class="panel-body pa-0">
<div class="col-sm-12 col-xs-12">
<div class="form-wrap">
<form action="#">
<div class="form-body overflow-hide">
<div class="form-group">
<label class="control-label mb-10" for="exampleInputuname_01">Name</label>
<div class="input-group">
  <div class="input-group-addon"><i class="icon-user"></i></div>
  <input type="text" class="form-control" id="exampleInputuname_01" placeholder="willard bryant">
</div>
</div>
<div class="form-group">
<label class="control-label mb-10" for="exampleInputEmail_01">Email address</label>
<div class="input-group">
  <div class="input-group-addon"><i class="icon-envelope-open"></i></div>
  <input type="email" class="form-control" id="exampleInputEmail_01" placeholder="xyz@gmail.com">
</div>
</div>
<div class="form-group">
<label class="control-label mb-10" for="exampleInputContact_01">Contact number</label>
<div class="input-group">
  <div class="input-group-addon"><i class="icon-phone"></i></div>
  <input type="email" class="form-control" id="exampleInputContact_01" placeholder="+102 9388333">
</div>
</div>
<div class="form-group">
<label class="control-label mb-10" for="exampleInputpwd_01">Password</label>
<div class="input-group">
  <div class="input-group-addon"><i class="icon-lock"></i></div>
  <input type="password" class="form-control" id="exampleInputpwd_01" placeholder="Enter pwd" value="password">
</div>
</div>
<div class="form-group">
<label class="control-label mb-10">Gender</label>
<div>
  <div class="radio">
    <input type="radio" name="radio1" id="radio_01" value="option1" checked="">
    <label for="radio_01">
    M
    </label>
  </div>
  <div class="radio">
    <input type="radio" name="radio1" id="radio_02" value="option2">
    <label for="radio_02">
    F
    </label>
  </div>
</div>
</div>
<div class="form-group">
<label class="control-label mb-10">Country</label>
<select class="form-control" data-placeholder="Choose a Category" tabindex="1">
  <option value="Category 1">USA</option>
  <option value="Category 2">Austrailia</option>
  <option value="Category 3">India</option>
  <option value="Category 4">UK</option>
</select>
</div>
</div>
<div class="form-actions mt-10">			
<button type="submit" class="btn btn-success mr-10 mb-30">Update profile</button>
</div>				
</form>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>


</div>
</div>
<!-- /Row -->

<!-- Row -->
<div class="row">
<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
<div class="panel panel-default border-panel card-view">
<div class="panel-heading">
<div class="pull-left">
<h6 class="panel-title pull-left">users</h6>
</div>
<div class="pull-right">
<a href="#" class="pull-left inline-block mr-15">
<i class="zmdi zmdi-search"></i>
</a>
<a class="pull-left inline-block" href="#" data-effect="fadeOut">
<i class="zmdi zmdi-plus"></i>
</a>
</div>
<div class="clearfix"></div>
</div>
<div class="panel-wrapper collapse in">
<div class="panel-body row pa-0">
<div class="chat-cmplt-wrap chat-for-widgets">
<div class="chat-box-wrap">
<div>
<div class="users-nicescroll-bar">
<ul class="chat-list-wrap">
<li class="chat-list">
<div class="chat-body">
<a href="javascript:void(0)">
<div class="chat-data">
<img class="user-img img-circle"  src="dist/img/user.png" alt="user"/>
<div class="user-data">
<span class="name block capitalize-font">Clay Masse</span>
<span class="time block truncate txt-grey">No one saves us but ourselves.</span>
</div>
<div class="status away"></div>
<div class="clearfix"></div>
</div>
</a>
<a href="javascript:void(0)">
<div class="chat-data">
<img class="user-img img-circle"  src="dist/img/user1.png" alt="user"/>
<div class="user-data">
<span class="name block capitalize-font">Evie Ono</span>
<span class="time block truncate txt-grey">Unity is strength</span>
</div>
<div class="status offline"></div>
<div class="clearfix"></div>
</div>
</a>
<a href="javascript:void(0)">
<div class="chat-data">
<img class="user-img img-circle"  src="dist/img/user2.png" alt="user"/>
<div class="user-data">
<span class="name block capitalize-font">Madalyn Rascon</span>
<span class="time block truncate txt-grey">Respect yourself if you would have others respect you.</span>
</div>
<div class="status online"></div>
<div class="clearfix"></div>
</div>
</a>
<a href="javascript:void(0)">
<div class="chat-data">
<img class="user-img img-circle"  src="dist/img/user3.png" alt="user"/>
<div class="user-data">
<span class="name block capitalize-font">Mitsuko Heid</span>
<span class="time block truncate txt-grey">I’m thankful.</span>
</div>
<div class="status online"></div>
<div class="clearfix"></div>
</div>
</a>
<a href="javascript:void(0)">
<div class="chat-data">
<img class="user-img img-circle"  src="dist/img/user.png" alt="user"/>
<div class="user-data">
<span class="name block capitalize-font">Ezequiel Merideth</span>
<span class="time block truncate txt-grey">Patience is bitter.</span>
</div>
<div class="status offline"></div>
<div class="clearfix"></div>
</div>
</a>
<a href="javascript:void(0)">
<div class="chat-data">
<img class="user-img img-circle"  src="dist/img/user1.png" alt="user"/>
<div class="user-data">
<span class="name block capitalize-font">Jonnie Metoyer</span>
<span class="time block truncate txt-grey">Genius is eternal patience.</span>
</div>
<div class="status online"></div>
<div class="clearfix"></div>
</div>
</a>
<a href="javascript:void(0)">
<div class="chat-data">
<img class="user-img img-circle"  src="dist/img/user2.png" alt="user"/>
<div class="user-data">
<span class="name block capitalize-font">Angelic Lauver</span>
<span class="time block truncate txt-grey">Every burden is a blessing.</span>
</div>
<div class="status away"></div>
<div class="clearfix"></div>
</div>
</a>
<a href="javascript:void(0)">
<div class="chat-data">
<img class="user-img img-circle"  src="dist/img/user3.png" alt="user"/>
<div class="user-data">
<span class="name block capitalize-font">Priscila Shy</span>
<span class="time block truncate txt-grey">Wise to resolve, and patient to perform.</span>
</div>
<div class="status online"></div>
<div class="clearfix"></div>
</div>
</a>
<a href="javascript:void(0)">
<div class="chat-data">
<img class="user-img img-circle"  src="dist/img/user4.png" alt="user"/>
<div class="user-data">
<span class="name block capitalize-font">Linda Stack</span>
<span class="time block truncate txt-grey">Our patience will achieve more than our force.</span>
</div>
<div class="status away"></div>
<div class="clearfix"></div>
</div>
</a>
</div>
</li>
</ul>
</div>
</div>
</div>
<div class="recent-chat-box-wrap">
<div class="recent-chat-wrap">
<div class="panel-heading ma-0 pt-15">
<div class="goto-back">
<a  id="goto_back_widget" href="javascript:void(0)" class="inline-block txt-grey">
<i class="zmdi zmdi-chevron-left"></i>
</a>	
<span class="inline-block txt-dark">ryan</span>
<a href="javascript:void(0)" class="inline-block text-right txt-grey"><i class="zmdi zmdi-more"></i></a>
<div class="clearfix"></div>
</div>
</div>
<div class="panel-wrapper collapse in">
<div class="panel-body pa-0">
<div class="chat-content">
<ul class="users-chat-nicescroll-bar pt-20">
<li class="friend">
<div class="friend-msg-wrap">
<img class="user-img img-circle block pull-left"  src="dist/img/user.png" alt="user"/>
<div class="msg pull-left">
<p>Hello Jason, how are you, it's been a long time since we last met?</p>
<div class="msg-per-detail text-right">
<span class="msg-time txt-grey">2:30 PM</span>
</div>
</div>
<div class="clearfix"></div>
</div>	
</li>
<li class="self mb-10">
<div class="self-msg-wrap">
<div class="msg block pull-right"> Oh, hi Sarah I'm have got a new job now and is going great.
<div class="msg-per-detail text-right">
<span class="msg-time txt-grey">2:31 pm</span>
</div>
</div>
<div class="clearfix"></div>
</div>	
</li>
<li class="self">
<div class="self-msg-wrap">
<div class="msg block pull-right">  How about you?
<div class="msg-per-detail text-right">
<span class="msg-time txt-grey">2:31 pm</span>
</div>
</div>
<div class="clearfix"></div>
</div>	
</li>
<li class="friend">
<div class="friend-msg-wrap">
<img class="user-img img-circle block pull-left"  src="dist/img/user.png" alt="user"/>
<div class="msg pull-left"> 
<p>Not too bad.</p>
<div class="msg-per-detail  text-right">
<span class="msg-time txt-grey">2:35 pm</span>
</div>
</div>
<div class="clearfix"></div>
</div>	
</li>
</ul>
</div>
<div class="input-group">
<input type="text" id="input_msg_send_widget" name="send-msg" class="input-msg-send form-control" placeholder="Type something">
<div class="input-group-btn emojis">
<div class="dropup">
<button type="button" class="btn  btn-default  dropdown-toggle" data-toggle="dropdown" ><i class="zmdi zmdi-mood"></i></button>
<ul class="dropdown-menu dropdown-menu-right">
<li><a href="javascript:void(0)">Action</a></li>
<li><a href="javascript:void(0)">Another action</a></li>
<li class="divider"></li>
<li><a href="javascript:void(0)">Separated link</a></li>
</ul>
</div>
</div>
<div class="input-group-btn attachment">
<div class="fileupload btn  btn-default"><i class="zmdi zmdi-attachment-alt"></i>
<input type="file" class="upload">
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
<div class="panel panel-default border-panel card-view">
<div class="panel-heading">
<div class="pull-left">
<h6 class="panel-title txt-dark">todo</h6>
</div>
<div class="pull-right">
<div class="pull-left inline-block dropdown mr-15">
<a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false" role="button"><i class="zmdi zmdi-more-vert"></i></a>
<ul class="dropdown-menu bullet dropdown-menu-right"  role="menu">
<li role="presentation"><a href="javascript:void(0)" role="menuitem"><i class="icon wb-reply" aria-hidden="true"></i>Edit</a></li>
<li role="presentation"><a href="javascript:void(0)" role="menuitem"><i class="icon wb-share" aria-hidden="true"></i>Clear All</a></li>
<li role="presentation"><a href="javascript:void(0)" role="menuitem"><i class="icon wb-trash" aria-hidden="true"></i>Select All</a></li>
</ul>
</div>
<a class="pull-left inline-block close-panel" href="#" data-effect="fadeOut">
<i class="zmdi zmdi-close"></i>
</a>
</div>
<div class="clearfix"></div>
</div>
<div class="panel-wrapper collapse in">
<div class="panel-body row pa-0">
<div class="todo-box-wrap">
<!-- Todo-List -->
<ul class="todo-list todo-box-nicescroll-bar">
<li class="todo-item">
<div class="checkbox checkbox-default">
<input type="checkbox" id="checkbox001"/>
<label for="checkbox001">Record The First Episode</label>
</div>
</li>
<li>
<hr class="light-grey-hr"/>
</li>
<li class="todo-item">
<div class="checkbox checkbox-pink">
<input type="checkbox" id="checkbox002"/>
<label for="checkbox002">Prepare The Conference Schedule</label>
</div>
</li>
<li>
<hr class="light-grey-hr"/>
</li>
<li class="todo-item">
<div class="checkbox checkbox-warning">
<input type="checkbox" id="checkbox003" checked/>
<label for="checkbox003">Decide The Live Discussion Time</label>
</div>
</li>
<li>
<hr class="light-grey-hr"/>
</li>
<li class="todo-item">
<div class="checkbox checkbox-success">
<input type="checkbox" id="checkbox004" checked/>
<label for="checkbox004">Prepare For The Next Project</label>
</div>
</li>
<li>
<hr class="light-grey-hr"/>
</li>
<li class="todo-item">
<div class="checkbox checkbox-danger">
<input type="checkbox" id="checkbox005" checked/>
<label for="checkbox005">Finish Up AngularJs Tutorial</label>
</div>
</li>
<li>
<hr class="light-grey-hr"/>
</li>
<li class="todo-item">
<div class="checkbox checkbox-purple">
<input type="checkbox" id="checkbox006" checked/>
<label for="checkbox006">Finish Infinity Project</label>
</div>
</li>
<li>
<hr class="light-grey-hr"/>
</li>
</ul>
<!-- /Todo-List -->

<!-- New Todo -->
<div class="new-todo">
<div class="input-group">
<input type="text" id="add_todo" name="example-input2-group2" class="form-control" placeholder="Add new task">
<span class="input-group-btn">
<button type="button" class="btn btn-success"><i class="zmdi zmdi-plus txt-success"></i></button>
</span> 
</div>
</div>
<!-- /New Todo -->
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
<div class="panel panel-default card-view">
<div class="panel-wrapper collapse in">
<div class="panel-body">
<div class="calendar-wrap">
<div id="calendar_small" class="small-calendar"></div>
</div>
</div>
</div>
</div>	
</div>
<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
<div class="panel panel-default card-view bg-twitter">
<div class="panel-wrapper collapse in">
<div  class="panel-body">
<div class="twitter-icon-wrap text-center mb-15">
<i class="fa fa-twitter"></i>
</div>
<!-- START carousel-->
<div id="twitter_slider" data-ride="carousel" class="carousel slide twitter-slider-wrap text-slider">
<ol class="carousel-indicators">
<li data-target="#twitter_slider" data-slide-to="0" class="active"></li>
<li data-target="#twitter_slider" data-slide-to="1"></li>
</ol>
<div id="tweets_fetch" role="listbox" class="carousel-inner mb-50">
</div>
</div>
<!-- END carousel-->
</div>
</div>
</div>
<div class="panel panel-default card-view">
<div class="panel-heading">
<div class="pull-left">
<h6 class="panel-title txt-dark">Madalyn Rascon</h6>
</div>
<div class="clearfix"></div>
</div>
<div class="panel-wrapper collapse in">
<div  class="panel-body row pa-0">
<!--Instagram-->
<ul class="instagram-lite"></ul>
<!--/Instagram-->
</div>
</div>
</div>
</div>
</div>
<!-- /Row -->
 --}}













        </div>
        <div class="description">
          Lorem ipsum dolor sit amet consectetur, adipisicing elit. Explicabo fugit ut sint eligendi corrupti ratione soluta, culpa nulla voluptas dolor ipsam aliquam molestiae fugiat porro impedit debitis amet reiciendis rerum et quam! Temporibus rem officiis impedit beatae itaque, inventore magni nulla in dolor quasi et tenetur facilis dicta. Ullam quae quis deleniti illum tempore voluptatem eos. Rerum hic cumque facilis explicabo obcaecati aut. Cum, nam. Iste nisi non placeat, doloremque at consectetur possimus. Impedit possimus neque vero fugit, a distinctio!
        </div>
      </li>
      <li class = personals>
        <button> My Group </button>

        <div class="latershown slideInRight">
          My Group
        </div>
        <div class="description">
          here
        </div>
       </li>
      <li class = personals>
        <button> My Works </button>
        
        <div class="latershown slideInRight">
          My Works
        </div>

        <div class="description">
          My works are described here.
        </div>
      </li>
    </ul>
  </div>
</div>
<div id = containsEm class="right-side-80p overflow-auto py-5">
    <div class="max-w-9xl mx-1 sm:px-6 lg:px-8">
        <div class="bg-white animated wobblwe overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-4 bg-white border-b border-grey-50 ">
  <div id="wrapper" class="clearfix">
    {{-- <!-- preloader -->
    <!-- <div id="preloader">
      <div id="spinner">
        <img alt="" src="images/preloaders/5.gif">
      </div>
      <div id="disable-preloader" class="btn btn-default btn-sm">Disable Preloader</div>
    </div> --> --}}
    
    <!-- start main-content -->
    <div class="main-content">
      <section id="home"  class="inner-header divider parallax " data-bg-img="http://placehold.it/1920x1280">
        <div class = "overoverpic" style = "min-height : 700px; background-image : url({{ asset('images/pix.jpg')}})">
            <h3 style = "width : 65vw; " class = "overpic">
                <span style = "color : var(--color_dark_pry); font-size : 36px; float : right;">Welcome <span style = "color : var(--natural_color_light);font-size : 40px; text-shadow : 1px 2px 5px var(--shadow_dark_pry);">{{ Auth::user()->name }}</span></span>
                <span style = "color : white; transform : rotateZ(15deg); font-size : 3.2em; display : inline-block; width : 60vw; animation-duration: 5s;" class = "animated slideInRight">From <span style = "position : relative; width : min-content;"><span id = firstQ style = "color : var(--color_light_sec); text-shadow : 2px 2px 5px var(--shadow_dark_pry), 5px 5px 10px var(--shadow_dark_sec);;">Qudroid </span><span id = secondQ style = "color : var(--color_light_pry); text-shadow : 2px 2px 5px var(--shadow_dark_pry), 5px 5px 10px var(--shadow_dark_sec); position : absolute; left : -5px; ">Qudroid</span> Systems</span></span>
            </h3>   
        </div>
        
      </section>
   
      <section id = "first" class="bg-theme-colored">
        <div class="container-fluid pr-90 pl-90">
          <div class="section-content">
            <div class="row">
              <div class="col-md-12">
                <!-- Works Filter -->
                <div class="portfolio-filter text-center mb-10">
                  <a href="#first" class="active">Total Members</a>
                  <a href="#herotemplates" class="">Group Members</a>
                  <a href="#event-layouts" class="">Users' Portfolios</a>
                  <a href="#hot" class="">Hot layout</a>
                  
                </div>
                
                <!-- Portfolio Gallery Grid -->
                <div id="grid1" class="gallery-isotope grid-3 gutter-60 clearfix">
                  
                  <div id = html class = searchable>
                    <h2>HTML5: </h2>
                    HTML is the language of the web, the backbone of the internet... every web page has HTML as it's construction scaffold.
                  </div>
                  <div id = css class = searchable>
                    <h2>CSS3: </h2>
                    CSS -> Cascading Stylesheet... The styling engine of web pages.
                  </div>
                  <div id = javascript class = searchable>
                    <h2>Javascript: </h2>
                    Javascript is the language of the Web. It is the world's most popular programming language. Javascript has been made the easiest to learn here in Qudroid. These tutorials are stream-lined for your convenient learning.
                  </div>
                  <div id = vue class = searchable>
                    <h2>Vue (Javascript Framework): </h2>
                    Vue is the most beautiful format of Javascript-scripting.. It is a very light-weight framework(set structure of coding to optimize results) of Javascript. Vue has been made the easiest to learn here in Qudroid. These tutorials are stream-lined for your convenient learning.
                  </div>
                  <div id = php class = searchable>
                    <h2>Php: </h2>
                    Hypertext Preprocessor (the recursive initialism of Php), previously known as "Personal Home Page", is the huge factory that produces most of the Web's pages on the go. Php has been around since the '90s, and will only continue to evolve.
                  </div>
                  <div id = laravel class = searchable>
                    <h2>Laravel (Php Framework): </h2>
                    Laravel is a most Elegant way of scripting Php code, with the best libraries at ones disposal.
                  </div>
                  <div id = MySQL class = searchable>
                    <h2>Php: </h2>
                    Hypertext Preprocessor (the recursive initialism of Php), previously known as "Personal Home Page", is the huge factory that produces most of the Web's pages on the go. Php has been around since the '90s, and will only continue to evolve.
                  </div>
              
                </div>
                <!-- End Portfolio Gallery Grid -->
              </div>
            </div>
          </div>
        </div>
      </section>
  
    <div id = "herotemplates" class="portfolio-filter bg-grey-800 text-center mb-10">
                <a href="#first" class="mt-50">Total Members</a>
                <a href="#herotemplates" class="active">Group Members</a>
                <a href="#event-layouts" class="">Users' Portfolios</a>
                <a href="#last" class="">Hot layout</a>
                
              </div>
      <!-- Divider: Call To Action  -->
      <section class="divider parallax layer-overlay overlay-white-9" data-parallax-ratio="0.7" data-bg-img="http://placehold.it/1920x1280">
        
        <div class="container pt-50 pb-50"> 
          <!-- Section Content -->
          <div class="section-content">
            <div class="row">
              
              <div id = pro class="searchable col-md-12 proMems px-4">
                <h2>Group Members</h2>
                  <?php $m = 1; $g = 2; ?>
                @foreach($users as $user)
                    <div class="proMem">
                      <div class="floating" style = "--s : {{$g}}s"></div>
                      <div class="innerdiv <?php if($m % 2 != 0){
                          echo 'left';
                        } else { echo 'right'; }; ?>">
                        <img src="./images/{{$user->avatar}}.jpg" alt="">
                        <div>
                           <p><span>Name:</span> {{$user->name}}</p>
                           <p><span>Email:</span> {{$user->email}}</p>
                           <p><span>Phone NO:</span> {{$user->phone_no}}</p>
                           <p><span>Age:</span> {{$user->age}}</p>
                           <p><span>Bio:</span> {{$user->bio}}</p>

                        </div>
                      </div>
                    </div>
                    <?php $m += 1; $g += 3 ?>
                @endforeach

              </div>
            </div>
          </div>
        </div>  
      </section>
      
      <section>
        <div id="event-layouts" class="container pt-30 pb-10">
          <div class="row">

            <div class="portfolio-filter text-center mb-10">
              <a href="#first" class="">Total Members</a>
              <a href="#herotemplates" class="">Group Members</a>
              <a href="#event-layouts" class="active">Users' Portfolios</a>
              <a href="#last" class="">Hot layout</a>
              
            </div>
            <div id = portfolioShow>
              @foreach ($users as $user)
                @if($user->portfolio == 1)

                  <div class="col-sm-6 col-md-3 demo-box">
                    <div class="photo text-center">
                      <img src = '{{asset("ports/thumbnails/". strtolower(str_replace(' ', '', $user->name)) . ".jpg")}}' alt="" class="img-thumbnail">
                    </div>
                    <div class="overlay2 text-center">
                      <h5>
                        @if(substr($user->name, -1) != 's')
                          {{$user->name}}'s port
                        @else
                          {{$user->name}}' port
                        @endif
                      </h5>
                      <a class="btn btn-theme-colored text-white btn-sm" target="_blank" href="http://localhost:8000/ports/{{strtolower(str_replace(' ', '', $user->name));}}/{{$user->email}}">View Portfolio</a>
                    </div>
                  </div>
                
                @endif
                
              @endforeach
            </div>
               
          </div> 
        </div>
        <div id = bPortCont>
          <a href="{{route('builder')}}"><button id = bPort>Build Port</button></a>
        </div>
      </section>
      <section id = "last" class="bg-theme-colored mt-90">
        <div class="container-fluid pr-90 pl-90">
          <div class="section-content">
            <div class="row">
              <div class="col-md-12">
                <!-- Works Filter -->
                <div class="portfolio-filter text-center mb-10">
                  <a href="#first" class="">Total Members</a>
                  <a href="#herotemplates" class="">Group Members</a>
                  <a href="#event-layouts" class="">Users' Portfolios</a>
                  <a href="#last" class="active">Hot layout</a>
                  
                </div>
                
                <!-- Portfolio Gallery Grid -->
                <div id="grid" class="gallery-isotope grid-3 gutter-60 clearfix">
  
                  <!-- Portfolio Item Start -->
                  <div class="gallery-item boxed">
                    <div class="demo-gallery">
                      <div class="gallery-thumb">
                        <img class="img-fullwidth" alt="" src="http://placehold.it/530x570">
                        <h4 class="mt-20 font-16 text-white text-center">Boxed Layout 3</h4>
                        <div class="overlay2 text-center">
                          <a class="btn btn-theme-color-2 text-white btn-sm pl-30 pr-30 mr-15" target="_blank" href="index-boxed-mp-layout3.html">Multi Page</a>
                          <a class="btn btn-theme-color-2 text-white btn-sm pl-30 pr-30" target="_blank" href="index-boxed-sp-layout3.html">Single Page</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- Portfolio Item End -->
  
                  <!-- Portfolio Item Start -->
                  <div class="gallery-item boxed">
                    <div class="demo-gallery">
                      <div class="gallery-thumb">
                        <img class="img-fullwidth" alt="" src="http://placehold.it/530x570">
                        <h4 class="mt-20 font-16 text-white text-center">Boxed Layout 4</h4>
                        <div class="overlay2 text-center">
                          <a class="btn btn-theme-color-2 text-white btn-sm pl-30 pr-30 mr-15" target="_blank" href="index-boxed-mp-layout4.html">Multi Page</a>
                          <a class="btn btn-theme-color-2 text-white btn-sm pl-30 pr-30" target="_blank" href="index-boxed-sp-layout4.html">Single Page</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- Portfolio Item End -->
  
              
                </div>
                <!-- End Portfolio Gallery Grid -->
              </div>
            </div>
          </div>
        </div>
      </section>
  
    
      <section id="key-features" class="divider parallax layer-overlay overlay-white-8" data-bg-img="http://placehold.it/1920x1280" >
        <div class="container">
          <div class="row">
            <div class="col-md-12 text-center">
              <h2 class="mb-30 text-uppercase text-black">Key <span class="text-theme-colored">Features:</span></h2>
            </div>
          </div>
          <div class="row multi-row-clearfix">
            <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3">
              <div class="feature-box">
                <div class="feature-box-icon">
                  <i class="fa fa-bold"></i>
                </div>
                <div class="feature-box-info">
                  <h5>Built with Bootstrap 3.x</h5>
                </div>
              </div>
            </div>
           
            <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3">
              <div class="feature-box">
                <div class="feature-box-icon">
                  <i class="fa fa-calendar-check-o"></i>
                </div>
                <div class="feature-box-info">
                  <h5>Calendar</h5>
                </div>
              </div>
            </div>
  
            <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3">
              <div class="feature-box">
                <div class="feature-box-icon">
                  <i class="fa fa-picture-o"></i>
                </div>
                <div class="feature-box-info">
                  <h5>Photo Gallery</h5>
                </div>
              </div>
            </div>
  
           
  
            <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3">
              <div class="feature-box">
                <div class="feature-box-icon">
                  <i class="fa fa-mobile"></i>
                </div>
                <div class="feature-box-info">
                  <h5>Retina Ready!</h5>
                </div>
              </div>
            </div>
  
            <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3">
              <div class="feature-box">
                <div class="feature-box-icon">
                  <i class="fa fa-bars"></i>
                </div>
                <div class="feature-box-info">
                  <h5>Built-in Mega Menu</h5>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      
    </div>
    <!-- end main-content -->
    
    <!-- Footer -->
    <footer id="footer" class="footer text-center pb-0" data-bg-img="images/pattern/p15.png">
      <div class="container pt-80 pb-80">
        <div class="row">
          <div class="col-md-12">  
            <p class="m-0 font-12">Copyright &copy;2021 <a class = "text-2xl" href="#">Qudroid</a></p>
          </div>
        </div>
        welcome
      </div>
    </footer>
    <a class="scrollToTop bg-theme-colored" href="#"><i class="fa fa-angle-up"></i></a></div>
  <!-- end wrapper -->
  
           </div>
            </div>
        </div>
    </div>

      <!-- jQuery -->
      <script src="{{asset('vendors/bower_components/jquery/dist/jquery.min.js')}}"></script>

      <!-- Bootstrap Core JavaScript -->
      <script src="{{asset('vendors/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
      
    <!-- Data table JavaScript -->
    <script src="{{asset('vendors/bower_components/datatables/media/js/jquery.dataTables.min.js')}}"></script>
    
    <!-- Slimscroll JavaScript -->
    <script src="{{asset('dist/js/jquery.slimscroll.js')}}"></script>
    
    <!-- simpleWeather JavaScript -->
    <script src="{{asset('vendors/bower_components/moment/min/moment.min.js')}}"></script>
    <script src="{{asset('vendors/bower_components/simpleWeather/jquery.simpleWeather.min.js')}}"></script>
    <script src="{{asset('dist/js/simpleweather-data.js')}}"></script>
    
    <!-- Progressbar Animation JavaScript -->
    <script src="{{asset('vendors/bower_components/waypoints/lib/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('vendors/bower_components/jquery.counterup/jquery.counterup.min.js')}}"></script>
    
    <!-- Fancy Dropdown JS -->
    <script src="{{asset('dist/js/dropdown-bootstrap-extended.js')}}"></script>
    
    <!-- Sparkline JavaScript -->
    <script src="{{asset('vendors/jquery.sparkline/dist/jquery.sparkline.min.js')}}"></script>
    
    <!-- Owl JavaScript -->
    <script src="{{asset('vendors/bower_components/owl.carousel/dist/owl.carousel.min.js')}}"></script>
    
    <!-- ChartJS JavaScript -->
    <script src="{{asset('vendors/chart.js/Chart.min.js')}}"></script>
    
    <!-- Morris Charts JavaScript -->
      <script src="{{asset('vendors/bower_components/raphael/raphael.min.js')}}"></script>
      <script src="{{asset('vendors/bower_components/morris.js/morris.min.js')}}"></script>
      <script src="{{asset('vendors/bower_components/jquery-toast-plugin/dist/jquery.toast.min.js')}}"></script>
    
    <!-- Switchery JavaScript -->
    <script src="{{asset('vendors/bower_components/switchery/dist/switchery.min.js')}}"></script>
    
    <!-- Init JavaScript -->
    <script src="{{asset('dist/js/init.js')}}"></script>
    <script src="{{asset('dist/js/dashboard-data.js')}}"></script>

    <script>
      document.getElementById('dashlogo').addEventListener('click', () => {
        document.getElementById('profile').classList.toggle('open');
      });

      setInterval(() => {
        document.getElementById('dashlogo').classList.toggle('up', window.scrollY > 667);
      }, 1000);

      var num = 0;
      document.getElementById('midbox').onclick = () => {
        if (num == 7) {
          window.location.href = "http://localhost:8000/hiddengame";
          num = 0;
        } else {
          num += 1;
        }
      };

      var items = document.querySelectorAll('#onlyshown > ul > li > button');
      items.forEach(item => {
        item.addEventListener('click', () => {
          items.forEach(item2 => {
            if( item2 != item){
              item2.classList.remove('nowshows');
            }
            item.classList.toggle('nowshows');
          });
        });
      });
      
      document.body.addEventListener('click', (e) => {
        var targets = document.querySelectorAll('#onlyshown > ul > li');
        targets.forEach(target => {
          if(!e.path.includes(target)){
            target.querySelectorAll('button').forEach(h => { h.classList.remove('nowshows') });
          }
        })
      })
    </script>
 
</x-master>
