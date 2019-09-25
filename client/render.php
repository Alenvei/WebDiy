<?php
    class Render{
        private $server;
        public function __construct(Server $server){
            $this->server = $server;
        }

        public function draw(){
            echo "<h1>Hello Masters</h1>";
        }
    }
?> 