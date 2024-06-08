<?php

namespace app\core\model\dto;

use app\core\model\base\InterfaceDTO;

final class PerfilDTO implements InterfaceDTO{
    private $id, $nombre;

    public function __construct($data = [])
    {
        $this->setId($data["id"] ?? 0);
        $this->setNombre($data["nombre"] ?? "");
    }
    /***************************************************  GETTERS  */
    public function getId(): int{
        return $this->id;
    }
    public function getNombre(): string{
        return $this->nombre;
    }
    /***************************************************  SETTERS  */
    public function setId($id): void{
        $this->id = $id;
    }
    public function setNombre($nombre): void{
        $this->nombre = $nombre;
    }
    /***************************************************  METODOS  */
    public function toArray(): array
    {
        return [
            "id" => $this->getId(),
            "nombre" => $this->getNombre()
        ];
    }
}