<?php

    require_once "../app/config/AppConfig.php";
    require_once "../app/config/DBConfig.php";
    require_once "../app/vendor/autoload.php";

    //require_once APP_CONTROLLERS . "base/InterfaceController.php";
    //require_once APP_CONTROLLERS . "UsuarioController.php";

    use app\core\controller\UsuarioController;
    use app\core\controller\ClienteController;
    $controller;

    switch($_GET["controller"]){
        case "usuario":
            $controller = new UsuarioController();
            servicio($controller);
            break;
        case "cliente":
            $controller = new ClienteController();
            servicio($controller);
            break;
        default: break;
    }

    function servicio($controller): void{
        switch($_GET["action"]){
            case "index":
                $controller->index();
                break;
            case "load":
                $controller->load($_GET["id"]);
                break;
            case "create":
                $controller->create($_GET["id"]);
                break;
            case "save":
                $controller->save();
                break;
            case "edit":
                $controller->edit($_GET["id"]);
                break;
            case "update":
                $controller->update();
                break;
            case "delete":
                $controller->delete();
                break;
            default: break;
        }
    }