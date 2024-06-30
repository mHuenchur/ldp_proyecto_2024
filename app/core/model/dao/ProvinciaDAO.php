<?php

namespace app\core\model\dao;

use app\core\model\base\InterfaceDAO;
use app\core\model\base\InterfaceDTO;
use app\core\model\base\DAO;
use app\core\model\dto\ProvinciaDTO;
use Exception;

final class ProvinciaDAO extends DAO implements InterfaceDAO{

    public function __construct($conn)
    {
        parent::__construct($conn, "provincias");
    }
    
    public function save(InterfaceDTO $object): void{
        //EL VALIDATE LARGARA UNA EXCEPTION SI ALGO NO FUNCIONA BIEN
        $this->validate($object);
        $this->validateName($object);
        //ARMAR LA CONSULTA
        // PHP COMILLA SIMPLE, HTML COMILLA DOBLE
        $sql = "INSERT INTO {$this->table} VALUES(DEFAULT, :nombre)";
        //PREPARAR LA CONSULTA PARA TENER UN PDO STATEMENT
        $stmt = $this->conn->prepare($sql);
        //EJECUTAR EL STATEMENT
        //TIENE QUE TENER EL ARRAY LA MISMA CANTIDAD DE TOKENS EN LA CONSULTA
        //CUALQUIERA DE LAS DOS FORMAS DE ABAJO ES POSIBLE, EN EL SEGUNDO SOLO SE PASA EL NOMBRE,
        //DE LOS CONTRARIO SALTA EL ERROR...
        $data = $object->toArray();
        unset($data["id"]);
        $stmt->execute($data);
        //SEGUNDA FORMA
        //$stmt->execute(["nombre" => $object->getNombre()]);


        //////ESTE ERROR NO IMPORTA
        $object->setId($this->conn->lastInsertId());
    }

    public function load($id): ProvinciaDTO{
        $sql = "SELECT id, nombre FROM {$this->table} WHERE id = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute(["id" => $id]);

        //AGREGAR ESTO EN TODOS LOS LOAD
        if($stmt->rowCount() !== 1){
            throw new \Exception("No se encontro la provincia para el id = " . $id);
        }

        return new ProvinciaDTO($stmt->fetch(\PDO::FETCH_ASSOC));
    }

    public function update(InterfaceDTO $object): void{
        $this->validate($object);
        $this->validateName($object);
        $sql = "UPDATE {$this->table} SET nombre = :nombre WHERE id = :id";
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

        return [];
    }

    //ESTO VA EN TODOS LOS DAO
    private function validate(ProvinciaDTO $object): void{
        if($object->getNombre() == ""){
            throw new \Exception("El dato nombre de la provincia es obligatorio");
        }
    }

    private function validateName(ProvinciaDTO $object): void{
        $sql = "SELECT count(id) AS cantidad FROM {$this->table} WHERE nombre = :nombre AND id != :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute($object->toArray());
        $result = $stmt->fetch(\PDO::FETCH_OBJ);
        if($result->cantidad > 0){
            throw new \Exception("El nombre <strong>{$object->getNombre()}</strong> ya existe en la base de datos.)");
        }
    }
}