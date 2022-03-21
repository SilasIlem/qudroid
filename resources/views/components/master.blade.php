<!DOCTYPE html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <meta name="csrf-token" content="{{ csrf_token() }}">
            <meta name="description" content="Qudroid | Education & Courses HTML Template" />
            <meta name="keywords" content="academy, course, education, education html theme, elearning, learning," />
            <meta name="author" content="Help3" />

            <title>Qudroid Systems</title>
    
            <link rel = "shortcut icon" href = "{{asset('images/logo.png')}}" />

            <!-- Fonts -->
            <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
            <link rel="stylesheet" href="{{asset('css/qudroid/color-schemes.css')}}">
            <link rel="stylesheet" href="{{asset('css/qudroid/scrollbar-mods.css')}}">
            <!-- Styles -->
            <link rel="stylesheet" href="{{ asset('css/app.css') }}">
            <link rel = "stylesheet" href = "{{asset('css/custom.css')}}"/>
            
            
   
            <!-- Stylesheet -->
            <link href = "{{asset('css/bootstrap-icons/bootstrap-icons.css')}}" rel = "stylesheet" />
            <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
            <link href="{{asset('css/jquery-ui.min.css')}}" rel="stylesheet" type="text/css">
            <link href="{{asset('css/animate.css')}}" rel="stylesheet" type="text/css">
            <link href="{{asset('css/css-plugin-collections.css')}}" rel="stylesheet"/>
            <!-- CSS | menuzord megamenu skins -->
            <link id="menuzord-menu-skins" href="{{asset('css/menuzord-skins/menuzord-rounded-boxed.css')}}" rel="stylesheet"/>
            <!-- CSS | Main style file -->
            <link href="{{asset('css/style-main.css')}}" rel="stylesheet" type="text/css">
            <!-- CSS | Preloader Styles -->
            <link href="{{asset('css/preloader.css')}}" rel="stylesheet" type="text/css">
            <!-- CSS | Custom Margin Padding Collection -->
            <link href="{{asset('css/custom-bootstrap-margin-padding.css')}}" rel="stylesheet" type="text/css">
            <!-- CSS | Responsive media queries -->
            <link href="{{asset('css/responsive.css')}}" rel="stylesheet" type="text/css">
            <!-- CSS | Style css. This is the file where you can place your own custom css code. Just uncomment it and use it. -->
            
            <!-- Revolution Slider 5.x CSS settings -->
            <link  href="{{asset('js/revolution-slider/css/settings.css')}}" rel="stylesheet" type="text/css"/>
            <link  href="{{asset('js/revolution-slider/css/layers.css')}}" rel="stylesheet" type="text/css"/>
            <link  href="{{asset('js/revolution-slider/css/navigation.css')}}" rel="stylesheet" type="text/css"/>

            <!-- CSS | Theme Color -->
            <link href="{{asset('css/colors/theme-skin-color-set-1.css')}}" rel="stylesheet" type="text/css">
            <link href = "{{asset('css/charisma-app.css')}}" />
            <!-- external javascripts -->
            <script src="{{asset('js/jquery-2.2.4.min.js')}}"></script>
            <script src="{{asset('js/jquery-ui.min.js')}}"></script>
            <script src="{{asset('js/bootstrap.min.js')}}"></script>
            <script src = "{{asset('js/charisma.js')}}"></script>
            <!-- JS | jquery plugin collection for this theme -->
            <script src="{{asset('js/jquery-pugin-collection.js')}}"></script>
            
            <!-- Revolution Slider 5.x SCRIPTS -->
            <script src="{{asset('js/revolution-slider/js/jquery.themepunch.tools.min.js')}}"></script>
            <script src="{{ asset('js/revolution-slider/js/jquery.themepunch.revolution.min.js')}}"></script>
          
            <script src="{{ asset('js/app.js') }}" defer></script>

            <style>

                *::-webkit-scrollbar-thumb {
                    background : var(--color_light2_pry);
                    width : 3px;
                }

                .border-focused {
                    border-bottom : 2.5px solid var(--color_light2_pry);
                }

                #search {
                    width : 200px;
                    float : right;
                }

                #backUp {
                    position : fixed;
                    width : 50px;
                    height : 50px;
                    bottom : 20px;
                    right : 20px;
                    background : var(--color_dark2_pry);
                    outline : 4px solid var(--color_dark2_pry);
                    color : white;
                    z-index : 999999999;
                    display : none;
                    border : 3px solid var(--natural_color_light);
                    animation : slideOutDown 1.5s linear forwards;
                }

                #backUp.up {
                    display : block;
                    animation : slideInUp 2s ease-in-out forwards;
                }

                #dashlogo.up {
                    display : block;
                    animation : slideInDown 2s ease-in-out forwards;
                }

                #profilePic {
                    height : 100px;
                    width : 100px;
                    border-radius : 50%;
                    padding : 10px;
                }

                #profileForm input, #profileForm textarea {
                    float : right;
                    margin-right : 10px;
                    width : 150px;
                }

                #profileForm {
                    display : flex;
                    flex-direction : column;
                    align-items : center;
                    justify-content: center;
                }

                #profileForm div {
                    min-width : 100%;
                    margin-bottom : 20px;
                }

                @media screen and (max-width : 800px) {
                    #hideEm {
                        display : none;
                    }
                }
                
                #profileForm input:not(input[disabled=true]) {
                    color : red;
                }

                #profileForm input[disabled=true] {
                    color : blue;
                }
                
                .search {
                    border-radius : 8px;
                    min-width : 280px;
                    height : 50px;
                }
            </style>

        </head>
        <body class="font-sans antialiased scrollW2 overflowx-hidden themed christmas">
            <div class="min-h-screen">
                <div class="bg-grey-100 fixed"></div>
                
                @include('layouts.navigation')
    
                <!-- Page Heading -->
{{-- 
                <!-- Top Menu Items -->
                <nav class="navbar navbar-inverse navbar-to-top">
                  
                    <div id="mobile_only_nav" class="mobile-only-nav pull-right">
                    <ul class="nav navbar-right top-nav pull-right">
                        <li>
                        <a id="open_right_sidebar" href="#"><i class="zmdi zmdi-settings top-nav-icon"></i></a>
                        </li>
                        
                        <li class="dropdown full-width-drp">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="zmdi zmdi-more-vert top-nav-icon"></i></a>
                        <ul class="dropdown-menu mega-menu pa-0" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                            <li class="product-nicescroll-bar row">
                            <ul class="pa-20">
                                <li class="col-md-3 col-xs-6 col-menu-list">
                                <a href="javascript:void(0);"><div class="pull-left"><i class="zmdi zmdi-landscape mr-20"></i><span class="right-nav-text">Dashboard</span></div><div class="pull-right"><i class="zmdi zmdi-caret-down"></i></div><div class="clearfix"></div></a>
                                <hr class="light-grey-hr ma-0"/>
                                <ul>
                                    <li>
                                    <a href="index.html">Analytical</a>
                                    </li>
                                    <li>
                                    <a href="index2.html">Demographic</a>
                                    </li>
                                    <li>
                                    <a href="index3.html">Project</a>
                                    </li>
                                    <li>
                                    <a href="index4.html">Hospital</a>
                                    </li>
                                    <li>
                                    <a href="index5.html">HRM</a>
                                    </li>
                                    <li>
                                    <a href="index6.html">Real Estate</a>
                                    </li>
                                    <li>
                                    <a href="profile.html">profile</a>
                                    </li>
                                </ul>
                                </li>
                                <li class="col-md-3 col-xs-6 col-menu-list">
                                <a href="javascript:void(0);">
                                    <div class="pull-left">
                                    <i class="zmdi zmdi-shopping-basket mr-20"></i><span class="right-nav-text">E-Commerce</span>
                                    </div>	
                                    <div class="pull-right"><span class="label label-success">hot</span>
                                    </div>
                                    <div class="clearfix"></div>
                                </a>
                                <hr class="light-grey-hr ma-0"/>
                                <ul>
                                    <li>
                                    <a href="e-commerce.html">Dashboard</a>
                                    </li>
                                    <li>
                                    <a href="product.html">Products</a>
                                    </li>
                                    <li>
                                    <a href="product-detail.html">Product Detail</a>
                                    </li>
                                    <li>
                                    <a href="add-products.html">Add Product</a>
                                    </li>
                                    <li>
                                    <a href="product-orders.html">Orders</a>
                                    </li>
                                    <li>
                                    <a href="product-cart.html">Cart</a>
                                    </li>
                                    <li>
                                    <a href="product-checkout.html">Checkout</a>
                                    </li>
                                </ul>
                                </li>
                                <li class="col-md-6 col-xs-12 preview-carousel">
                                <a href="javascript:void(0);"><div class="pull-left"><span class="right-nav-text">latest products</span></div><div class="clearfix"></div></a>
                                <hr class="light-grey-hr ma-0"/>
                                <div class="product-carousel owl-carousel owl-theme text-center">
                                    <a href="#">
                                    <img src="dist/img/chair.jpg" alt="chair">
                                    <span>Circle chair</span>
                                    </a>
                                    <a href="#">
                                    <img src="dist/img/chair2.jpg" alt="chair">
                                    <span>square chair</span>
                                    </a>
                                    <a href="#">
                                    <img src="dist/img/chair3.jpg" alt="chair">
                                    <span>semi circle chair</span>
                                    </a>
                                    <a href="#">
                                    <img src="dist/img/chair4.jpg" alt="chair">
                                    <span>wooden chair</span>
                                    </a>
                                    <a href="#">
                                    <img src="dist/img/chair2.jpg" alt="chair">
                                    <span>square chair</span>
                                    </a>								
                                </div>
                                </li>
                            </ul>
                            </li>	
                        </ul>
                        </li>
                        <li class="dropdown alert-drp">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="zmdi zmdi-notifications top-nav-icon"></i><span class="top-nav-icon-badge">5</span></a>
                        <ul  class="dropdown-menu alert-dropdown" data-dropdown-in="bounceIn" data-dropdown-out="bounceOut">
                            <li>
                            <div class="notification-box-head-wrap">
                                <span class="notification-box-head pull-left inline-block">notifications</span>
                                <a class="txt-danger pull-right clear-notifications inline-block" href="javascript:void(0)"> clear all </a>
                                <div class="clearfix"></div>
                                <hr class="light-grey-hr ma-0"/>
                            </div>
                            </li>
                            <li>
                            <div class="streamline message-nicescroll-bar">
                                <div class="sl-item">
                                <a href="javascript:void(0)">
                                    <div class="icon bg-green">
                                    <i class="zmdi zmdi-flag"></i>
                                    </div>
                                    <div class="sl-content">
                                    <span class="inline-block capitalize-font  pull-left truncate head-notifications">
                                    New subscription created</span>
                                    <span class="inline-block font-11  pull-right notifications-time">2pm</span>
                                    <div class="clearfix"></div>
                                    <p class="truncate">Your customer subscribed for the basic plan. The customer will pay $25 per month.</p>
                                    </div>
                                </a>	
                                </div>
                                <hr class="light-grey-hr ma-0"/>
                                <div class="sl-item">
                                <a href="javascript:void(0)">
                                    <div class="icon bg-yellow">
                                    <i class="zmdi zmdi-trending-down"></i>
                                    </div>
                                    <div class="sl-content">
                                    <span class="inline-block capitalize-font  pull-left truncate head-notifications txt-warning">Server #2 not responding</span>
                                    <span class="inline-block font-11 pull-right notifications-time">1pm</span>
                                    <div class="clearfix"></div>
                                    <p class="truncate">Some technical error occurred needs to be resolved.</p>
                                    </div>
                                </a>	
                                </div>
                                <hr class="light-grey-hr ma-0"/>
                                <div class="sl-item">
                                <a href="javascript:void(0)">
                                    <div class="icon bg-blue">
                                    <i class="zmdi zmdi-email"></i>
                                    </div>
                                    <div class="sl-content">
                                    <span class="inline-block capitalize-font  pull-left truncate head-notifications">2 new messages</span>
                                    <span class="inline-block font-11  pull-right notifications-time">4pm</span>
                                    <div class="clearfix"></div>
                                    <p class="truncate"> The last payment for your G Suite Basic subscription failed.</p>
                                    </div>
                                </a>	
                                </div>
                                <hr class="light-grey-hr ma-0"/>
                                <div class="sl-item">
                                <a href="javascript:void(0)">
                                    <div class="sl-avatar">
                                    <img class="img-responsive" src="dist/img/avatar.jpg" alt="avatar"/>
                                    </div>
                                    <div class="sl-content">
                                    <span class="inline-block capitalize-font  pull-left truncate head-notifications">Sandy Doe</span>
                                    <span class="inline-block font-11  pull-right notifications-time">1pm</span>
                                    <div class="clearfix"></div>
                                    <p class="truncate">Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit</p>
                                    </div>
                                </a>	
                                </div>
                                <hr class="light-grey-hr ma-0"/>
                                <div class="sl-item">
                                <a href="javascript:void(0)">
                                    <div class="icon bg-red">
                                    <i class="zmdi zmdi-storage"></i>
                                    </div>
                                    <div class="sl-content">
                                    <span class="inline-block capitalize-font  pull-left truncate head-notifications txt-danger">99% server space occupied.</span>
                                    <span class="inline-block font-11  pull-right notifications-time">1pm</span>
                                    <div class="clearfix"></div>
                                    <p class="truncate">consectetur, adipisci velit.</p>
                                    </div>
                                </a>	
                                </div>
                            </div>
                            </li>
                            <li>
                            <div class="notification-box-bottom-wrap">
                                <hr class="light-grey-hr ma-0"/>
                                <a class="block text-center read-all" href="javascript:void(0)"> read all </a>
                                <div class="clearfix"></div>
                            </div>
                            </li>
                        </ul>
                        </li>
                        <li class="dropdown auth-drp">
                        <a href="#" class="dropdown-toggle pr-0" data-toggle="dropdown"><img src="{{asset('./images/' . Auth::user()->avatar .'.jpg')}}" alt="user_auth" class="user-auth-img img-circle"/><span class="user-online-status"></span></a>
                        <ul class="dropdown-menu user-auth-dropdown" data-dropdown-in="flipInX" data-dropdown-out="flipOutX">
                            <li>
                            <a href="profile.html"><i class="zmdi zmdi-account"></i><span>Profile</span></a>
                            </li>
                            <li>
                            <a href="#"><i class="zmdi zmdi-card"></i><span>my balance</span></a>
                            </li>
                            <li>
                            <a href="inbox.html"><i class="zmdi zmdi-email"></i><span>Inbox</span></a>
                            </li>
                            <li>
                            <a href="#"><i class="zmdi zmdi-settings"></i><span>Settings</span></a>
                            </li>
                            <li class="divider"></li>
                            <li class="sub-menu show-on-hover">
                            <a href="#" class="dropdown-toggle pr-0 level-2-drp"><i class="zmdi zmdi-check text-success"></i> available</a>
                            <ul class="dropdown-menu open-left-side">
                                <li>
                                <a href="#"><i class="zmdi zmdi-check text-success"></i><span>available</span></a>
                                </li>
                                <li>
                                <a href="#"><i class="zmdi zmdi-circle-o text-warning"></i><span>busy</span></a>
                                </li>
                                <li>
                                <a href="#"><i class="zmdi zmdi-minus-circle-outline text-danger"></i><span>offline</span></a>
                                </li>
                            </ul>	
                            </li>
                            <li class="divider"></li>
                            <li>
                            <a href="#"><i class="zmdi zmdi-power"></i><span>Log Out</span></a>
                            </li>
                        </ul>
                        </li>
                    </ul>
                    </div>	
                </nav>
                <!-- /Top Menu Items --> --}}

          <!-- Custom CSS -->
          
          <link rel="stylesheet" href="{{ asset('css/bootstrap-icons/bootstrap-icons.css') }}" />
        
    
                <header style = "background : var(--color_dark2_pry)" class="py-1 h-22 shadow">
                    <div style = "color : var(--color_light_pry); font-size : 18px;" class="max-w-4xl mx-0 py-0 px-0 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                    <a  href="#"><button id = backUp><i style = "font-size : 18px; margin-top : 20px;" class = "bi bi-arrow-up-left"></i></button></a>
                </header>
    
                <!-- Page Content -->
                <main>
                    {{ $slot }}
                </main>
              
            </div>
            <script>
                function editEm(event) {
                    if (event.target.classList.contains('editEm')){
                        event.target.classList.remove('editEm');
                        document.querySelectorAll('.edit').forEach((edit) => {edit.disabled = true;});
                    }else if(!event.target.classList.contains('editEm')) {
                        event.target.classList.add('editEm');
                        document.querySelectorAll('.edit').forEach((edit) => {edit.disabled = false;});                 
                    }
                }

                setInterval(() => {
                    document.getElementById('backUp').classList.toggle('up', window.scrollY > 667);
                }, 1000);
                
                var search = document.getElementById('search');
                search.addEventListener('keyup', (e) => {
                    if (e.keyCode == 13) {
                        e.preventDefault();
                        alert("Listen to instructions Bros... Don't press Enter!!!");
                    } else {
                        results.innerHTML = '';
                        if (search.value != '') {
                            let regex = new RegExp(search.value, 'ig');
                            document.querySelectorAll('.searchable').forEach(element => {
                                let result = regex.test(element.innerText);
                                let match = element.innerText.match(regex);
                                console.log(match);
                                var href = window.location.href.split('#')[0];
                                href = href.split('?')[0];
                                let identity = element.id;
                                if(result != false){
                                    results.innerHTML += `<a href = '${href}#${identity}'><p>${element.innerText}</p></a>`;
                                }
                            });
                        }
                    }
                });

                document.getElementById('profile').addEventListener('scroll', () => {}, false);
            </script>
        </body>
    </html>
