<?php
    namespace Api\Route;
    use Client\Renderer\Render;
    class Route {

        public static function get($url){
           if($_SERVER['REQUEST_URI']===$url){
                Render::view('profile');
           };
        }
        public static function post(){
            
        }
        public static function delete(){
            
        }
        
    }
    