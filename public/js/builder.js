const navCloser = document.getElementById('closeNavLinks')
const navLinks = document.getElementById('navlinks');
const navOpener = document.getElementById('openNavLinks');
const buildBox = document.getElementById('html');
const uploaderOpener = document.getElementById('openUploader');
const uploaderCloser = document.getElementById('closeUploader');
const uploadContainerCloser = document.getElementById('closeUploaded');
const uploadContainerOpener = document.getElementById('openUploadContainer');
const runner = document.getElementById('run');

window.editor = CodeMirror.fromTextArea(buildBox, {
    value : buildBox.value,
    mode: "htmlmixed",
    htmlMode: true,
    theme : "cobalt",
    lineWrapping: true,
    lineNumbers : true,
    onChange : function(CodeMirror){
        window.editor.save();
        determineCodeMirrorType(CodeMirror);
    },
    extraKeys : {"ctrl+Space" : "autocomplete"}
});

determineCodeMirrorType = () => {
    if(window.editor.getMode().name == 'javascript'){
        checkAndSwitchToXML(window.editor, window.editor.getValue());
    } else if (window.editor.getMode().name == 'xml') {
        checkAndSwitchToJson(window.editor, window.editor.getValue());
    }
};

function checkAndSwitchToXML(cm, val){
    if (/^\s*</.test(val)){
        cm.setOption("mode", xml);
    }
};

navOpener.addEventListener('click', () => {
    navLinks.classList.add('openOpts');
});

navCloser.addEventListener('click', () => {
    navLinks.classList.remove('openOpts');
});

buildBox.addEventListener('click', () => {
    document.getElementById('uploader').classList.remove('out');
    document.getElementById('uploaded').classList.remove('out');
    navLinks.classList.remove('openOpts');
})

uploaderOpener.addEventListener('click', () => {
    document.getElementById('uploader').classList.toggle('out');
})

uploadContainerOpener.addEventListener('click', () => {
    document.getElementById('uploaded').classList.toggle('out');
})

uploaderCloser.addEventListener('click', () => {
    document.getElementById('uploader').classList.remove('out');
});

uploadContainerCloser.addEventListener('click', () => {
    document.getElementById('uploaded').classList.remove('out');
});

function uploadFile() {
    console.log(document.querySelector('input[name=file]'));
}

buildBox.ondragenter = (e) => {
    e.preventDefault();
}

buildBox.ondragover = buildBox.ondragenter;

const inputElement = document.getElementById('file');
const pond = FilePond.create( inputElement );
pond.setOptions({
    server : 'upload',
    
})



//keystroke Shortcuts
//ctrl + s == Save
//ctrl + m == menus
//ctrl + u == uploader
//ctrl + f == files

buildBox.addEventListener('keydown', (e) => {
    if (e.key == "Tab") {
        e.preventDefault();
        const cursor_pos = buildBox.selectionStart;
        buildBox.value = buildBox.value.substring(0, buildBox.selectionStart) + '\t' + buildBox.value.substring(buildBox.selectionEnd);
        buildBox.selectionStart = cursor_pos + 1;
        buildBox.selectionEnd = cursor_pos + 1;
    }
});

document.getElementById('htmlForm').addEventListener('mouseup', (e) => {
    e.cancelBubble = true;
    if(e.which == 3) {
        e.preventDefault();
        e.stopPropagation();
        console.log(e);
    }
}, false);

document.body.addEventListener('keydown', (e) => {
    if (e.ctrlKey && e.key == 's'){
        e.preventDefault();
        e.stopPropagation();
        document.getElementById('save').click();
    } else if (e.ctrlKey && e.key == 'u'){
        e.preventDefault();
        e.stopPropagation();
        document.getElementById('uploader').classList.toggle('out');
        
    } else if (e.ctrlKey && e.key == 'f'){
        e.preventDefault();
        e.stopPropagation();
        document.getElementById('uploaded').classList.toggle('out');
    } else if (e.ctrlKey && e.key == 'm'){
        e.preventDefault();
        e.stopPropagation();
        document.getElementById('navlinks').classList.toggle('openOpts');
    } else if (e.ctrlKey && e.key == 'r'){
        e.preventDefault();
        e.stopPropagation();
        document.getElementById('playlink').click();
    }
})

runner.addEventListener('click', () => {
    document.getElementById('iframe-container').classList.toggle('hideframe');
    submit();
});

document.getElementById('min').addEventListener('click', () => {
    document.getElementById('iframe-container').classList.toggle('hideframe');
});



function submit(){
    var text = document.getElementById('html').innerHTML;
    var resultWindow = document.createElement('iframe');
    resultWindow.setAttribute("name", "result");
    resultWindow.setAttribute("frameborder", "0");
    // resultWindow.setAttribute("sandbox", "allow-scripts");
    resultWindow.setAttribute("id", "resultWindow");
    resultWindow.setAttribute("allowFullscreen", "true");
    document.getElementById('iframe-wrapper').innerHTML = "";
    document.getElementById('iframe-wrapper').appendChild(resultWindow);
    document.getElementById('code').value = text;
    document.getElementById('htmlSender').action = `http://localhost:8000/ports/${user}/${userEmail}`;
    document.getElementById('htmlSender').method = "get";
    document.getElementById('htmlSender').acceptCharset = "utf-8";
    document.getElementById('htmlSender').target = "result";
    document.getElementById('htmlSender').submit();
    
};

buildBox.ondrop = (e) => {
    e.preventDefault();
    e.stopPropagation();
    const cursor_pos = buildBox.selectionStart;
    var dropped = e.dataTransfer.files;
    var filename = dropped[0].name;
    var filesize = dropped[0].size;
    var filetype = dropped[0].type;

    console.log(dropped);
    
    console.log(dropped[0]);
    const token = document.querySelector("meta[name=csrf-token]").attributes.content;
    console.log(token);
    var headers = {
        'Content-Type' : "multipart/form-data",
        "Accept" : "application/json, text-plain, */*",
        "X-Requested-With" : "XMLHttpRequest",
        "X-CSRF-TOKEN" : token
        };
    var result = fetch(window.location.href + '/addFile/' + dropped, headers, {
        method : 'post',
        credentials : "same-origin",
        body : dropped[0]
        })
        .then(res => res.json()).then(res => res);
    console.log(result);
    // buildBox.value = buildBox.value.substring(0, buildBox.selectionStart) + `${result}` + buildBox.value.substring(buildBox.selectionEnd);
    // buildBox.selectionStart = cursor_pos + 1;
    // buildBox.selectionEnd = cursor_pos + 1;
}