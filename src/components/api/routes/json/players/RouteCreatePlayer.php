<?php
namespace lifecraft\components\api\routes\json\players;

use extas\components\exceptions\AlreadyExist;
use extas\components\extensions\TExtendable;
use extas\interfaces\repositories\IRepository;
use lifecraft\components\players\Player;
use lifecraft\components\api\routes\Route;
use lifecraft\components\api\routes\THasRouteJson;
use lifecraft\interfaces\api\routes\IHaveRouteJson;
use lifecraft\interfaces\players\IPlayer;
use Psr\Http\Message\ResponseInterface;

/**
 * @method IRepository players()
 */
class RouteCreatePlayer extends Route implements IHaveRouteJson
{
    use TExtendable;
    use THasRouteJson;

    public const PATH = 'player';

    public function execute(): ResponseInterface
    {
        $player = new Player($this->getJsonData());
        try {
            /**
             * @var IPlayer $player
             */
            $player = $this->players()->create($player);
        } catch (AlreadyExist $e) {
            $this->setJsonData([Player::FIELD__IDENTITY => $player->getIdentity()], 'Player already exists');
            return $this->response;
        }

        $this->setJsonData($player->__toArray());

        return $this->response;
    }

    public function help(): ResponseInterface
    {
        $this->setJsonData([
            static::HELP__REQUEST => [
                static::HELP__REQUEST_METHOD => static::METHOD__POST,
                static::HELP__REQUEST_PARAMETERS => [
                    IPlayer::FIELD__IDENTITY => $this->getAttributeHelp(
                        'Identity',
                        static::USE_IN__UI,
                        static::TYPE__STRING,
                        [4,100]
                    ),
                    IPlayer::FIELD__SECRET => $this->getAttributeHelp(
                        'Secret (password or a token)',
                        static::USE_IN__CODE,
                        static::TYPE__STRING,
                        [8,'inf']
                    ),
                    IPlayer::FIELD__AVATAR_ID => $this->getAttributeHelp(
                        'Avatar ID',
                        static::USE_IN__CODE,
                        static::TYPE__STRING,
                        [36]
                    ),
                ]
            ],
            static::HELP__RESPONSE => [
                static::FIELD__DATA => [
                    IPlayer::FIELD__ID => $this->getAttributeHelp(
                        'ID',
                        static::USE_IN__UI,
                        static::TYPE__STRING,
                        [36]
                    ),
                    IPlayer::FIELD__IDENTITY => $this->getAttributeHelp(
                        'Identity',
                        static::USE_IN__UI,
                        static::TYPE__STRING,
                        [4,100]
                    ),
                    IPlayer::FIELD__SECRET => $this->getAttributeHelp(
                        'Encoded secret (password or a token)',
                        static::USE_IN__CODE,
                        static::TYPE__STRING,
                        [8,'inf']
                    ),
                    IPlayer::FIELD__AVATAR_ID => $this->getAttributeHelp(
                        'Avatar ID',
                        static::USE_IN__CODE,
                        static::TYPE__STRING,
                        [36]
                    ),
                ]
            ]
        ]);

        return $this->response;
    }

    public function getSubjectForExtension(): string
    {
        return 'lifecraft.route.json.player.create';
    }
}
