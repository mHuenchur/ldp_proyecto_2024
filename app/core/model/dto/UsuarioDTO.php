<?php

namespace app\core\model\dto;

use app\core\model\base\InterfaceDTO;


final class UsuarioDTO implements InterfaceDTO{
    //getter setter
    //exportar metodos
    private $id, $apellido, $nombres, $cuenta, $clave, $correo, $perfilId;
    private $estado, $horaEntrada, $horaSalida, $fechaAlta, $resetear;

    /**
     * Constructor de la clase
     * entra un array, sea vacio por defecto
     */
    public function __construct($data = [])
    {
        //?? operador coalescente null
        $this->setId($data["id"] ?? 0);
        $this->setApellido($data["apellido"] ?? "");
        $this->setNombres($data["nombres"] ?? "");
        $this->setCuenta($data["cuenta"] ?? "");
        /*
        $this->setCorreo($data["correo"] ?? "");
        $this->setClave($data["clave"] ?? "");
        $this->setPerfilId($data["perfilId"] ?? 0);
        $this->setEstado($data["estado"] ?? 0);
        $this->setHoraEntrada($data["horaEntrada"] ?? null);
        $this->setHoraSalida($data["horaSalida"] ?? null);
        $this->setFechaAlta($data["fechaAlta"] ?? "");
        $this->setResetear($data["resetear"] ?? 0);*/
    }

    // ** GETTERS **
    public function getId(): int{
        return $this->id;
    }
    public function getApellido(): string{
        return $this->apellido;
    }
    public function getNombres(): string{
        return $this->nombres;
    }
    public function getCuenta(): string{
        return $this->cuenta;
    }
    public function getCorreo(): string{
        return $this->correo;
    }
    public function getClave(): string{
        return $this->clave;
    }
    public function getPerfilId(): int{
        return $this->perfilId;
    }
    public function getEstado(): int{
        return $this->estado;
    }
    public function getHoraEntrada(): string{
        return $this->horaEntrada;
    }
    public function getHoraSalida(): string{
        return $this->horaSalida;
    }
    public function getFechaAlta(): string{
        return $this->fechaAlta;
    }
    public function getResetear(): int{
        return $this->resetear;
    }
    
    // ** SETTERS **
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

    public function setCuenta($cuenta): void{
        $this->cuenta = 
        is_string($cuenta) && preg_match('/^[a-zA-Z0-9]{6,10}$/', $cuenta)
        ? $cuenta
        : "";
    }
///////////
    public function setCorreo($correo): void{
        
    }
    public function setClave($clave): void{

    }
    public function setPerfilId($perfilId): void{

    }
    public function setEstado($estado): void{

    }
    public function setHoraEntrada($horaEntrada): void{

    }
    public function setHoraSalida($horaSalida): void{

    }
    public function setFechaAlta($fechaAlta): void{

    }
    public function setResetear($resetear): void{

    }
    // ** METODOS **
    public function toArray(): array{
        return [
            //"id" => $this->getId(),
            "appelido" => $this->getApellido(),
            "nombres" => $this->getNombres(),
            "cuenta" => $this->getCuenta()/*
            "clave" => $this->getClave(),
            "correo" => $this->getCorreo(),
            "perfilId" => $this->getPerfilId(),
            "estado" => $this->getEstado(),
            "horaEntrada" => $this->getHoraEntrada(),
            "horaSalida" => $this->getHoraSalida(),
            "fechaAlta" => $this->getFechaAlta(),
            "resetear" => $this->getResetear()*/
        ];
    }
}