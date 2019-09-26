<?php
    abstract class Form {
        /**
         * metoda renderer vykresluje formurar 
         * @param arry $server server response;  
         */        
        public function render($server = null){ 
            
            $valid['valid'] = null;
            // kontrola ci formular bol spravne vyplneny 
            switch ($valid['valid']){
                case 'valid':
                
                exit;
                    break;            
                default:
               return $this->view($valid);
                    break;
            }        
        }
        
        // html sablona formularov 
        abstract protected function view($valid);
    }
?>