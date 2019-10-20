<?php
    namespace Api\Route;
    use Client\Renderer\Render;
    use Api\Request\Request;

    class Route {
        private $supportedHttpMethods = Array('POST','GET');
        private $request;

        public function __construct(){
            $this->request = new Request();
        }

        public function __call($name, $args){
            list($route, $method) = $args;
            if(!in_array(strtoupper($name), $this->supportedHttpMethods)){
                header('dont workd 405');
            }
            $this->{strtolower($name)}[$this->formatRoute($route)] = $method;
        }

        private function formatRoute($route){
            $result = rtrim($route, '/');
            if ($result === ''){
                return '/';
            }
            return $result;
        }

        private function invalidMethodHandler(){
            header("{$this->request->serverProtocol} 405 Method Not Allowed");
        }
        private function defaultRequestHandler(){
            header("{$this->request->serverProtocol} 404 Not Found");
        }
  
        function resolve(){
            $methodDictionary = $this->{strtolower($this->request->requestMethod)};
            $formatedRoute = $this->formatRoute($this->request->requestUri);
            
            if(array_key_exists($formatedRoute,$methodDictionary)){
                $method = $methodDictionary[$formatedRoute];
                call_user_func_array($method, array($this->request));
            }else{
                $this->defaultRequestHandler();
                return;
            }           
                       
        }
        function __destruct(){
            $this->resolve();
        }       
        
        
    }    