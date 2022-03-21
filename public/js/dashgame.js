var canvas = document.getElementById('canvas');
var ctx = canvas.getContext('2d');

canvas.width = window.innerWidth;
canvas.height = window.innerHeight;

let random = (min, max) => {
    return Math.floor(Math.random() * (max - min) + min);
};

let meals = [];
let colors = ['red', 'green', 'blue'];
let player = {
    x:209,
    y:505,
    r:20,
    color: 'dodgerblue'
};

for (let i = 0; i < 20; i++) {
    meals.push({
        x:random(0,canvas.width),
        y:random(0, canvas.height),
        color: colors[random(0, colors.length)]
    })
}

function arc(obj) {
    ctx.fillStyle = obj.color;
    ctx.beginPath();
    ctx.arc(obj.x, obj.y, obj.r || 5, 0, 2 * Math.PI);
    ctx.fill();
    ctx.stroke();
    ctx.closePath();
}

function loop() {
    ctx.clearRect(0, 0, canvas.width, canvas.height);
    arc(player);
    for(let i = 0; i < meals.length; i++){
        arc(meals[i]);
    }
}
loop();

