<?php

namespace app\core\service;

use app\core\model\dao\ClienteDAO;
use app\core\model\dto\ClienteDTO;
use app\core\service\base\InterfaceService;
use app\core\service\base\Service;
use app\libs\connection\connection;

final class clienteService extends Service implements InterfaceService{
    public function __construct()
    {
        parent::__construct();
    }

    public function save(array $object): void{
        $conn = Connection::get();
        $dao = new ClienteDAO($conn);
        $dao->save(new ClienteDTO($object));
    }

    public function load($id): ClienteDTO{
        $conn = Connection::get();
        $dao = new ClienteDAO($conn);
        $dto = $dao->load($id);
        return $dto;
    }

    public function update(array $object): void{

    }

    public function delete($id): void{

    }

    public function list(): array{
        return [];
    }
}