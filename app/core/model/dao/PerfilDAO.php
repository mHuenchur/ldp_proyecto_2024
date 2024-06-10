<?php

namespace app\core\model\dao;

use app\core\model\base\InterfaceDAO;
use app\core\model\base\InterfaceDTO;
use app\core\model\base\DAO;
use app\core\model\dto\PerfilDTO;

final class PerfilDAO extends DAO implements InterfaceDAO{

    public function __construct($conn)
    {
        parent::__construct($conn, "perfiles");
    }
    
    public function save(InterfaceDTO $object): void{
        
    }

    public function load($id): PerfilDTO{
        return new PerfilDTO();
    }

    public function update($object): void{

    }

    public function delete($id): void{

    }

}