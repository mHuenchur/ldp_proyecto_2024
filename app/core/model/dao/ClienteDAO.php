<?php

namespace app\core\model\dao;

use app\core\model\base\InterfaceDAO;
use app\core\model\base\InterfaceDTO;
use app\core\model\base\DAO;
use app\core\model\dto\ClienteDTO;

final class ClienteDAO extends DAO implements InterfaceDAO{

    public function __construct($conn)
    {
        parent::__construct($conn, "clientes");
    }
    public function save(InterfaceDTO $object): void{
        $sql = "INSERT INTO {$this->table} VALUES (DEFAULT, :apellido, :nombres, :dni, :cuit, :tipo, :provinciaId, :localidad, :telefono, :correo);";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute($object->toArray());
        //CON CONSULTAS PREPARADAS UTILIZAR conn->exec()
    }

    public function load($id): ClienteDTO{
        return new ClienteDTO();
    }

    public function update($object): void{

    }

    public function delete($id): void{

    }
}