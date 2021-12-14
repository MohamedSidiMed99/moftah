 var express = require('express');
var socket =require('socket.io');

var application = express();

var server = application.listen(5000,function(){
    console.log('your server is running on port http://localhost:5000');
});

application.use(express.static('indexhtml'));

var sio =socket(server);

sio.on('connect',function(visitor){
    
    console.log('we have a new visitor as id=>',visitor.id);
});

