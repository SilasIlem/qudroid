<x-master>

    <x-slot name="header">
        <h4 style = "width : 100vw; animation-duration : 4s; color : white" class="animated slideInLeft font-bold text-center leading-tight">
            {{__("About Qudroid Sytems...")}}
        </h4>
    </x-slot>
    <style>
        #Cards {
            display : flex;
            flex-wrap : wrap;
            background : var(--glassy_background_light_pry_1);
            justify-content : space-around;
        }
        
        .Card {
            opacity : 0;
        }

        .Card, .Card * {
            color : var(--natural_color_dark);
        }

        .Card.ordinary {
            min-height : 500px;
            width : 300px;
            margin : 20px;
            display : flex;
            flex-direction : column;
            justify-content : space-between;
        }

        .Card.ordinary img {
            padding : 0px 20px 5px 20px;
        }

        .Card.video {
            width : 300px;
            min-height : 500px;
            background : var(--natural_color_light);
            margin : 20px;
            display : flex;
            flex-direction : column;
            justify-content : space-between;
            align-items : center;
            border-radius : 5px;
        }

        

        .Card header {
            text-align : right;
            padding : 20px;
        }

        .Card button {
            border : 2px solid var(--natural_color_light);
            outline : 4px solid var(--color_dark2_pry);
            padding : 5px 15px;
            background : var(--color_dark2_pry);;
            color : var(--natural_color_light);
            margin : 10px;
            border-radius : 20px;
            float : right;
        }

        .Card button:hover {
            background : var(--color_light_pry);
            box-shadow : inset 0px 0px 8px var(--color_dark_pry);
            color : var(--color_dark_pry);
            outline : 4px solid var(--color_dark_pry);
            transition : all .3s ease-in-out;
        }
        
        .Card footer {
            margin : 20px;
        }

        .videocard {
            margin : 5px 8px;
        }

        .showYourCard{
            opacity : 1;
            transition : opacity .3s ease-out forwards;
            z-index : var(--i);
        }
     
    </style>
<div style = "display : flex; justify-content : center;" class="py-5">
        <div style = "width : 100%;" class=" mx-1 sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-4 bg-white border-b border-grey-50 ">
                    
                    <div id = Cards>

                        <div id = one class="Card searchable video">
                            <header>
                                <h3>The Beginning</h3>
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iusto facere explicabo omnis debitis! Impedit placeat voluptatum autem consequatur amet quas id explicabo vero, error, quo eius dolores odit labore facere.</header>
                            <div class = "videocard">
                                <video controls src="{{asset('video/ocean.mp4')}}"></video>
                            </div>
                            <footer>
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ducimus libero commodi magnam necessitatibus autem quaerat tempore deserunt eius debitis laboriosam.
                                <button>Read On</button>
                            </footer>
                        </div>
                        
                        <div id = two class="Card searchable video">
                            <header>
                                <h3>The Concert</h3>
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iusto facere explicabo omnis debitis! Impedit placeat voluptatum autem consequatur amet quas id explicabo vero, error, quo eius dolores odit labore facere.</header>
                            <div class = "videocard">
                                <video controls src="{{asset('video/ocean.mp4')}}"></video>
                            </div>
                            <footer>
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ducimus libero commodi magnam necessitatibus autem quaerat tempore deserunt eius debitis laboriosam.
                                <button>Read On</button>
                            </footer>
                        </div>
                        
                        <div id = three class="Card searchable video">
                            <header>
                                <h3>New Week</h3>
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iusto facere explicabo omnis debitis! Impedit placeat voluptatum autem consequatur amet quas id explicabo vero, error, quo eius dolores odit labore facere.</header>
                            <div class = "videocard">
                                <video controls src="{{asset('video/ocean.mp4')}}"></video>
                            </div>
                            <footer>
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ducimus libero commodi magnam necessitatibus autem quaerat tempore deserunt eius debitis laboriosam.
                                <button>Read On</button>
                            </footer>
                        </div>
                        <div id = four class="Card searchable ordinary">
                            <img src="{{asset('images/img.png')}}" alt="">
                            <img src="{{asset('images/img.png')}}" alt="">
                        </div>
                        
                        <div id = five class="Card searchable video">
                            <header>
                                <h3>New Week</h3>
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iusto facere explicabo omnis debitis! Impedit placeat voluptatum autem consequatur amet quas id explicabo vero, error, quo eius dolores odit labore facere.</header>
                            <div class = "videocard">
                                <video controls src="{{asset('video/ocean.mp4')}}"></video>
                            </div>
                            <footer>
                                Lorem, ipconfig ipsum dolor sit amet consectetur adipisicing elit. Ducimus libero commodi magnam necessitatibus autem quaerat tempore deserunt eius debitis laboriosam.
                                <button>Read On</button>
                            </footer>
                        </div>
                        <div id = six class="Card searchable ordinary">
                            <img src="{{asset('images/img.png')}}" alt="">
                            <img src="{{asset('images/img.png')}}" alt="">
                        </div>

                    </div>


                </div>
            </div>
        </div>
</div>
<script>
    options = {
        root : null,
        rootMargin : '0px',
        threshold : 0.5
    };
    
    const observer = new IntersectionObserver((entries, observer) => {
        entries.forEach((entry) => {
            if(entry.isIntersecting){
                entry.target.classList.add('slideInDown', 'animated', 'showYourCard');
                var n = 1000;
                document.querySelectorAll(".Card").forEach(element => {
                    
                    element.style.zIndex = n;
                    n -= 1;
                });
                observer.unobserve(entry.target);
            };
        });
    }, options);

    
    document.querySelectorAll('.Card').forEach((card) => {
        observer.observe(card);
    });
</script>
</x-master>