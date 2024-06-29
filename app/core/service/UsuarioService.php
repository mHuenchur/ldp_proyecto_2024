<?php

namespace app\core\service;

use app\core\service\base\InterfaceService;
use app\core\service\base\Service;
use app\libs\connection\Connection;
use app\core\model\dto\UsuarioDTO;
use app\core\model\dao\UsuarioDAO;



final class UsuarioService extends Service implements InterfaceService{
    public function __construct()
    {
        parent::__construct();
    }

    public function save(array $object): void{
        $conn = Connection::get();
        $dao = new UsuarioDAO($conn);
        $dao->save(new UsuarioDTO($object));
    }

    public function load($id): UsuarioDTO{
        return new UsuarioDTO();
    }

    public function update(array $object): void{

    }

    public function delete($id): void{

    }

    public function list(): array{
        $conn = Connection::get();
        $dao = new UsuarioDAO($conn);
        return $dao->list();
    }
    
}