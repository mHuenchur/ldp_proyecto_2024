<?php

namespace app\core\model\dao;

use app\core\model\base\InterfaceDAO;
use app\core\model\base\InterfaceDTO;
use app\core\model\base\DAO;
use app\core\model\dto\UsuarioDTO;

final class UsuarioDAO extends DAO implements InterfaceDAO{

    public function __construct($conn)
    {
        parent::__construct($conn, "usuarios");
    }
    public function save(InterfaceDTO $object): void{
        //MODIFICAR LOS PARAMETROS
        $sql = "INSERT INTO {$this->table} VALUES (5, 'Huenchur', 'Mauricio', 'mHuenchur', '12345', 'mHuenchur@gmail.com', 1, 1, '', '', NOW(), 0)";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute($object->toArray());
    }

    public function load($id): UsuarioDTO{
        return new UsuarioDTO();
    }

    public function update($object): void{

    }

    public function delete($id): void{

    }
}