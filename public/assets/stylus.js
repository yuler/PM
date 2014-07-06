var express = require('express');
var stylus  = require('stylus');

var app = express();

app.use(stylus.middleware({
    src     : __dirname + '/css',
    dest    : __dirname + '/css',
    compile : function(str, path) {
      return stylus(str)
        .set('filename', path)
        .set('warn', true)
        .set('compress', true);
    }
}));

app.use(express.static(__dirname + '/css'));

app.listen(3000);