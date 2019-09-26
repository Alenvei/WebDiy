<?php include "./partials/header.php"; ?>

    <?php
        require "./client/render.php";
        require "./api/server.php";
        $RENDER = new Render(new Server);
        $RENDER->draw();
    ?>
    
</body>
</html>