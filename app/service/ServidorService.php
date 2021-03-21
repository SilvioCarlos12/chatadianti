<?php

use Ratchet\Http\HttpServer;
use Ratchet\Server\IoServer;
use Ratchet\WebSocket\WsServer;

class ServidorService {
private $server;



 public function __construct()
 {
     
 }
  
 public function servidor(){
    $this->server=IoServer::factory(
        new HttpServer(
            new WsServer(
                new ChatService()
            )
        ),
        8080
    );
    $this->server->run();
 }
}