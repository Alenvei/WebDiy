<?php include "./partials/header.php"; ?>

<?php 
    require './client/renderer/renderer.php';
    use View\Renderer;
    Renderer::view('forms.singup');
?> 
    
</body>
</html>