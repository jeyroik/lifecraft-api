<?php
namespace lifecraft\components\avatars;

use extas\interfaces\IHasId;
use extas\interfaces\repositories\IRepository;
use lifecraft\components\exceptions\SpecifiedInstanceIsRequired;
use lifecraft\interfaces\avatars\IAvatar;
use lifecraft\interfaces\avatars\IHaveAvatar;

/**
 * @property array $config
 * @method IRepository avatars()
 */
trait THasAvatar
{
    public function getAvatarId(): string
    {
        return $this->config[IHaveAvatar::FIELD__AVATAR_ID] ?? '';
    }

    public function setAvatarId(string $avatarId): IHaveAvatar
    {
        $this->config[IHaveAvatar::FIELD__AVATAR_ID] = $avatarId;

        return $this;
    }

    public function getAvatar(): ?IAvatar
    {
        return $this->avatars()->one([
            IAvatar::FIELD__ID => $this->getAvatarId()
        ]);
    }

    public function setAvatar(IAvatar $avatar): IHaveAvatar
    {
        if ($this instanceof IHasId) {
            $avatar->setOwner($this);
            $avatar = $this->avatars()->create($avatar);
            $this->config[IHaveAvatar::FIELD__AVATAR_ID] = $avatar->getId();

            return $this;
        }

        throw new SpecifiedInstanceIsRequired(IHasId::class);
    }
}
