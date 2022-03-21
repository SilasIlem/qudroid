<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Qudroid Systems</title>

        <link rel = "shortcut icon" href = "{{asset('images/logo.png')}}" />
        
        <!-- Stylesheet -->
        <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('css/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('css/animate.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('css/qudroid/animate.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('css/qudroid/color-schemes.css')}}" rel="stylesheet" type="text/css" />

        <!--scrollbar css-->
        <link href="{{asset('/css/qudroid/scrollbar-mods.css')}}" rel="stylesheet"/>
        <!-- CSS | Fullpage Slider -->
        <link href="{{asset('css/fullpage-slider/jquery.fullpage.css')}}" rel="stylesheet"/>
        <link href="{{asset('css/swiper-bundle.min.css')}}" rel="stylesheet" />
       
        <!-- CSS | Responsive media queries -->
        <link href="{{asset('css/responsive.css')}}" rel="stylesheet" type="text/css">
               
        <!-- external javascripts -->
        <script src="js/jquery-2.2.4.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
       
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
      
        <style>
            body {
                background : var(--color_light_sec);
            }

            body * {
                color : var(--natural_color_dark);
            }

            #extras, #extras2 {
                z-index : 999999999;
                position : fixed;
                bottom : 120px;
                max-width : max-content;
                right : 0px;
                height : 50px;
            }

            #extras2 {
                bottom : 60px;
            }

            #extras button, #extras2 button {
                width : 50px;
                height : 50px;
                border-radius : 8px;
                position : absolute;
                right : 0px;
                top : 0px;
                background : var(--color_light2_pry);
                margin-right : 4px;
                border : 1px solid var(--color_light_pry);
                outline : 2px solid var(--color_light2_pry);
            }

            #extras-wrapper, #extras2-wrapper {
                transform-origin : right;
                min-height : 100%;
                max-height : 100%;
                position : absolute;
                right : 0px;
                margin-right : 5px;
                display : flex;
                align-items : center;
                justify-content: center;
                border : 1px solid var(--color_light_pry);
                outline : 2px solid var(--color_light2_pry);
                transform : scaleX(0);
                transition : all .3s ease-in-out;
                background : var(--color_light2_pry);
            }

            #extras2-wrapper {
                min-width : 600px;
                max-width : 650px;
            }

            #extras-wrapper {
                min-width : 250px;
                max-width : 280px;
            }

            #extras-wrapper i, #extras2-wrapper i {
                margin : 0px 8px;
            }

            #extras-wrapper, #extras-wrapper *, 
            #extras2-wrapper, #extras2-wrapper * {
                color : var(--color_dark2_pry);
            }

            #extras:hover > #extras-wrapper,
            #extras2:hover > #extras2-wrapper {
                transform : scaleX(1);
            }

            @media screen and (max-width : 600px) {
                #extras2 {
                    display : none;
                }
            }

            .section {
                overflow-x : hidden;
                position : relative;
                overflow-y : scroll;
            }
         
            /*first Section*/
            #videofirst {
              height : 100%;
              width : 100%;
            }

            #aboutname {
                font-size: 100px;
                color: rgb(116, 19, 19);
                display : inline-block;
                padding-left : 10px;
            }

            .toplinks {
                display : flex;
                justify-content : space-around;
                background : none;
                position : absolute;
                z-index : 50;
                width : 30vw;
                right : 10px;
            }
            
            .toplinks * {
                padding : 5px;
                height : 25px;
                color : var(--color_light_pry);
                font-weight : 800;
                font-size : 15px;
                text-shadow : .3px .3px 5px var(--shadow_dark2_pry);
                text-align : center;
            }

            .toplinks *:hover {
                color : var(--color_dark_pry);
            }

            .first_section {
                min-height : 100vh;
                max-height : 100vh;
                background : url('images/dashback.jpg');
                background-size : cover;
                background-repeat: no-repeat;
                background-attachment : fixed;
            }
            
            .first_section h2 {
                position : absolute;
                padding-left: 40px;
                top : 2px;
                z-index : 50;
                font-size: 30px;
                color: var(--color_light_pry);
                font-weight: bolder;
                text-shadow: 0px 0px 5px var(--shadow_dark2_pry);
            }

            .first_section p {
                position : absolute;
                padding-left: 40px;
                top : 60px;
                z-index : 50;
                font-size: 14px;
                color: var(--color_light_pry);
                font-weight: bolder;
                text-shadow: 0px 0px 5px var(--shadow_dark2_pry);
            }

            .first_section > .qudroid_ad_container {
                min-width : 90vw;
                max-width : 90vw;
                min-height : 80vh;
                max-height : 80vh;
                position : absolute;
                top : 80px;
                left : 5vw;
                display : flex;
                flex-wrap : wrap;
                justify-content : space-between;
            }

            .qudroid_ad_container > .qudroid_ad.one {
                min-height : 20vh;
                max-height : 40vh;
                position : relative;
                margin : 20px;
                margin-left : 5vw;
                color : var(--color_light_pry);
                display : flex;
                flex-direction : column;
                flex-wrap : nowrap;
                z-index : 50;
                padding : 12px;
            }

            .qudroid_ad_container > .qudroid_ad.two {
                min-width : 320px;
                max-width : 320px;
                min-height : 40vh;
                margin : 20px;
                margin-left : 50px;
                max-height : 42vh;
                background : var(--glassy_background_light_pry_1);
                backdrop-filter : var(--glassy_blur_1);
                box-shadow : 0px 0px 5px var(--shadow_dark_pry);
                border-radius : 8px;
                position : relative;
                animation : slide_left 2s linear 1 forwards;
            }

            .qudroid_ad_container > .qudroid_ad.two h4 {
                color : var(--color_light_pry);
                font-size : 22px;
                text-decoration : underline;
                text-align : center;
                text-shadow: 0px 0px 8px var(--shadow_dark_pry);
            }

            .qudroid_ad_container #signup_link {
                position : absolute;
                bottom : 10px;
                width : 100px;
                left : 110px;
                padding-bottom: 5px;
                font-size: 20px;
                color: var(--color_light_pry);
                height: 40px;
                background: var(--color_dark2_pry);
                outline: 4px solid var(--color_dark2_pry);
                border: 2.4px solid var(--color_light_pry);
                border-radius: 8px;
            }

            .qudroid_ad_container #signup_link:hover {
                font-size : 22px;
                background :var(--color_light_sec);
                color : var(--color_dark_sec);
                border : 3px solid var(--color_dark_sec);
                outline : 5px solid var(--color_light_sec);
                transition : all .5s ease-in-out;
            }

            .qudroid_ad.one > h3 {
                color : var(--color_light2_pry);
                font-size : 60px;
                max-width : 100%;
                padding : 0px;
                min-height : 80px;
            }

            .qudroid_ad.one > #viewport_link {
                width : 200px;
                height : 38px;
                background : var(--color_dark2_pry);
                border-radius : 12px;
                margin : 5px;
                font-weight : bold;
                color : var(--color_light_pry);
                margin-bottom : 20px;
                padding : 8px;
                border : none;
                outline : none;
            }

            .qudroid_ad.one > #viewport_link:hover {
                background : var(--color_dark_sec);
            }

            .qudroid_ad.two ul {
                list-style-image : url('images/check.svg') ;
                padding : 30px 0px 30px 40px;
                font-size : 18px;
                width : 100%;
                height : 150px;
                display : flex;
                color : var(--color_dark_pry);
                flex-direction : column;
                justify-content : space-around;
            }

            /*second_section*/
            .second_section > .encloser {
                min-height : 100%;
                min-width : 100%;
                display : flex;
                flex-wrap : wrap;
                align-items: center;
            }

            .encloser > .row {
                display : flex;
                align-items: center;
                justify-content: center;
                flex-wrap : wrap;
                min-width : 100%;
                max-width : 100%;
                margin : 10px;
            }

            .encloser > .first_row {
                text-align : center;
            }

            .encloser > .second_row .course {
                min-width : 400px;
                max-width : 400px;
                margin : 10px;
            }

            
            .second_row > .course + h3 {
                margin-top: 30px;
                font-size: 28px;
            }

            .second_row > .course img {
                width : 50px;
                height : 50px;
                float : left;
                margin : 20px;
            }

            .second_row > .course p {
                max-height : 250px;
                overflow : hidden;
                text-overflow : ellipsis;
            }

            .third_row {
                justify-content: center;
                align-items: center;
            }

            .themed_btn {
                width: 265px;
                height: 65px;
                background: var(--color_dark_pry);
                color: var(--color_light_pry);
                text-align: center;
                line-height: 65px;
                font-size: 20px;
                font-weight: 400;
                margin: 45px auto 0;
                display: flex;
                justify-content: center;
                text-decoration : none;
                box-shadow : inset 0px 0px 8px var(--shadow_dark_pry);
            }
            
            .themed_btn:hover,
            .themed_btn:focus {
                background: var(--color_light_pry);
                color: var(--color_dark_pry);
                transition: ease all 0.5s;
                text-decoration : none;
            }

            /*third section*/
            .third_section {
                min-height : 100vh;
                max-height : 100vh;
                min-width : 100vw;
                max-width : 100vw;
                display : flex;
                flex-direction : column;
                justify-content: center;
                align-items : center;
            }

            .third_section > h1 {
                color : var(--color_light_pry);
                text-shadow : 0px 0px 10px var(--color_dark_pry);
                text-align : center;
                padding : 15px;
            }

            .third_section > .swiper-container {
                min-width : 90vw;
                max-width : 90vw;
                height : 100%;
            }

            #testimonies {
                min-height : 90vh;
                max-height : 95vh;
                padding-top : 200px;
            }

            .testimony {
                min-width : 320px;
                max-width : 320px;
                min-height : 50vh;
                max-height : 50vh;
                margin : 15px;
                margin-left : 200px;
                text-align : center;
                margin-bottom : -20px;
                background : var(--glassy_background_light_pry_1);
                backdrop-filter : var(--glassy_blur_1);
                box-shadow : 0px 0px 6px var(--shadow_dark_pry);
                padding : 20px;
            }

            .testimony img {
                height : 70px;
                width : 70px;
                border-radius : 8px;
                margin-bottom : 20px;
            }
            
            .swiper-button-next, .swiper-button-prev {
                color : var(--color_dark_pry);
            }

            /*fourth section*/
            .fourth_section {
                background : var(--color_light_pry);
                min-height : 100vh;
                max-height : 100vh;
            }

            .fourth_section > h1 {
                color : var(--color_light_pry);
                text-shadow : 0px 0px 10px var(--color_dark_pry);
                text-align : center;
                padding : 15px;
            }

            .fourth_section > #timeline {
                min-height : 75vh;
                max-height : 75vh;
                min-width : 100%;
                padding-top : 20px;
                overflow : scroll;
            }

            #timeline .time {
                min-width : 100%;
                margin : 30px 0px;
                margin-bottom : 10px;
                padding-top : 15px;
            }

            #timeline .time.right {
                display : flex;
                justify-content: flex-end;
            }

            #timeline details {
                position : relative;
                width : 45%;
                padding : 8px;
                color : var(--color_dark_pry);
            }

            #timeline details.left {
                margin-left : 4%;
                text-align : right;
            }

            #timeline details.right {
                margin-right : 4%;
            }

            #timeline details.right::before {
                content : '';
                position : absolute;
                top : 0px;
                left : -2.25%;
                border-left : 1px solid var(--color_dark_pry);
                height : 100%;
            }

            #timeline details.right::after {
                content : url('images/check.svg') '     ' attr(data-time);
                color : var(--color_dark_pry);
                position : absolute;
                top : -30px;
                left : -6.4%;
            }

            #timeline details.left::after {
                content : '';
                position : absolute;
                top : 0px;
                right : -2.25%;
                border-left : 1px solid var(--color_dark_pry);
                height : 100%;
            }

            #timeline details.left::before {
                content : attr(data-time) '     ' url('images/check.svg');
                color : var(--color_dark_pry);
                position : absolute;
                top : -30px;
                right : -6.4%;
            }

            /*fifth section*/
            .fifth_section {
                min-height : 100vh;
                max-height : 100vh;
            }

            .fifth_section > h1 {
                color : var(--color_light_pry);
                text-shadow : 0px 0px 10px var(--color_dark_pry);
                text-align : center;
                padding : 15px;
            }

            .fifth_section > .swiper-container2 {
                min-width : 70vw;
                max-width : 80vw;
                height : 100%;
            }

            #staff {
                min-height : 90vh;
                max-height : 95vh;
                padding-top : 200px;
            }

            .staff {
                min-width : 320px;
                max-width : 320px;
                min-height : 50vh;
                max-height : 50vh;
                margin : 15px;
                margin-left : 200px;
                text-align : center;
                margin-bottom : -20px;
                background : var(--glassy_background_light_pry_1);
                backdrop-filter : var(--glassy_blur_1);
                box-shadow : 0px 0px 6px var(--shadow_dark_pry);
                padding : 20px;
            }

            .staff img {
                height : 70px;
                width : 70px;
                border-radius : 8px;
                margin-bottom : 20px;
            }

            /*last section*/
            .last_section {
                min-height : 100vh;
                max-height : 100vh;
                min-width : 100vw;
                max-width : 100vw;
            }

            .footer_menu ul li {
                font-size: 16px;
                line-height: 30px;
            }

            .footer_menu ul li a {
                color: #fff;
                font-weight: 300;
            }

            .footer {
                background: #3a3a3a;
            }

            .footer_link_heading h3 {
                color: #fff;
                font-size: 22px;
                font-weight: 300;
                letter-spacing: 0;
            }

            .footer_menu ul {
                list-style: none;
            }

            footer {
                position : absolute;
                bottom : 0px;
                height : 100%;
                width : 100%;
                padding-top : 80px;
            }

            @keyframes slide_left {
                from {
                    opacity : 0;
                    transform : translateX(20vw);
                }

                to {
                    opacity : 1;
                    transform : translateX(0px);
                }
            }
        </style>
    </head>
    <body class = "scrollW2 themed christmas">
       
        <div id = extras>
            <button><i class = "bi bi-people"></i></button>
            <div id = extras-wrapper>
                <a href = "#"><i class = "bi bi-facebook"></i></a>
                <a href = "#"><i class = "bi bi-instagram"></i></a>
                <a href = "#"><i class = "bi bi-whatsapp"></i></a>
                <a href = "#"><i class = "bi bi-twitter"></i></a>
                &nbsp &nbsp  | &nbsp <a href = "#">FAQ</a> &nbsp | &nbsp <a href = "#">Help Desk</a> &nbsp
            </div>
        </div>

        <div id = extras2>
            <button><i class = "bi bi-people"></i></button>
            <div id = extras2-wrapper>
                <i class = "bi bi-phone"></i> CALL US TODAY! +(234) 5678 8928  &nbsp  | &nbsp
                <i class = "bi bi-clock"></i> WE ARE OPEN! Mon-Fri 8:00 - 17:00  &nbsp
            </div>
        </div>
    
        <div id="wrapper" class="clearfix">
            
        
            
          <!-- Start main-content -->
            <div class="main-content">
                
                <div id="fullpage-container">
         
                <div class="first_section section">
                    <!-- section -->
                    @if (Route::has('login'))
                        <div class="hidden toplinks sm:block">
                            @auth
                                <a href="{{ url('/dashboard') }}" class="text-sm  underline">Dashboard</a>
                            @else
                                <a href="{{ route('login') }}" class="text-sm underline">Log in</a>

                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="ml-4 text-sm underline">Register</a>
                                @endif
                            @endauth
                        </div>
                    @endif    
                    <h2>Ports For All Students </h2>
                    <p>Simple Webpage for your widest pen-work with access to wide ranges of code snippets.</p>
                    
                    {{-- <video id = "videofirst" autoplay loop muted src="{{asset('video/anim.mp4')}}"></video> --}}
                 
                    <div class = qudroid_ad_container>
                        <div class = "qudroid_ad one">
                            <h3>Own Your Learning Path</h3>
                            <button id = viewport_link>View Ports</button>
                        </div>

                        <div class = "qudroid_ad two">
                            <h4>Best Web Design Training.</h4>
                            <ul>
                                <li>Create a port hosted by Qudroid</li>
                                <li>Free templates</li>
                                <li>100 requests monthly</li>
                                <li>50 MB data storage</li>
                            </ul>
                            <button id = signup_link>Sign Up</button>
                        </div>
                    </div>

                </div>
        
                <div class="second_section section">
                    <div class="encloser">
                        <div class="row first_row">
                            <div class="course col-lg-12 text_align_center">
                                <div class="full heading_s1">
                                    <h2>Our Courses</h2>
                                </div>
                                <div class="full">
                                    <p class="large">We offer a wide variety of Courses --- Programming is all we think about...</p>
                                </div>
                            </div>
                        </div>
                        <div class="second_row row">

                            <div class="course col-md-4 text_align_center">
                                <div class="cours">
                                <img class="img-responsive imgs" src="images/img.png" alt="#" />
                                </div>
                                <h3>Web Design</h3>
                                <p>adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in re</p>
                            </div>  

                            <div class="course col-md-4 text_align_center">
                                <div class="cours">
                                <img class="img-responsive imgs" src="images/pix.jpg" alt="#" />
                                </div>
                                <h3>Front-end Development</h3>
                                <p>adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in re</p>
                            </div> 

                            <div class="course col-md-4 text_align_center">
                                <div class="cours">
                                <img class="img-responsive imgs" src="images/web.jpg" alt="#" />
                                </div>
                                <h3>Back-end Development</h3>
                                <p>adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in re</p>
                            </div> 

                        </div>
                        <div class="third_row row">
                            <div class="col-md-12">
                                <div class="full">
                                    <a class = "themed_btn" href="{{route('dashboard')}}">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
    
                <!-- end section -->
                
                </div>
                <div class="third_section section">
                    <h1>
                        Student's Testimonies
                    </h1>
                    <!-- Slider main container -->
                    <div class="swiper-container">
                        
                        <!-- Additional required wrapper -->
                        <div id = testimonies class = "swiper-wrapper">
                            
                            <!-- Slides -->
                            <div class="testimony swiper-slide">
                                <img src="{{asset('images/1.jpg')}}" alt="">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In repellendus quasi commodi molestias culpa fugiat, ratione unde quas illum dignissimos.</p>
                            </div>
                            
                            <div class="testimony swiper-slide">
                                <img src="{{asset('images/2.jpg')}}" alt="">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In repellendus quasi commodi molestias culpa fugiat, ratione unde quas illum dignissimos.</p>
                            </div>
                            
                            <div class="testimony swiper-slide">
                                <img src="{{asset('images/5.jpg')}}" alt="">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In repellendus quasi commodi molestias culpa fugiat, ratione unde quas illum dignissimos.</p>
                            </div>
                            
                            <div class="testimony swiper-slide">
                                <img src="{{asset('images/8.jpg')}}" alt="">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In repellendus quasi commodi molestias culpa fugiat, ratione unde quas illum dignissimos.</p>
                            </div>
                        </div>

                        <!-- If we need pagination -->
                        <div class="swiper-pagination"></div>
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-button-next"></div>

                        <div class="swiper-scrollbar"></div>
                    </div>
                </div>
                <div class="fourth_section section">
                    <h1>
                        Timeline
                    </h1>
                    <div id = "timeline">

                        <div class = "time">
                            <details class = "left" data-time = "23-06-21">
                                <summary>Builder Launch</summary>
                                <p>Qudroid System launches it's Builder</p>
                            </details>
                        </div>


                        <div class = "time right">
                            <details class = "right" data-time = "23-06-21">
                                <summary>Builder Launch</summary>
                                <p>Qudroid System launches it's Builder</p>
                            </details>
                        </div>

                        <div class = "time">
                            <details class = "left" data-time = "23-06-21">
                                <summary>Builder Launch</summary>
                                <p>Qudroid System launches it's Builder</p>
                            </details>
                        </div>


                        <div class = "time right">
                            <details class = "right" data-time = "23-06-21">
                                <summary>Builder Launch</summary>
                                <p>Qudroid System launches it's Builder</p>
                            </details>
                        </div>

                        <div class = "time">
                            <details class = "left" data-time = "23-06-21">
                                <summary>Builder Launch</summary>
                                <p>Qudroid System launches it's Builder</p>
                            </details>
                        </div>

                        <div class = "time right">
                            <details class = "right" data-time = "23-06-21">
                                <summary>Builder Launch</summary>
                                <p>Qudroid System launches it's Builder</p>
                            </details>
                        </div>
                        
                        <div class = "time">
                            <details class = "left" data-time = "23-06-21">
                                <summary>Builder Launch</summary>
                                <p>Qudroid System launches it's Builder</p>
                            </details>
                        </div>


                        <div class = "time right">
                            <details class = "right" data-time = "23-06-21">
                                <summary>Builder Launch</summary>
                                <p>Qudroid System launches it's Builder</p>
                            </details>
                        </div>
                        
                    </div>
                    <div class="full">
                        <a class = "themed_btn" href="{{route('gallery')}}">Read More</a>
                    </div>
                
                </div>
                <div class="fifth_section section">
                    <h1>
                        Staff info
                    </h1>
                    <div class="swiper-container2">
                        
                        <!-- Additional required wrapper -->
                        <div id = staff class = "swiper-wrapper">
                            
                            <!-- Slides -->
                            <div class="staff swiper-slide">
                                <img src="{{asset('images/1.jpg')}}" alt="">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In repellendus quasi commodi molestias culpa fugiat, ratione unde quas illum dignissimos.</p>
                            </div>
                            
                            <div class="staff swiper-slide">
                                <img src="{{asset('images/2.jpg')}}" alt="">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In repellendus quasi commodi molestias culpa fugiat, ratione unde quas illum dignissimos.</p>
                            </div>
                            
                            <div class="staff swiper-slide">
                                <img src="{{asset('images/5.jpg')}}" alt="">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In repellendus quasi commodi molestias culpa fugiat, ratione unde quas illum dignissimos.</p>
                            </div>
                            
                            <div class="staff swiper-slide">
                                <img src="{{asset('images/8.jpg')}}" alt="">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In repellendus quasi commodi molestias culpa fugiat, ratione unde quas illum dignissimos.</p>
                            </div>
                        </div>

                        <!-- If we need pagination -->
                        <div class="swiper-pagination"></div>
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-button-next"></div>

                        <div class="swiper-scrollbar"></div>
                    </div>
                
                </div>
        
            
        
                <div class="section last_section" id="contact">
                    <!-- footer -->
                    <footer class="footer layout_padding">
                        <div class="container">
                            <div class="row">

                            <div class="col-md-4 col-sm-12">
                                <a href="index.html"><img style = "width : 80px; height : 80px; margin : 50px;" src = "{{asset('images/logo.png')}}" /></a>
                                <div class="footer_link_heading">
                                    <div class="footer_menu margin_top_30">
                                    <ul>
                                        <li><a href="tel:9876543210">9876 543 210</a></li>
                                        <li><a href="#">QudroidSystems@gmail.com</a></li>
                                        <li><a href="#">Meet with us @ 12 Esso, Ondo</a></li>
                                    </ul>
                                </div>
                                </div>
                            </div>
                            
                            <div class="col-md-8">
                                <div class="row">
                                    <div class="col-md-4 col-sm-12">
                                <div class="footer_link_heading">
                                    <h3>FEATURED COURSES</h3>
                                </div>
                                <div class="footer_menu">
                                    <ul>
                                        <li><a href="#">Starting Soon</a></li>
                                        <li><a href="#">Just Added</a></li>
                                        <li><a href="#">Most Viewed</a></li>
                                        <li><a href="#">Top Paid</a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-md-4 col-sm-12">
                                <div class="footer_link_heading">
                                    <h3>CATEGORIES</h3>
                                </div>
                                <div class="footer_menu">
                                    <ul>
                                    <li><a href="#">Arts & Design</a></li>
                                    <li><a href="#">Business</a></li>
                                    <li><a href="#">Computer</a></li>
                                    <li><a href="#">Data entery</a></li>
                                    </ul>
                                </div>
                            </div>
                            
                            <div class="col-md-4 col-sm-12">
                                <div class="footer_link_heading">
                                    <h3>USEFUL LINKS</h3>
                                </div>
                                <div class="footer_menu">
                                    <ul>
                                    <li><a href="#">FAQs</a></li>
                                    <li><a href="#">Success Stories</a></li>
                                    <li><a href="#">Shop</a></li>
                                    <li><a href="#">Privacy policy</a></li>
                                    <li><a href="#">Contact search</a></li>
                                    <li><a href="#">Jobs and vacancies</a></li>
                                    </ul>
                                </div>
                            </div>
                                </div>
                            </div>
                            
                            </div>
                        </div>
                    </footer>
                    
                </div>
            </div>
          <!-- end main-content -->
        </div>
        <!-- end wrapper --> 
        
        <!-- Footer Scripts --> 
        <!-- JS | Calendar Event Data --> 
        <script src="{{asset('js/calendar-events-data.js')}}"></script>
        <!-- JS | fullpage  --> 
        <script src="{{asset('js/fullpage-slider/jquery.fullpage.min.js')}}"></script> 
        <script src="{{asset('js/swiper-bundle.min.js')}}"></script>
        <script type="text/javascript">
        $(document).ready(function() {
            $('#fullpage-container').fullpage({
                navigation: true,
                navigationPosition: 'right',
                verticalCentered: false
            });
        });

        //document.getElementById("videofirst").playbackRate = 0.5;

        var timeline = document.querySelectorAll('#timeline details');
        timeline.forEach(line => {
            line.addEventListener('click', (e) => {
            e.preventDefault();
            });

            line.addEventListener('mouseenter', () => {
                line.open = true;
            });

            line.addEventListener('mouseleave', () => {
                line.open = false;
            });
        });

        const swiper = new Swiper('.swiper-container', {
            // Optional parameters
            loop: true,
            speed: 400,
            spaceBetween: 100,
            effect: 'cards',
            grabCursor : true,
            centeredSlides : true,
            slidesPerView : 'auto',
        
            // If we need pagination
            pagination: {
            el: '.swiper-pagination',
            },
        
            // Navigation arrows
            navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
            },
        
            // And if we need scrollbar
            scrollbar: {
            el: '.swiper-scrollbar',
            },
        });

        setInterval(() => {
            swiper.slideNext();
        }, 5000);

        const swiper2 = new Swiper('.swiper-container2', {
            // Optional parameters
            loop: true,
            speed: 400,
            spaceBetween: 100,
            effect: 'cards',
            grabCursor : true,
            centeredSlides : true,
            slidesPerView : 'auto',
        
            // If we need pagination
            pagination: {
            el: '.swiper-pagination',
            },
        
            // Navigation arrows
            navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
            },
        
            // And if we need scrollbar
            scrollbar: {
            el: '.swiper-scrollbar',
            },
        });

        setInterval(() => {
            swiper2.slideNext();
        }, 5000);
        </script>
        <!-- JS | Custom script for all pages --> 
         
    </body>
</html>
