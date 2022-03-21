<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Portfolios</title>
    <style>
        #ports ul {
            display : flex;
            flex-wrap : wrap;
            justify-content : center;
            list-style : none;
        }

        #ports ul li {
            border : 2px black solid;
            outline : 3px rgb(141, 140, 140) solid;
            box-shadow : 0px 0px 6px black;
            border-radius : 4px;
            margin : 20px;
            height : 300px;
            width : 250px;
            color : black;
        }

        #ports ul li:hover {
            transform : scale(1.1);
            transition : all 1s linear;
        }

        #ports img {
            height : 200px;
            width : 220px;
            margin : 5px 15px;
        }

        #ports ul * {
            text-align : center;
        }

        legend {
            text-align : center;
            font-weight : bolder;
            font-size : 26px;
        }
    </style>
</head>
<body>
    <fieldset style = "margin-top : 40px; border : 3px solid rgb(207, 202, 202);">
        <legend>All Ports</legend>
  
    <div id = "ports">
        <ul>
            @foreach($users as $user)
            <a target="_blank" href="http://localhost:8000/ports/{{strtolower(str_replace(' ', '', $user->name));}}/{{$user->email}}">
    
            <li>
                <img src = '{{asset("ports/thumbnails/". strtolower(str_replace(' ', '', $user->name)) . ".jpg")}}' alt="" class="img-thumbnail">
                <h4>{{ $user->name }}</h4>
                <p>{{ $user->bio }}</p>
            </li>
        </a>
            @endforeach
        </ul>
    </div>

    </fieldset>
</body>
</html>