<div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
    <div>
        {{ $logo }}
    </div>

    <style>
        @media screen and (max-width : 600px){
            #form {
                max-width : 80vw;
                margin-top : 100px;
            }
        }
    </style>
    <div id = form class="formcard w-full sm:max-w-md mt-6 mx-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
        {{ $slot }}
    </div>
</div>
