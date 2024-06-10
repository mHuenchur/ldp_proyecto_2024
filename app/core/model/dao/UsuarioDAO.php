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
        //********* AGREGAR VALIDACIONES

        
        $sql = "INSERT INTO {$this->table} VALUES (DEFAULT, :apellido, :nombres, :cuenta, :correo, :clave, 
        :perfilId, :estado, :horaEntrada, :horaSalida, NOW(), 0)";
        $stmt = $this->conn->prepare($sql);
        
        $data = $object->toArray();
        unset($data["id"]);


        $stmt->execute($data);

        $object->setId($this->conn->lastInsertId());
    }

    public function load($id): UsuarioDTO{
        $sql = "SELECT id, apellido, nombres, cuenta, correo, clave, 
        perfilId, estado, horaEntrada, horaSalida, fechaAlta, resetear FROM {$this->table} WHERE id = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute(["id" => $id]);


        return new UsuarioDTO($stmt->fetch(\PDO::FETCH_ASSOC));
    }

    public function update($object): void{
        //********* AGREGAR VALIDACIONES

        $sql = "UPDATE {$this->table} SET apellido = :apellido, nombres = :nombres, cuenta = :cuenta, correo = :correo 
        , clave = :clave, perfilId = :perfilId, estado = :estado, horaEntrada = :horaEntrada, 
        horaSalida = :horaSalida, fechaAlta = :fechaAlta, resetear = :resetear 
        WHERE id = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute($object->toArray());
    }

    public function delete($id): void{
        $sql = "DELETE FROM {$this->table} WHERE id = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([
            "id" => $id
        ]);
    }
}