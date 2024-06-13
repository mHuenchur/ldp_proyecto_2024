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
        $this->setCorreo($data["correo"] ?? "");
        $this->setClave($data["clave"] ?? "");
        $this->setPerfilId($data["perfilId"] ?? 0);
        $this->setEstado($data["estado"] ?? 1);
        $this->setHoraEntrada($data["horaEntrada"] ?? "");
        $this->setHoraSalida($data["horaSalida"] ?? "");
        $this->setFechaAlta($data["fechaAlta"] ?? "");
        $this->setResetear($data["resetear"] ?? 0);
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
    //CHEQUEAR TODO ESTO
    public function setCorreo($correo): void{
        $this->correo = 
        is_string($correo) && filter_var($correo, FILTER_VALIDATE_EMAIL) 
        ? $correo
        : "";
    }
    public function setClave($clave): void{
        $this->clave = 
        is_string($clave) && preg_match('/^[a-zA-Z0-9]{6,15}$/', $clave) 
        ? $clave
        : "";
    }
    public function setPerfilId($perfilId): void{
        $this->perfilId = 
        (is_integer($perfilId) && $perfilId > 0)
        ? $perfilId
        : 0;
    }
    public function setEstado($estado): void{
        $this->estado = 
        ($estado === 0 || $estado === 1)
        ? $estado
        : 1;
    }
    public function setHoraEntrada($horaEntrada): void{
        $this->horaEntrada = 
        is_string($horaEntrada)
        ? $horaEntrada 
        : "";
    }
    public function setHoraSalida($horaSalida): void{
        $this->horaSalida = 
        is_string($horaSalida)
        ? $horaSalida
        : "";
    }
    public function setFechaAlta($fechaAlta): void{
        $this->fechaAlta = 
        is_string($fechaAlta)
        ? $fechaAlta 
        : "";
    }
    public function setResetear($resetear): void{
        $this->resetear = 
        ($resetear === 0 || $resetear === 1)
        ? $resetear
        : 0;
    }
    // ** METODOS **
    public function toArray(): array{
        return [
            "id" => $this->getId(),
            "apellido" => $this->getApellido(),
            "nombres" => $this->getNombres(),
            "cuenta" => $this->getCuenta(),
            "correo" => $this->getCorreo(),
            "clave" => $this->getClave(),
            "perfilId" => $this->getPerfilId(),
            "estado" => $this->getEstado(),
            "horaEntrada" => $this->getHoraEntrada(),
            "horaSalida" => $this->getHoraSalida(),
            "fechaAlta" => $this->getFechaAlta(),
            "resetear" => $this->getResetear()
        ];
    }
}