<?

namespace app\core\service;

use app\core\model\dto\ProvinciaDTO;
use app\core\service\base\InterfaceService;
use app\core\service\base\Service;

final class ProvinciaService extends Service implements InterfaceService{
    public function __construct()
    {
        parent::__construct();
    }

    public function save(array $object): void{

    }

    public function load($id): ProvinciaDTO{
        return new ProvinciaDTO();
    }

    public function update(array $object): void{

    }

    public function delete($id): void{

    }

    public function list(): array{
        return [];
    }
}