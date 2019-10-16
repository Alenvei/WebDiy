<?php include "./partials/header.php"; ?>

<?php 
    require_once __DIR__ . '/vendor/autoload.php';    
    
    use Api\Route\Route;
    Route::get('/profile');
    
?> 
    
</body>
</html>