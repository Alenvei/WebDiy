
<?php 
  include "./partials/header.php";
    require_once __DIR__ . '/vendor/autoload.php';    
    
    use Api\Route\Route;
    use Client\Renderer\Render;
    
    $reoute= new Route;
    $reoute->get("/",function(){
        Render::view('profile');
    });
    $reoute->get("/singup/omg/hh", function(){      
        Render::view('forms.singup');
    });

   
    
?> 
    
</body>
</html>