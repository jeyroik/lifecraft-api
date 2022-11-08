<?php
namespace lifecraft\components\skills;

use extas\components\Item;
use extas\components\TDispatcherWrapper;
use extas\components\THasId;
use lifecraft\components\attributes\THasEffectDescription;
use lifecraft\components\attributes\THasRequiredLevel;
use lifecraft\components\avatars\THasAvatar;
use lifecraft\components\owners\THasOwner;
use lifecraft\interfaces\skills\ISkill;

class Skill extends Item implements ISkill
{
    use THasId;
    use THasRequiredLevel;
    use THasAvatar;
    use THasEffectDescription;
    use TDispatcherWrapper;
    use THasOwner;

    public function getStage(): string
    {
        return $this->config[static::FIELD__STAGE] ?? '';
    }

    public function setStage(string $stage): ISkill
    {
        $this->config[static::FIELD__STAGE] = $stage;

        return $this;
    }

    public function isOnStage(string $stage): bool
    {
        return $this->getStage() == $stage;
    }

    protected function getSubjectForExtension(): string
    {
        return static::SUBJECT;
    }
}
