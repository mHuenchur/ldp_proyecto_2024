<?php
namespace app\core\controller;
use app\core\controller\base\InterfaceController;

final class UsuarioController implements InterfaceController{

    //Invoca la vista principal del modulo
    public function index(): void{
        $view = "usuario/index.php";
        require_once APP_TEMPLATE . "template.php";
    }

    //Gestiona los servicios correspondientes, para la busqueda de una entidad existente en el sistema.
    //se debe enviar el id del cliente en la peticion
    public function load($id): void{
        echo 'USUARIO - CONTROLADOR => LOAD <br>';
    }

    //Invoca a la vista correspondiente, para el alta de una nueva entidad
    public function create($id): void{
        $view = "usuario/alta.php";
        require_once APP_TEMPLATE . "template.php";
    }

    //Gestiona los servicios correspondientes, el alta de una nueva entidad en el sistema
    public function save(): void{
        echo 'USUARIO - CONTROLADOR => SAVE <br>';
    }

    //Invoca a la vista correspondiente, para poder modificar los datos deuna entidad existente
    public function edit($id): void{
        $view = "usuario/modificar.php";
        require_once APP_TEMPLATE . "template.php";
    }

    //Gestiona los servicios correspondientes, para la actualizacion de datos de una entidad exitente en el sistema
    public function update(): void{
        echo 'USUARIO - CONTROLADOR => UPDATE <br>';
    }

    //Gestiona los servicios correspondientes, para la eliminacion fisica de la entidad
    public function delete(): void{
        echo 'USUARIO - CONTROLADOR => DELETE <br>';
    }

}

?>