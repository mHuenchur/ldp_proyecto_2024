<?php

//require_once "../app/libs/connection/Connection.php";
//con el autoload nos libramos de llamar a los demas require once...
require_once "../app/config/DBConfig.php";
require_once "../app/vendor/autoload.php";

use app\libs\connection\Connection;
use app\core\model\dao\UsuarioDAO;
use app\core\model\dto\UsuarioDTO;

use app\core\model\dao\ClienteDAO;
use app\core\model\dto\ClienteDTO;

use app\core\model\dao\ProvinciaDAO;
use app\core\model\dto\ProvinciaDTO;


try{
    $conexion = Connection::get();
    echo '<p>Conexion establecida</p>';
    
    /*
    $data = [
        "apellido" => "Huenchur",
        "nombres" => "Mauricio",
        "cuenta" => "mHuenchur"
    ];

    $usuarioDto = new UsuarioDTO($data);
    $usuarioDao = new UsuarioDAO($conexion);
    $usuarioDao->save($usuarioDto);
    */
    /*
    $data = [
        "apellido" => "Huenchur",
        "nombres" => "Mauricio",
        "dni" => "40985967",
        "cuit" => "",
        "tipo" => 2,
        "provinciaId" => 1,
        "localidad" => "Pico Truncado",
        "telefono" => "2966623326",
        "correo" => "mHuenchur@gmail.com"
    ];

    $clienteDTO = new ClienteDTO($data);
    print_r($clienteDTO->toArray());
    $clienteDAO = new ClienteDAO($conexion);
    $clienteDAO->save($clienteDTO);

    echo '<p>Cliente agregado a BD</p>';
        */
        /*
        $data = [
            "id" => 0,
            "nombre" => "Santa Cruz"
        ];
    */
        //$provinciaDto = new ProvinciaDTO($data);
        $provinciaDao = new ProvinciaDAO($conexion);
        $provinciaDto = $provinciaDao->load(3);

        print_r($provinciaDto->toArray());

        //ESTO LO TIENE QUE HACER EL SERVICIO
        $provinciaDto->setNombre("Chubut");
        $provinciaDao->update($provinciaDto);

        $provinciaDao->delete(5);
        

    }catch(PDOException $ex){
        echo '<p>Error: ' . $ex->getMessage() . '</p>';
        echo '<p>Error: ' . $ex->getTraceAsString() . '</p>';
        echo '<p>Error: ' . $ex->getLine() . '</p>';
    }

/*
    $sql = "INSERT INTO perfiles VALUES (DEFAULT, 'Administrador'), (DEFAULT, 'Operador')";
    $result = $conexion->exec($sql);
    if(!$result){
        echo '<p>Error al intentar insertar registros</p>';
    }
    else{
        echo '<p>Filas afectadas: ' . $result . '</p>';
    }
    
    
    $sql = "INSERT INTO provincias VALUES (DEFAULT, 'Santa Cruz'), (DEFAULT, 'Chubut')";
        $result = $conexion->exec($sql);
        if(!$result){
            echo '<p>Se guardaron las provincias</p>';
        }
        else{
            echo '<p>Filas afectadas: ' . $result . '</p>';
        }
    
    
    
    
    */