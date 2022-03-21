<?php

$port = $argv[1];
$room = $argv[2];

use Ratchet\Server\IoServer;
use myApp\Chat;
use Ratchet\Http\HttpServer;
use Ratchet\WebSocket\WsServer;

require dirname(__DIR__) . '/vendor/autoload.php';


$server = IoServer::factory(new HttpServer(new WsServer(new Chat($room))), $port);

$server->run();
