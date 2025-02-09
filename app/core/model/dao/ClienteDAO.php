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
        ($object->getTipo() == 1) ? $this->validateCuit($object) : $this->validateDni($object);
        $this->validateApellido($object);
        $this->validateNombres($object);
        $this->validateLocalidad($object);
        $this->validateTelefono($object);


        $sql = "INSERT INTO {$this->table} VALUES (DEFAULT, :apellido, :nombres, :dni, :cuit, :tipo, :provinciaId, :localidad, :telefono, :correo)";
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
        ($object->getTipo() == 1) ? $this->validateCuit($object) : $this->validateDni($object);
        $this->validateApellido($object);
        $this->validateNombres($object);
        $this->validateLocalidad($object);
        $this->validateTelefono($object);

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

    public function list(): array{

        $sql = "SELECT apellido, nombres, tipo FROM {$this->table}";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll(\PDO::FETCH_NUM);
    }


    /****************  VALIDACIONES */

    private function validateDni(ClienteDTO $object): void{
        $sql = "SELECT COUNT(dni) AS cantidad FROM `clientes` WHERE dni = {$object->getDni()}";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetch(\PDO::FETCH_OBJ);
        if($result->cantidad > 0){
            throw new \Exception("El DNI <strong>{$object->getDni()}</strong> ya existe en la base de datos.)");
        }
    }

    private function validateCuit(ClienteDTO $object): void{
        $sql = "SELECT COUNT(cuit) AS cantidad FROM `clientes` WHERE cuit = {$object->getCuit()}";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetch(\PDO::FETCH_OBJ);
        if($result->cantidad > 0){
            throw new \Exception("El CUIT <strong>{$object->getCuit()}</strong> ya existe en la base de datos.");
        }
    }

    private function validateApellido(ClienteDTO $object): void{
        if($object->getApellido() == ""){
            throw new \Exception("El dato APELLIDO del cliente no debe estar vacio");
        }
    }

    private function validateNombres(ClienteDTO $object): void{
        if($object->getNombres() == ""){
            throw new \Exception("El dato NOMBRE del cliente no debe estar vacio");
        }
    }

    private function validateLocalidad(ClienteDTO $object): void{
        if($object->getLocalidad() == ""){
            throw new \Exception("El dato LOCALIDAD del cliente no debe estar vacio");
        }
    }

    private function validateTelefono(ClienteDTO $object): void{
        if($object->getTelefono() == ""){
            throw new \Exception("El dato TELEFONO del cliente no debe estar vacio");
        }
    }
}