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
        //********* AGREGAR VALIDACIONES

        $sql = "INSERT INTO {$this->table} VALUES (DEFAULT, :apellido, :nombres, :dni, :cuit, :tipo, :provinciaId, 
        :localidad, :telefono, :correo);";
        $stmt = $this->conn->prepare($sql);

        $data = $object->toArray();
        unset($data["id"]);

        $stmt->execute($data);
        //CON CONSULTAS PREPARADAS UTILIZAR conn->exec()

        $object->setId($this->conn->lastInsertId());
    }

    public function load($id): ClienteDTO{
        $sql = "SELECT id, apellido, nombres, dni, cuit, tipo, provinciaId, localidad, telefono, 
                correo FROM {$this->table} WHERE id = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute(["id" => $id]);

        return new ClienteDTO($stmt->fetch(\PDO::FETCH_ASSOC));
    }

    public function update(InterfaceDTO $object): void{
        //********* AGREGAR VALIDACIONES

        $sql = "UPDATE {$this->table} SET apellido = :apellido, nombres = :nombres, dni = :dni, cuit = :cuit, 
        tipo = :tipo, provinciaId = :provinciaId, localidad = :localidad, telefono = :telefono, correo = :correo 
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