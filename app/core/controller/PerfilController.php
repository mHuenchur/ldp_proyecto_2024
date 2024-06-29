<?php

namespace app\core\controller;

use app\core\controller\base\Controller;
use app\core\controller\base\InterfaceController;
use app\libs\request\Request;
use app\libs\response\Response;

final class PerfilController extends Controller implements InterfaceController{

    public function __construct()
    {
        parent::__construct([
            //AGERGAMOS LOS ENLACES JS SI ES NECESARIO
        ]);
    }

    public function index(): void{

    }

    public function load($id): void{
        echo 'PERFIL - CONTROLADOR => LOAD <br>';
    }

    public function create($id): void{

    }

    public function save(Request $request, Response $response): void{

    }

    public function edit($id): void{

    }

    public function update(): void{
        echo 'PERFIL - CONTROLADOR => UPDATE <br>';
    }

    public function delete(): void{
        echo 'PERFIL - CONTROLADOR => DELETE <br>';
    }
}