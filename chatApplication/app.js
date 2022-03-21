const app = require('express')();

let http = require('http').Server(app);

const PORT  = 8082;

app.get('/', (req, res) => {
    res.send(`<h1>Hello Sirs and Ma'ams</h1>`);
});

http.listen( PORT, () => {
    console.log('connected');
} );

