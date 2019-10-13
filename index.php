<?php include "./partials/header.php"; ?>

<?php 
    require_once __DIR__ . '/vendor/autoload.php';
    
    use Client\Renderer\Render;

    Render::view('forms.login');
?> 
    
</body>
</html>