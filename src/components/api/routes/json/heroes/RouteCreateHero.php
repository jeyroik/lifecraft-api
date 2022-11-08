<?php
namespace lifecraft\components\api\routes\json\heroes;

use extas\interfaces\repositories\IRepository;
use lifecraft\interfaces\heroes\IHero;
use lifecraft\interfaces\players\IPlayer;

/**
 * @method IRepository players()
 * 
 * @api__input_method post
 * @api__input.player_id(required=true,validate=\some\class\Name,description="Player ID",use_in=code,type=uuid,edges=[36])
 * @api__input.sample_id(required=true,validate=\some\class\NameOther,description="Sample ID",use_in=code,type=uuid,edges=[1,36])
 * 
 * @api__output.one \lifecraft\interfaces\heroes\IHero
 */
class RouteCreateHero extends RouteCreate
{
    public const PATH = 'hero';

    protected string $stageItemName = 'hero';
    protected string $repoName = 'heroes';
    protected array $validators = ['isValidPlayer'];

    protected function isValidPlayer(array $data): bool
    {
        if (!isset($data[IHero::FIELD__PLAYER_ID])) {
            $this->setJsonData($data, 'Missed '.IHero::FIELD__PLAYER_ID.' field');
            return false;
        }

        $player = $this->players()->one([
            IPlayer::FIELD__ID => $data[IHero::FIELD__PLAYER_ID]
        ]);

        if (!$player) {
            $this->setJsonData($data, 'Unknown player');
            return false;
        }

        return true;
    }

    protected function getSubjectForExtension(): string
    {
        return 'lifecraft.route.json.hero.create';
    }
}
