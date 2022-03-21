<x-master>

    <x-slot name="header">
        <h4 style = "width : 100vw; animation-duration : 4s; color : white" class="animated slideInLeft font-bold text-center leading-tight">
            {{__("About Qudroid Sytems...")}}
        </h4>

    </x-slot>
    <style>
        #aboutname {
            font-size: 100px;
            color: var(--color_light2_pry);
            display : inline-block;
            padding-left : 10px;
        }

        .course_row {
            justify-content : center;
            align-items : center;
            flex-wrap : wrap;
        }

        .course_row .course {
            min-width : 300px;
            max-width : 300px;
            margin : 30px 10px;
        }

        .course p {
            max-height : 300px;
            overflow : hidden;
            text-overflow : ellipsis;
        }
        
        button {
            cursor: pointer;
        }

        .footer_menu ul li {
            font-size: 16px;
            line-height: 30px;
        }

        .footer_menu ul li a {
            color: var(--natural_color_light);
            font-weight: 300;
        }

        .custom_field {
            float: right;
            width: 64%;
            background: var(--color_light_sec);
            border: solid var(--color_light_pry) 1px;
            min-height: 40px;
            border-radius: 5px;
            color: var(--color_light_sec);
            font-size: 14px;
            padding: 5px 15px;
        }

        .field label {
            float: left;
            width: 36%;
            font-size: 14px;
            font-weight: 500;
            color: var(--natural_color_dark);
            margin: 0;
            min-height: 40px;
            line-height: 40px;
        }

        .form_full label {
            width: 100%;
        }

        form#commant_form div.field textarea.custom_field {
            margin-bottom: 10px;
        }

        .form_full textarea {
            min-height: 100px;
            width: 100%;
        }

        .border-radius_0 {
            border-radius: 0 !important;
        }

        .form_full input,
        .form_full select {
            width: 100%;
            height: 50px;
        }

        .main_full.inner_page {
            background: var(--color_dark2_pry);
            text-align: center;
            min-height: 180px;
        }

        .main_full.inner_page h3 {
            color: var(--natural_color_light);
            margin: 0;
            font-weight: 600;
            text-transform: uppercase;
            line-height: 175px;
            text-align: center;
        }

        .read-btn {
            width: 265px;
            height: 65px;
            background: var(--color_dark2_pry);
            color: var(--natural_color_light);
            text-align: center;
            line-height: 65px;
            font-size: 20px;
            font-weight: 400;
            margin: 45px auto 0;
            display: flex;
            justify-content: center;
        }

        .read-btn:hover,
        .read-btn:focus {
        background: var(--color_light_pry);
        color: var(--color_dark_pry);
        box-shadow : inset 0px 0px 8px var(--shadow_dark_pry);
        transition: ease all 0.5s;
        }

        .course + h3 {
            margin-top: 30px;
            font-size: 28px;
        }

        .course img {
            max-width: 100%;
        }

        body#inner_page header.header {
            background-image: url('images/slider_img.png');
            background-size: 100% auto;
            position: relative;
        }

        .subscriber-pitch {
            background : var(--unusual_color_light);
            background-attachment: fixed;
            background-position: center center;
            min-height: 300px;
            padding: 100px 0 0;
        }

        .subscriber-pitch h4 {
            color: var(--natural_color_light);
            font-size: 28px;
            font-weight: 400;
            margin-bottom: 15px;
        }

        .subscriber-pitch p {
            margin: 0 !important;
            color: var(--natural_color_light);
        }

        .form_subribe input {
            width: 100%;
            background: var(--color_light_sec);
            border: none;
            height: 60px;
            padding: 0 170px 0 25px;
            font-size: 18px;
            line-height: 60px;
        }

        form {
            position: relative;
        }

        .form_subribe button {
            background: var(--glassy_background_light_pry_3);
            border: none;
            color: var(--natural_color_light);
            float: right;
            position: absolute;
            right: 0;
            top: 0;
            width: 170px;
            height: 60px;
            font-size: 18px;
            font-weight: 400;
            line-height: 62px;
        }

        .form_subribe button:hover {
            background : var(--color_light2_pry);
            transition : all .3s linear;
        }

        .form_subribe {
            border-radius: 75px;
            overflow: hidden;
            margin-top: 15px;
        }

        .footer {
            background: var(--natural_color_dark2);
        }

        .footer_link_heading h3 {
            color: var(--natural_color_light);
            font-size: 22px;
            font-weight: 300;
            letter-spacing: 0;
        }

        .footer_menu ul {
            list-style: none;
        }

        .imgs {
            border-radius : 12px;
        }

        @media screen and (min-width : 1780px) {
            #topper {
                position : fixed;
                right : 0px;
                display : flex;
                flex-direction : column;
                height : 80vh;
                width : 30vw;
                justify-content: center;
                align-items : center;
            }
        }

    </style>
    <div class="py-5">
        <div class="max-w-7xl mx-1 sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-4 bg-white border-b border-grey-50 ">
                    <div id = "topper">
                        <div style = "font-size : 70px; display : inline-block; animation-duration : 3s;" class = "animated slideInLeft" id = "AboutHead"> Here at </div><p id = aboutname style = "animation-duration : 5s; animation-time-function : linear;" class = "animated slideInDown">Qudroid</p>
                    </div>
                 
                    <!-- section -->
                    <section class="main_full inner_page">
                        <div class="container-fluid">
                        <div class="row">
                            <div class="full">
                            <h3>About us</h3>    
                            </div>
                        </div>
                        </div>
                    </section>
                    <!-- end section -->
                    
                    <!-- about section -->
                    <section class="layout_padding section about_dottat">
                        <div class="container">
                            <div class="row">
                            <div class="col-lg-12 text_align_center">
                                <div class="full">
                                    <p class="large"><span style = "padding-right : 1.5px;font-size : 20px;">Q</span>udroid Training Centre prides herself with the knowledge of her capabilities. We are exactly what you need to overcome the ever-increasing ignorance of the average Nigerian Youth.</p>
                                </div>
                            </div>
                            <div class="pt-50 col-md-12">
                                <div class="about_img margin_top_30  text_align_center">
                                    <video src="{{asset('video/anim.mp4')}}" alt="#" controls />
                                </div>
                            </div>
                            </div>
                        </div>
                    </section>
                    <!-- end about section -->

                    <!-- section -->
                    <section class="layout_padding section">
                        <div class="container">
                            <div class="row">
                            <div class="course col-lg-12 text_align_center">
                                <div class="full heading_s1">
                                    <h2>Our Courses</h2>
                                </div>
                                <div class="full">
                                    <p class="large">We offer a wide variety of Courses --- Programming is all we think about...</p>
                                </div>
                            </div>
                            </div>
                            <div style = "display : flex;" class="row course_row">

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
                            <div class="row">
                            <div class="col-md-12">
                                <div class="full center">
                                    <a class="read-btn" href="{{route('dashboard')}}">Read More</a>
                                </div>
                            </div>
                            </div>
                        </div>
                    </section>
                    <!-- end section -->
                
                    <!-- section -->
                    <section class="section subscriber-pitch" style="background-color: #3b3bff;">
                        <div class="container">
                            <div class="row">
                            <div class="col-md-6">
                                <div class="full">
                                    <h4>Subscribe Now to Our Newsletter !!</h4>
                                    <p>Exciting Content coming your way<br>We will have them pretty soon.</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div id = form class="form_subribe">
                                    <form method = POST action = "">
                                    <input type="email" name="email" placeholder="Enter Your Email" />
                                    <button>Subscribe</button>
                                    </form>
                                </div>
                            </div>
                            </div>
                        </div>
                    </section>
                    <!-- end section -->
                    
                    <!-- footer -->
                    <footer class="footer layout_padding">
                        <div class="container">
                            <div class="row">

                            <div class="col-md-4 col-sm-12">
                                <a href="index.html"><i style = "font-size : 80px; color : blue;" class = "bi bi-people-fill"></i></a>
                                <div class="footer_link_heading">
                                    <div class="footer_menu margin_top_30">
                                    <ul>
                                        <li><a href="tel:9876543210">9876 543 210</a></li>
                                        <li><a href="#">{{ Auth::user()->email}}</a></li>
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
                    <div class="cpy">
                        <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                            <p>Copyright 2021. All Rights Reserved.<a href="{{route('dashboard')}}"> Qudroid</a></p>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-master>