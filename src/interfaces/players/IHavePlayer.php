<?php
namespace lifecraft\interfaces\players;

interface IHavePlayer
{
    public const FIELD__PLAYER_ID = 'player_id';

    public function getPlayerId(): string;
    public function setPlayerId(string $id): IHavePlayer;

    public function getPlayer(): ?IPlayer;
    public function setPlayer(IPlayer $player): IHavePlayer;
}
