var http = require('http');

const PORT=80; 

function handleRequest(request, response){
    response.end('It Works!! Path Hit: ' + request.url);
}

var server = http.createServer(handleRequest);

server.listen(PORT, function(){
    console.log("Server listening on: %s", PORT);
});
