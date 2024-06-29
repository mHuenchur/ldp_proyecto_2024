<?php

namespace app\core\service;

use app\core\model\dto\PerfilDTO;
use app\core\service\base\InterfaceService;
use app\core\service\base\Service;

final class PerfilService extends Service implements InterfaceService{
    public function __construct()
    {
        parent::__construct();
    }

    public function save(array $object): void{

    }

    public function load($id): PerfilDTO{
        return new PerfilDTO();
    }

    public function update(array $object): void{

    }

    public function delete($id): void{

    }

    public function list(): array{
        return [];
    }
}