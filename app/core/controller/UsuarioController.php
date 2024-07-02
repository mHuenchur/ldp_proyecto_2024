<?php
namespace app\core\controller;

use app\core\controller\base\Controller;
use app\core\controller\base\InterfaceController;
use app\core\service\UsuarioService;
use app\libs\request\Request;
use app\libs\response\Response;

use Dompdf\Dompdf;

final class UsuarioController extends Controller implements InterfaceController{

    public function __construct()
    {
        parent::__construct([
            "app/js/usuario/usuarioController.js",
            "app/js/usuario/usuarioService.js"
        ]);
    }

    //Invoca la vista principal del modulo
    public function index(): void{
        $service = new UsuarioService();
        $data = $service->list();
        $this->view = "usuario/index.php";
        require_once APP_TEMPLATE . "template.php";
    }

    //Gestiona los servicios correspondientes, para la busqueda de una entidad existente en el sistema.
    //se debe enviar el id del cliente en la peticion
    public function load($id): void{
        //BUSCA UN USUARIO EN EL SISTEMA
    }

    //Invoca a la vista correspondiente, para el alta de una nueva entidad
    public function create($id): void{
        $this->view = "usuario/alta.php";
        require_once APP_TEMPLATE . "template.php";
    }

    //Gestiona los servicios correspondientes, el alta de una nueva entidad en el sistema
    public function save(Request $request, Response $response): void{
        $service = new UsuarioService();
        $service->save($request->getData());
        $response->setMessage("La cuenta de usuario se registró correctamente");
        $response->send();
    }

    //Invoca a la vista correspondiente, para poder modificar los datos deuna entidad existente
    public function edit(Request $request, Response $response): void{
        $service = new UsuarioService();
        $data = $service->load($request->getId())->toArray();
        $this->view = "usuario/modificar.php";
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

    public function login(): void{
        $this->view = "usuario/autenticacion.php";
        require_once APP_TEMPLATE . "template.php";
    }

    public function print(): void{
        $html = '
        <!DOCTYPE html>
        <html>
        <style>
        table, th, td {
        border:1px solid black;
        }
        </style>
        <body>

        <h2>A basic HTML table</h2>

        <table style="width:100%">
        <tr>
            <th>Company</th>
            <th>Contact</th>
            <th>Country</th>
        </tr>
        <tr>
            <td>Alfreds Futterkiste</td>
            <td>Maria Anders</td>
            <td>Germany</td>
        </tr>
        <tr>
            <td>Centro comercial Moctezuma</td>
            <td>Francisco Chang</td>
            <td>Mexico</td>
        </tr>
        </table>

        <p>To understand the example better, we have added borders to the table.</p>

        </body>
        </html>
        ';

        require_once "../app/reports/testReport.php";
    }

}

?>