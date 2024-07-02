<!DOCTYPE html>
<html lang="es">
<head>
    <?php
        require_once "includes/head.php";
        foreach($this->scripts as $script){
            echo ('<script defer type="text/javascript" src=" '. $script .' "></script>');
        }
    ?>
</head>
<body class="d-flex flex-column min-vh-100">
    <header>
        <?php
        if(isset($_SESSION["token"]) && $_SESSION["token"] == APP_TOKEN){
            if($_SESSION["perfil"] !== "Administrador"){
                require_once "includes/menu_operador.php";
            }else{
                require_once "includes/menu.php";
                //require_once "includes/bread_crum.php";
            }
        }
        ?>
    </header>
    <main>
        <?php

            require_once APP_VIEWS . $this->view;
        ?>
    </main>

        <?php
            if(isset($_SESSION["token"]) && $_SESSION["token"] == APP_TOKEN){
                require_once "includes/footer.php";
            }
        ?>
        
</body>
</html>