<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/" >
                <link rel="stylesheet" href="{{asset('css/bootstrap-icons/bootstrap-icons.css')}}">
                <link rel="stylesheet" href="{{asset('css/animate.css')}}">
                <link rel="stylesheet" href="{{asset('css/filepond.css')}}">
                <img src = "{{asset('images/logo.png')}}" style = "width : 50px; height : 50px;" />
            </a>
        </x-slot>

        <style>
            h1 {
                text-align : center;
                font-size : 30px;
                padding : 15px;
                color : white;
                font-weight : bolder;
                text-shadow : 0px 0px 5px rgb(43, 223, 255);
            }
            .formcard {
                box-shadow : inset 0px 0px 8px rgb(43, 223, 255),
                            inset 0px 0px 5px rgb(164, 185, 189);
                margin-bottom : 50px;
            }

            #logos {
                position : absolute;
                top : 5vh;
                left : 20vw;
                min-width : 60vw;
                max-width : 60vw;
                backdrop-filter : blur(20px);
                background : rgba(255, 255, 255, 0.466);
                min-height : 70px;
                display : flex;
                flex-wrap : wrap;
                align-items : center;
                justify-content: center;
                box-shadow : 0px 0px 8px rgb(87, 255, 241);
                border-top-right-radius : 15px;
                border-top-left-radius : 15px;
                opacity : 0;
                z-index : -50;
            }

            #logos img {
                width : 50px;
                height : 50px;
                margin : 10px;
            }

            .savatar {
                padding : 8px;
                box-shadow : 0px 0px 12px blue;
                margin : 10px;
                margin-bottom : 15px;
                border-radius : 8px;
                position : relative;
            }

            .savatar:hover {
                box-shadow : 0px 0px 15px blue;
                transform : scale(1.05);
                transition : all .5s linear;
            }

            #logos.showlogos {
                display : flex;
                z-index : 1000;
                opacity : .9;
            }

            .avatarContainer {
                display : flex;
                justify-content: space-between;
            }

            #logoPreview img {
                width : 60px;
                height : 60px;
                border-radius : 50%;
                box-shadow : 0px 0px 8px green,
                            0px 0px 12px yellow,
                            0px 0px 18px red,
                            0px 0px 26px blue;
            }
        </style>
        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />
        <div id="logos" class = "bounce animated">
                <img id = 1 src="{{asset('images/1.jpg')}}" alt="">
                <img id = 2 src="{{asset('images/2.jpg')}}" alt="">
                <img id = 3 src="{{asset('images/3.jpg')}}" alt="">
                <img id = 4 src="{{asset('images/4.jpg')}}" alt="">
                <img id = 5 src="{{asset('images/5.jpg')}}" alt="">
                <img id = 6 src="{{asset('images/6.jpg')}}" alt="">
                <img id = 7 src="{{asset('images/7.jpg')}}" alt="">
                <img id = 8 src="{{asset('images/8.jpg')}}" alt="">
        </div>

        <h1>Qudroid Systems</h1>
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div style = "display : flex; justify-content : space-between;">
                <div id = savatar class="mt-4 avatarContainer">

                    <button class = savatar onclick = "document.getElementById('avatar').setAttribute('type', 'file'); upload();">Upload File</button>

                </div>

                <div id = logoPreview></div>

                <div id = s_qvatar class="mt-4 avatarContainer">

                    <button class = savatar onclick = "document.getElementById('logos').classList.toggle('showlogos');">Select Avatar</button>
                    
                </div>
                
            </div>
            
                <x-input id="avatar" class="block mt-1 w-full" type="hidden" name="avatar" :value="old('avatar')" required autofocus />
                <x-input id="q_vatar" class="block mt-1 w-full" type="hidden" name="q_vatar" :value="old('qvatar')" required autofocus />

            <!-- Name -->
            <div>
                <x-label for="name" :value="__('Name')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <div class="mt-4">
                <x-label for="age" :value="__('Age')" />

                <x-input id="age" class="block mt-1 w-full" type="number" name="age" :value="old('age')" required />
            </div>

            <div class="mt-4">
                <x-label for="phone_no" :value="__('Phone Number')" />

                <x-input id="phone_no" class="block mt-1 w-full" type="number" name="phone_no" :value="old('phone_no')" required />
            </div>

            <div class="mt-4">
                <x-label for="nationality" :value="__('Country')" />

                <select id="nationality" class="block mt-1 w-full" type="text" name="nationality" :value="old('nationality')" required >
                    <option value="Nigerian">Nigeria</option>
                    <option value="American">America</option>
                </select>
            </div>

            <div class="mt-4">
                <x-label for="address" :value="__('Address')" />

                <x-input id="address" class="block mt-1 w-full" type="text" name="address" :value="old('address')" required />
            </div>

            <div class="mt-4">
                <x-label for="Bio" :value="__('Bio')" />

                <textarea id="nationality" class="block mt-1 w-full" type="text" name="bio" placeholder="Say something about yourself" required ></textarea>
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
        <script src = "{{asset('js/filepond.js')}}"></script>
        <script>
            var logos = document.querySelectorAll('#logos img');
            var logoCont = document.querySelector('#logos');
            logos.forEach(logo => {
                logo.addEventListener('click', () => {
                    document.getElementById('q_vatar').value = logo.id;
                    document.getElementById('logoPreview').innerHTML = logo.outerHTML;
                })
            });
            
            const upload = () => {
                const inputElement = document.getElementById('avatar');
                const pond = FilePond.create( inputElement );
                pond.setOptions({
                    server : {
                        url : '/upload',
                        headers : {
                            'X-CSRF-TOKEN' : '{{ csrf_token() }}'
                        }
                    }
                })
            };
        </script>
    </x-auth-card>
</x-guest-layout>
