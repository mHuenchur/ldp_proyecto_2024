<?php
namespace app\core\controller;

use app\core\controller\base\Controller;
use app\core\controller\base\InterfaceController;
use app\core\service\clienteService;

final class ClienteController extends Controller implements InterfaceController{

    public function __construct()
    {
        parent::__construct([
            "app/js/cliente/clienteController.js",
            "app/js/cliente/clienteService.js"
        ]);
    }

    //Invoca la vista principal del modulo
    public function index(): void{
        $this->view = "cliente/index.php";
        require_once APP_TEMPLATE . "template.php";
    }

    //Gestiona los servicios correspondientes, para la busqueda de una entidad existente en el sistema.
    //se debe enviar el id del cliente en la peticion
    public function load($id): void{
        $this->response["controlador"] = "cliente";
        $this->response["accion"] = "load";
        try{
            $service = new clienteService();
            $this->response["result"] = $service->load($id)->toArray();
            $this->response["mensaje"] = "SE ENCONTRO EL CLIENTE";
        }
        catch(\Exception $ex){
            $this->response["error"] = $ex->getMessage();
        }
        echo json_encode($this->response);
    }

    //Invoca a la vista correspondiente, para el alta de una nueva entidad
    public function create($id): void{
        $this->view = "cliente/alta.php";
        require_once APP_TEMPLATE . "template.php";
    }

    //Gestiona los servicios correspondientes, el alta de una nueva entidad en el sistema
    public function save(): void{
        $data = json_decode(file_get_contents("php://input"), true);
        $this->response["controlador"] = "cliente";
        $this->response["accion"] = "save";
        try{
            $service = new clienteService();
            $service->save($data);
            $this->response["mensaje"] = "La cuenta se registro correctamente";
        }
        catch(\Exception $ex){
            $this->response["error"] = $ex->getMessage();
        }
        header("Content-Type: application/json; charset=utf-8");
        echo json_encode($this->response);
    }





    //Invoca a la vista correspondiente, para poder modificar los datos deuna entidad existente
    public function edit($id): void{
        $this->view = "cliente/modificar.php";
        require_once APP_TEMPLATE . "template.php";
    }

    //Gestiona los servicios correspondientes, para la actualizacion de datos de una entidad exitente en el sistema
    public function update(): void{
        echo 'CLIENTE - CONTROLADOR => UPDATE <br>';
    }

    //Gestiona los servicios correspondientes, para la eliminacion fisica de la entidad
    public function delete(): void{
        echo 'CLIENTE - CONTROLADOR => DELETE <br>';
    }

}

?>