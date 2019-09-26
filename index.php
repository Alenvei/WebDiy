<?php include "./partials/header.php"; ?>

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