<?php include "./partials/header.php"; ?>

<?php 
    require_once __DIR__ . '/vendor/autoload.php';    
    
    use Api\Route\Route;
    use Client\Renderer\Render;
    Render::view('forms.singup');
    
?> 
    
</body>
</html>