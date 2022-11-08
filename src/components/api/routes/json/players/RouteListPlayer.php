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
class RouteListPlayer extends Route
{
    use TExtendable;
    use THasRouteJson;

    public const PATH = 'player';

    public function execute(): ResponseInterface
    {
        $players = $this->players()->all([]);

        $result = [];

        foreach ($players as $player) {
            $result[] = $player->__toArray();
        }

        $this->setJsonData($result);
        
        return $this->response;
    }

    public function getSubjectForExtension(): string
    {
        return 'lifecraft.route.json.player.list';
    }
}
