<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="client/assets/forms.css">
    <title>WebDiy</title>
</head>
<body>    
    <?php
        require "./client/render.php";
        require "./api/server.php";
        $RENDER = new Render(new Server);
        $RENDER->draw();
    ?>    

    <h1>DIY WEB by PHP & JAVA Masters </h1>
    <p>Lorem ipsum ....</p>
</body>
</html>