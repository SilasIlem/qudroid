<x-master>

    <x-slot name="header">
        <h4 style = "width : 100vw; animation-duration : 4s; color : white" class="animated slideInLeft font-bold text-center leading-tight">
            {{__("Slight Fault Here...")}}
        </h4>

    </x-slot>
    <link rel="stylesheet" href="{{asset('css/animate.css')}}">
    <style>
        body {
            overflow : hidden;
        }
        .container * {
            padding : 0px;
            margin : 0px;
            box-sizing : border-box;
        }
        .container {
            min-height : 100vh;
            min-width : 100vw;
            background : white;
            backdrop-filter : blur(10px);
            display : flex;
            justify-content: center;
            align-items : center;
        }

        .error-speech {
            animation-duration : 4s;
        }

        .container button {
            background : blue;
            padding : 10px;
            color : white;
            border : none;
            outline : none;
            margin-top : 20px;
        }

        .container span {
            font-size : 100px;
            color : white;
        }

        .container h2 {
            text-align : center;
            font-size : 30px;
            padding : 15px;
            color : white;
            font-weight : bolder;
            text-shadow : 0px 0px 8px rgb(43, 223, 255);
            
        }
    </style>

    <div class="container">
        <div class="animated slideInUp error-speech">
            <h2><span>404</span> - {{ $exception->getMessage() }}.</h2>
            <a href="{{route('dashboard')}}"><button >Go Home</button></a>
        </div>
    </div>
</x-master>