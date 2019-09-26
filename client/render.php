<?php
    require "forms/login.php";
    class Render{
        private $server;
        private $login; 
        public function __construct(Server $server){
            $this->server = $server;
            $this->login = new Login;
        }

        public function draw(){
            echo $this->login->render();
        }
    }
?> 