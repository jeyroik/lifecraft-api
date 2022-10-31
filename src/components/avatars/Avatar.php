<?php
namespace lifecraft\components\avatars;

use lifecraft\components\owners\THasOwner;
use lifecraft\interfaces\avatars\IAvatar;

class Avatar extends AvatarSample implements IAvatar
{
    use THasOwner;

    protected function getSubjectForExtension(): string
    {
        return static::SUBJECT__AVATAR;
    }
}
