<?php

require_once "../app/config/DBConfig.php";
require_once "../app/core/model/dto/UsuarioDTO.php";
use app\core\model\dto\UsuarioDTO;
//use app\core\model\dto\UsuarioDTO AS User;
//$usuario = new User;

$data = [
    "id" => 4,
    "apellido" => "Huenchur",
    "nombres" => "Mauricio",
    "cuenta" => "mHuenchur"
];

$usuario = new UsuarioDTO($data);

print_r($usuario->toArray());