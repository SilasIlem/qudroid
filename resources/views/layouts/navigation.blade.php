<nav x-data="{ open: false }" class="bg-white border-b border-gray-100">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex justify-around">
                <!-- Logo -->
                <div class="flex-shrink-0 flex items-center">
                    <a href="{{ route('dashboard') }}">
                        <img style = "width : 30px; height : 30px;" src="{{asset('images/' . Auth::user()->avatar . '.jpg')}}" alt="">
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:pt-4 sm:flex just-around">
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                        <p class = "py-5 deckflex animated flash p-3 sm:flex"><i class = "bi bi-house-fill nav-icon font-bolder text-2 p-2"></i><span>{{ __('Dashboard') }}</span></p>
                    </x-nav-link>
                    <x-nav-link :href="route('about')" :active="request()->routeIs('about')">
                        <p class = "py-5 deckflex sm:flex animated flash p-3 w-24"><i class = "bi bi-people-fill nav-icon font-bolder text-2 p-2"></i><span>{{ __('About Us') }}</span></p>
                    </x-nav-link>
                    <x-nav-link :href="route('gallery')" :active="request()->routeIs('gallery')">
                        <p class = "py-5 deckflex sm:flex animated flash p-3"><i class = "bi bi-easel-fill nav-icon font-bolder text-2 p-2"></i><span>{{ __('Gallery') }}</span></p>
                    </x-nav-link>
                    <x-nav-link :href="route('chats')" :active="request()->routeIs('chats')">
                        <p class = "py-5 deckflex sm:flex animated flash p-3"><i class = "bi bi-chat-fill nav-icon font-bolder text-2 p-2"></i><span>{{ __('Chats') }}</span></p>
                    </x-nav-link>
                      
                </div>
            </div>

                
            <style>
                div.extras {
                    min-height : 100%;
                    max-height : 100%;
                    display : flex;
                    justify-content: center;
                    position : relative;
                    align-items : center;
                }

                div.extras .drop-menu {
                    height : 250px;
                    display : none;
                    width : 300px;
                    background : white;
                    position : absolute;
                    bottom : -230px;
                    box-shadow : 0px 0px 4px var(--color_dark2_pry);
                    z-index : 99999999;
                }

                .drop-menu .app-nice-bar ul, .app-notice-bar ul {
                    display : flex;
                    flex-wrap : wrap;
                    min-width : 300px;
                    padding-top : 20px;
                    max-width : 300px;
                    height : 160px;
                    text-align : center;
                }

                div.extras .drop-menu.notice {
                    width : 400px;
                    height : 380px;
                    bottom : -360px;
                    overflow-y : scroll;
                    overflow-x : hidden;
                }

                .app-notice-bar {
                    flex-direction : column;
                    padding : 8px;
                }

                .app-notice-bar ul {
                    min-width : 400px;
                    padding : 8px;
                    max-width : 400px;
                }

                .app-notice-bar li {
                    max-height : 50px;
                    width : 100%;
                    padding : 8px;
                }

                .app-nice-bar li {
                    height : 50px;
                    margin : 5px;
                    padding : 10px;
                    min-width : calc(100% / 3 - 10px);
                    max-width : calc(100% / 3 - 10px);
                }

                .app-nice-bar li:hover {
                    background : grey;
                }

                .notice-bottom {
                    position : fixed;
                    bottom : 0px;
                    height : 50px;
                    width : 100%;
                    display : block;
                    background : white;
                    box-shadow : 0px 0px 4px var(--color_dark2_pry);
                }

                .extras:hover .drop-menu {
                    display : block;
                }

            </style>

            <div class="extras">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="nav-icon bi bi-droplet-fill"></i></a>
                <div class="slideInRight drop-menu">
                    <div class="app-nice-bar">
                        <ul>
                            <li>
                                <a href="weather.html">
                                <i class="zmdi zmdi-cloud-outline txt-info"></i>
                                <span class="block">weather</span>
                                </a>
                            </li>
                            <li>
                                <a href="inbox.html">
                                <i style = "color : blue;" class="bi bi-envelope-open txt-success"></i>
                                <span class="block bi bi-gmail">e-mail</span>
                                </a>
                            </li>
                            <li>
                                <a href="route('calendar')">
                                <i style = "color : yellow;" class="bi bi-calendar2-date txt-primary"></i>
                                <span class="block">calendar</span>
                                </a>
                            </li>
                            <li>
                                <a href="vector-map.html">
                                <i class="bi bi-map txt-danger"></i>
                                <span class="block">map</span>
                                </a>
                            </li>
                            <li>
                                <a href="chats.html">
                                <i class="bi bi-chat-square-fill"></i>
                                <span class="block">chat</span>
                                </a>
                            </li>
                            <li>
                                <a href="contact-card.html">
                                <i class="bi bi-phone"></i>
                                <span class="block">contact</span>
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="">
                        <hr class="light-grey-hr ma-0"/>
                        <a class="block text-center read-all" href="javascript:void(0)"> more </a>
                    </div>
                </div>
            </div>

            <div class="extras">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="bi nav-icon bi-bell-fill"></i></a>
                <div class="slideInRight drop-menu notice">
                    <div class="app-notice-bar">
                        <div class="notification-box-head-wrap pt-2">
                            <span class="notification-box-head pull-left inline-block">notifications</span>
                            <a class="text-red-400 float-right" href="javascript:void(0)"> clear all </a>
                            <div class="clearfix"></div>
                            <hr class="light-grey-hr ma-0"/>
                        </div>
                        <ul>
                            <li>
                            <div class="streamline message-nicescroll-bar">
                                <div class="sl-item">
                                <a href="javascript:void(0)">
                                    <div class="icon bg-green">
                                    <i class="zmdi zmdi-flag"></i>
                                    </div>
                                    <div class="sl-content">
                                    <span class="inline-block capitalize-font  pull-left truncate head-notifications">New subscription created</span>
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
                      
                        </ul>
                        
                        
                        <div class="notice-bottom">
                            <hr class="light-grey-hr ma-0"/>
                            <a class="block text-center" href="javascript:void(0)"> read all </a>
                        </div>  
                    </div>

                                
                </div>
             
            </div>
            
            <div id = "hideEm">
            <button class="relative top-3 flex items-center text-sm font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">
                <div>Shortcuts</div><i class = "text-2xl px-2 pt-2 bi bi-arrow-bar-down"></i>
            </button>
        
            <div class = "shortcuts">
                
                <div class="megamenu">
                    <div class="megamenu-row">
                    <div class="col3">
                        <ul class="list-unstyled">
                            Press Enter and be done with it.
                            
                                <input placeholder="Search" id = search class="search-query search" type="text">

                            <div id="results">
                            </div>
                        </ul>
                    </div>
                    <div class="col3">
                        <ul class="list-unstyled">
                            <li><a href="{{ route('builder') }}"><i class="fa fa-building"></i> Builder </a></li>
                            <li><a href="{{ route('chats') }}"><i class="fa fa-calendar"></i> Chats </a></li>
                            <li><a href="{{ route('port') }}"><i class="fa fa-calendar"></i> Portfolios </a></li>
                        </ul>
                    </div>
                    <div class="col3">
                        <ul class="list-unstyled">
                        <a href="shortcode-listgroup-panels.html"><li><i class="fa fa-th-list"></i> Listgroup Panels</li></a>
                        <a href="shortcode-lists.html"><li><i class="fa fa-list"></i> Lists</li></a>
                        <a href="shortcode-maps.html"><li><i class="fa fa-map-o"></i> Maps</li></a>
                        <a href="shortcode-media-embed.html"><li><i class="fa fa-play-circle-o"></i> Media Embed</li></a>
                        </ul>
                    </div>
                    <div class="col3">
                        <ul class="list-unstyled">
                        <li><a href="shortcode-styled-icons.html"><i class="fa fa-facebook-square"></i> Styled Icons</a></li>
                        <li><a href="shortcode-subscribe.html"><i class="fa fa-user-plus"></i> Subscribe</a></li>
                        <li><a href="shortcode-tables.html"><i class="fa fa-table"></i> Tables</a></li>
                        <li><a href="shortcode-tabs.html"><i class="fa fa-indent"></i> Tabs</a></li>
                         </ul>
                    </div>
                    </div>
                </div>
            </div>
        </div>
{{--         
        <ul class="nav navbar-right top-nav pull-right">
            {{-- <li>
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
            </li> --}}
            {{--
            <div class="dropdown alert-drp">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="zmdi zmdi-notifications top-nav-icon"></i><span class="top-nav-icon-badge">5</span></a>
                <ul  class="dropdown-menu alert-dropdown" data-dropdown-in="bounceIn" data-dropdown-out="bounceOut">
                    
                </ul>
            </l>
            
        </ul> --}}

       
            <div class="hidden sm:flex sm:items-center sm:ml-6">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="flex items-center text-sm font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">
                            <div>{{ Auth::user()->name }}</div>

                            <div class="ml-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <!-- Authentication -->
                       
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            
                            <x-dropdown-link :href="route('logout')"
                                    onclick="(() => {
                                        event.preventDefault(); 
                                        this.closest('form').submit();
                                        })()">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
                
            </div>

            <!-- Hamburger -->
            <div class="-mr-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                <i class = "bi bi-house font-bolder text-2 pt-5 p-2"></i>{{ __('Dashboard') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('about')" :active="request()->routeIs('about')">
                <i class = "bi bi-people font-bolder text-2 p-2"></i>{{ __('About Us') }}
            </x-responsive-nav-link>

            <x-responsive-nav-link :href="route('gallery')" :active="request()->routeIs('gallery')">
                <i class = "bi bi-easel-fill font-bolder text-2 p-2"></i>{{ __('Gallery') }}
            </x-responsive-nav-link>

            <x-responsive-nav-link :href="route('calendar')" :active="request()->routeIs('calendar')">
               <i class = "bi bi-calendar2-date font-bolder text-2 p-2"></i>{{ __('Calender')}}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('chats')" :active="request()->routeIs('chats')">
              <i class = "bi bi-chat-fill font-bolder text-2 p-2"></i>{{ __('Chats') }}
            </x-responsive-nav-link>
        </div>

        

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200">
            <div class="px-4" style = "cursor : none;">
                <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
            </div>
        

            
            <div class="mt-3 space-y-1">
                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>
            </div>
        </div>
    </div>
</nav>
