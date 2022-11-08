<?php
namespace lifecraft\components\api\routes\json\heroes;

use extas\components\exceptions\AlreadyExist;
use extas\components\extensions\TExtendable;
use extas\components\Plugins;
use lifecraft\components\api\routes\json\THasInOutDescription;
use lifecraft\components\api\routes\Route;
use lifecraft\components\api\routes\THasRouteJson;
use lifecraft\interfaces\api\IHaveApiDescription;
use lifecraft\interfaces\api\routes\IHaveRouteJson;
use Psr\Http\Message\ResponseInterface;

class RouteCreate extends Route implements IHaveRouteJson, IHaveApiDescription
{
    use TExtendable;
    use THasRouteJson;
    use THasInOutDescription;

    protected string $stageItemName = '';
    protected string $repoName = '';
    protected array $validators = [];

    public function execute(): ResponseInterface
    {
        $data = $this->getJsonData();

        if (!$this->isValidData($data)) {
            return $this->response;
        }

        $class = $this->{$this->repoName}()->getItemClass();
        $item = new $class($data);
        try {
            $item = $this->{$this->repoName}()->create($item);
        } catch (AlreadyExist $e) {
            $this->setJsonData($data, $e->getMessage());
            return $this->response;
        }

        $this->setJsonData($item->__toArray());

        return $this->response;
    }

    protected function isValidData(array $data): bool
    {
        foreach ($this->validators as $validator) {
            $valid = $this->$validator($data);
            if (!$valid) {
                return false;
            }
        }

        foreach (Plugins::byStage('') as $plugin) {
            $valid = $plugin($data, $this);
            if (!$valid) {
                return false;
            }
        }

        return true;
    }

    protected function getSubjectForExtension(): string
    {
        return 'lifecraft.route.json.' . $this->stageItemName . '.create';
    }
}
