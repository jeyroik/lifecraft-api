<?php
namespace lifecraft\components\players;

use extas\components\Item;
use extas\components\THasId;
use lifecraft\components\avatars\THasAvatar;
use lifecraft\interfaces\players\IPlayer;

class Player extends Item implements IPlayer
{
    use THasId;
    use THasAvatar;

    public function getIdentity(): string
    {
        return $this->config[static::FIELD__IDENTITY] ?? '';
    }

    public function setIdentity(string $identity): IPlayer
    {
        $this->config[static::FIELD__IDENTITY] = $identity;

        return $this;
    }

    public function getSecret(): string
    {
        return $this->config[static::FIELD__SECRET] ?? '';
    }

    public function setSecret(string $secret): IPlayer
    {
        $this->config[static::FIELD__SECRET] = $secret;

        return $this;
    }

    protected function getSubjectForExtension(): string
    {
        return static::SUBJECT;
    }
}
