<?php
namespace View;
class Renderer{
    protected static $client = "./client/";

    /**
     * This worke only if html.file is in client folder 
     * calling html exampel :'index' or if file is in 'folder.index'
     * @param string $file
     */

    public static function view($file){

        $path = self::pathResolve($file);

        if(file_exists($path)){

            include $path;

        }else{

            echo "<h1>File '<i>".$path."</i>' not exists!</h1>";

        }        
    }

    private static function pathResolve($html){
        
        if(strpos ($html, ".")){
           
            $path = str_replace(".", "/", $html);

            return self::$client.$path.".php" ;

        }else{

            return self::$client.$html.".php";
        }
    }    
}
?>