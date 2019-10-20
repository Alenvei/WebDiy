<?php
    namespace Api\Request;
    
    class Request{        

        public function __construct(){            
            $this->bootstrapSelf();
            $this->getBody();
        }

        private function bootstrapSelf(){
          foreach($_SERVER as $key => $value){
            $this->{$this->toCamelCase($key)} = $value;
          }
        }

        private function toCamelCase($string){
          $result = strtolower($string);
              
          preg_match_all('/_[a-z]/', $result, $matches);
          foreach($matches[0] as $match){
              $c = str_replace('_', '', strtoupper($match));
              $result = str_replace($match, $c, $result);
          }
          return $result;
        }

        public function getBody(){
            if($this->requestMethod === 'GET'){
                return;
            }
            
            if($this->requestMethod === 'POST'){
                foreach ($_POST as $key => $value) {
                    $this->{$key} = filter_input(INPUT_GET,$value,FILTER_SANITIZE_SPECIAL_CHARS);
                }
            }           
        }       
    }
    