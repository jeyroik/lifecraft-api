<?php
namespace lifecraft\components\players;

use extas\interfaces\repositories\IRepository;
use lifecraft\interfaces\players\IHavePlayer;
use lifecraft\interfaces\players\IPlayer;

/**
 * @property array $config
 * @method IRepository players()
 */
trait THasPlayer
{
    public function getPlayer(): ?IPlayer
    {
        return $this->players()->one([
            IPlayer::FIELD__ID => $this->getPlayerId()
        ]);
    }

    public function setPlayer(IPlayer $player): IHavePlayer
    {
        $this->setPlayerId($player->getId());

        return $this;
    }

    public function getPlayerId(): string
    {
        return $this->config[IHavePlayer::FIELD__PLAYER_ID] ?? '';
    }

    public function setPlayerId(string $id): IHavePlayer
    {
        $this->config[IHavePlayer::FIELD__PLAYER_ID] = $id;

        return $this;
    }
}
