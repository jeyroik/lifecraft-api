<?php
namespace lifecraft\components\api\routes\json\players;

use extas\components\extensions\TExtendable;
use extas\interfaces\repositories\IRepository;
use lifecraft\components\api\routes\Route;
use lifecraft\components\api\routes\THasRouteJson;
use Psr\Http\Message\ResponseInterface;

/**
 * @method IRepository players()
 */
class RouteViewPlayer extends Route
{
    use TExtendable;
    use THasRouteJson;

    public const PATH = 'player/{identity}';

    public function execute(): ResponseInterface
    {
        $player = $this->players()->one($this->args);

        $player ?
            $this->setJsonData($player->__toArray()) :
            $this->setJsonData($this->args, 'Player not found');
        
        return $this->response;
    }

    public function getSubjectForExtension(): string
    {
        return 'lifecraft.route.json.player.view';
    }
}
