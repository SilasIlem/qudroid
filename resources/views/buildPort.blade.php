<x-master>
    <x-slot name="header">
        <h4 style = "width : 20vw; animation-duration : 4s; color : white" class="animated slideInLeft font-bold text-center leading-tight">
            {{__("Master Builder")}}
        </h4>
    </x-slot>
        <link rel="shortcut icon" href="{{asset('css/bootstrap-icons/building.svg')}}">
        <link rel="stylesheet" href="{{asset('css/builder.css')}}">
        <link rel="stylesheet" href="{{asset('css/filepond.css')}}">
        <link rel="stylesheet" href="{{asset('css/codemirror.css')}}">
        <link rel="stylesheet" href="{{asset('css/cobalt.css')}}">
        <script src = "{{asset('js/codemirror.js')}}"></script>
        <script src = "{{asset('js/codeMirrorModes/javascript.js')}}"></script>
        <script src = "{{asset('js/codeMirrorModes/css.js')}}"></script>
        <script src = "{{asset('js/codeMirrorModes/xml.js')}}"></script>
        <script src = "{{asset('js/codeMirrorModes/anyword-hint.js')}}"></script>
        <script src = "{{asset('js/codeMirrorModes/css-hint.js')}}"></script>
        <script src = "{{asset('js/codeMirrorModes/html-hint.js')}}"></script>
        <script src = "{{asset('js/codeMirrorModes/htmlmixed.js')}}"></script>
        <script src = "{{asset('js/codeMirrorModes/javascript-hint.js')}}"></script>
        <script src = "{{asset('js/codeMirrorModes/show-hint.js')}}"></script>
        <link src = "{{asset('js/codeMirrorModes/show-hint.css')}}" />
        <script src = "{{asset('js/codeMirrorModes/xml-hint.js')}}"></script>
        <script src = "{{asset('js/codeMirrorModes/sql-hint.js')}}"></script>

    <meta name = "csrf-token" content = "{{ csrf_token() }}" />
   
    <div id = builder-menubar>
        <ul>
            <li>
                <p>Home</p>
                <ul>
                    <li>File</li>
                    <li>something</li>
                    <li>File</li>
                    <li>something</li>
                </ul>
            </li>
            <li>
                <p>View</p>
                <ul>
                    <li>File</li>
                    <li>something</li>
                    <li>File</li>
                    <li>something</li>
                </ul>
            </li>
            <li>
                <p>Go</p>
                <ul>
                    <li>File</li>
                    <li>something</li>
                    <li>File</li>
                    <li>something</li>
                </ul>
            </li>
            <li>
                <p>Run</p>
                <ul>
                    <li>File</li>
                    <li>something</li>
                    <li>File</li>
                    <li>something</li>
                </ul>
            </li>
            <li>
                <p>Help</p>
                <ul>
                    <li>FAQ</li>
                    <li>something</li>
                    <li>File</li>
                    <li>something</li>
                </ul>
            </li>
        </ul>
    </div>
    <form id = htmlSender>
        @csrf
        <input type="hidden" name="code" id = code>
    </form>
    <div id="iframe-container">
        <div id = "iframe-menubar">
            <i id = min class = "bi bi-node-minus"></i>
        </div>
        <div id = "iframe-wrapper"></div>
    </div>
    
    <div id = uploader>
        <button id = closeUploader><i class = "bi bi-x"></i></button>
        <h3>Upload Files</h3>
        <form action = "javascript:void(0); uploadFile();" enctype = "multipart/form-data">
            <input id = file type = file name = file/>
            <button class = "OpenCloser" type="submit">Upload</button>
        </form>
    </div>

    <div id = uploaded>
        <button id = closeUploaded><i class = "bi bi-x"></i></button>

        <div id = uploadContainer>
            <div id = images>
                <p class="hoverable">My Images</p>
                <ul>
                    @foreach ($images as $image)
                        <li><img src = '{{ asset("ports/" . strtolower(str_replace(' ', '', Auth::user()->name)) . "/images/" . $image) }}' /></li>
                    @endforeach
                </ul>
            </div>
            <div id="files">
                <p class="hoverable">My files</p>
                <ul>
                    @foreach ($files as $file_id => $file_name)
                        <li><span> Id : {{$file_id}}</span><span>Name : {{$file_name }} </span></li>
                    @endforeach
                </ul>
            </div>
        </div>
        
    </div>
    
    <div id = builder>
        
        <h1>Build Something Special.</h1>

        <nav id = nav>
            
            <button id = run>
                    <i class = "bi bi-play"></i>
            </button>
            
            <button id="openUploader" class = "OpenCloser"><i class = "bi bi-plus"></i></button>

            <button id="openNavLinks" class = "OpenCloser"><i class = "bi bi-menu-app-fill"></i></button>
        </nav>
        <ul id = navlinks>
            <button id = closeNavLinks class = "OpenCloser"><i class = "bi bi-x"></i></button>
            <li id = openUploadContainer class = "navlink"><button>Uploads</button></li>
            <li class = "navlink"><button>Templates</button></li>
        </ul>
        <form id = htmlForm action="" method="post">
            @csrf
            <input type="hidden" id = results>
            
                <textarea name = html type="text" id="html" wrap = "logical" spellcheck = "false">{{ $port }}</textarea>
            
            <button name = submit type = submit id = save> <i class = "bi bi-save2"></i> </button>
        </form>
        
            <script>
                var user = {!! json_encode(strtolower(str_replace(' ', '', Auth::user()->name))) !!};
                var userEmail = {!! json_encode(Auth::user()->email) !!};
            </script>
            <script src = "{{asset('js/filepond.js')}}"></script>
            <script src = "{{asset('js/builder.js')}}"></script>
        
    </div>
    
</x-master>