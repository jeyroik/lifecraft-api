<?php
namespace lifecraft\interfaces\players;

use extas\interfaces\IHasId;
use extas\interfaces\IItem;
use lifecraft\interfaces\avatars\IHaveAvatar;

interface IPlayer extends IItem, IHasId, IHaveAvatar
{
    public const SUBJECT = 'lifecraft.player';

    public const FIELD__IDENTITY = 'identity';
    public const FIELD__SECRET = 'secret';

    public function getIdentity(): string;
    public function setIdentity(string $identity): IPlayer;

    public function getSecret(): string;
    public function setSecret(string $secret): IPlayer;
}
