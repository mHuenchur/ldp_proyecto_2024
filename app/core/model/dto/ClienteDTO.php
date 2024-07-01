<?php

namespace app\core\model\dto;

use app\core\model\base\InterfaceDTO;

final class ClienteDTO implements InterfaceDTO{

    private $id, $apellido, $nombres, $dni, $cuit, $tipo;
    private $provinciaId, $localidad, $telefono, $correo;

    public function __construct($data = [])
    {
        $this->setId($data["id"] ?? 0);
        $this->setApellido($data["apellido"] ?? "");
        $this->setNombres($data["nombres"] ?? "");
        $this->setDni($data["dni"] ?? "");
        $this->setCuit($data["cuit"] ?? "");
        $this->setTipo($data["tipo"] ?? 2);
        //MODIFICAR ID PROVINCIA
        $this->setProvinciaId($data["provinciaId"] ?? 6);
        $this->setLocalidad($data["localidad"] ?? "");
        $this->setTelefono($data["telefono"] ?? "");
        $this->setCorreo($data["correo"] ?? "");
    }
    /***************************************************  GETTERS  */
    public function getId(): int{
        return $this->id;
    }
    public function getApellido(): string{
        return $this->apellido;
    }
    public function getNombres(): string{
        return $this->nombres;
    }
    public function getDni(): string{
        return $this->dni;
    }
    public function getCuit(): string{
        return $this->cuit;
    }
    public function getTipo(): int{
        return $this->tipo;
    }
    public function getProvinciaId(): int{
        return $this->provinciaId;
    }
    public function getLocalidad(): string{
        return $this->localidad;
    }
    public function getTelefono(): string{
        return $this->telefono;
    }
    public function getCorreo(): string{
        return $this->correo;
    }
    /***************************************************  SETTERS  */
    public function setId($id): void{
        $this->id = (is_integer($id) && $id > 0) ? $id : 0;
    }

    public function setApellido($apellido): void{
        $this->apellido = 
        is_string($apellido) && (strlen(trim($apellido)) <= 45) 
        ? trim($apellido) 
        : "";
    }
    public function setNombres($nombres): void{
        $this->nombres = 
        is_string($nombres) && (strlen(trim($nombres)) <= 45) 
        ? trim($nombres) 
        : "";
    }
    public function setDni($dni): void{
        $this->dni = 
        is_string($dni) && (strlen($dni) == 8)
        ? $dni
        : "";
    }
    public function setCuit($cuit): void{
        $this->cuit = 
        is_string($cuit) && (strlen($cuit) == 11)
        ? $cuit
        : "";
    }
    public function setTipo($tipo): void{
        $this->tipo = 
        ($tipo === 1 || $tipo === 2)
        ? $tipo
        : 2;
    }
    //MODIFICAR IDS LUEGO
    public function setProvinciaId($provinciaId): void{
        $this->provinciaId = 
        (is_numeric($provinciaId) && $provinciaId > 0)
        ? $provinciaId 
        : 1;
    }
    public function setLocalidad($localidad): void{
        $this->localidad = 
        is_string($localidad) && (strlen(trim($localidad)) <= 45) 
        ? trim($localidad) 
        : "";
    }
    public function setTelefono($telefono): void{
        $this->telefono = 
        is_string($telefono) && (strlen(trim($telefono)) <= 45) 
        ? trim($telefono) 
        : "";
    }
    public function setCorreo($correo): void{
        $this->correo = 
        is_string($correo) && filter_var($correo, FILTER_VALIDATE_EMAIL)
        ? trim($correo) 
        : "";
    }
    /***************************************************  METODOS  */
    public function toArray(): array
    {
        return [
            "apellido" => $this->getApellido(),
            "nombres" => $this->getNombres(),
            "dni" => $this->getDni(),
            "cuit" => $this->getCuit(),
            "tipo" => $this->getTipo(),
            "provinciaId" => $this->getProvinciaId(),
            "localidad" => $this->getLocalidad(),
            "telefono" => $this->getTelefono(),
            "correo" => $this->getCorreo()
        ];
    }
}