@if (!Auth::check())
    <script>window.location.href = "http://localhost:8000";</script>
@endif

<style>
    * {
        padding : 0px;
        margin : 0px;
        box-sizing : border-box;
    }
    #canvas {
        width : 100%;
        height : 100%;
        background : url('./images/dashback.jpg');
        background-size : cover;
        background-attachment : fixed;
    }
</style>
<canvas id = canvas>
    <img id = img src = "{{asset('/images/1.jpg')}}" />
</canvas>
<script src = "{{asset('js/dashgame.js')}}"></script>