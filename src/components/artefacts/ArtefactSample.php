<?php
namespace lifecraft\components\artefacts;

use extas\components\samples\Sample;
use extas\components\THasClass;
use extas\components\THasId;
use lifecraft\components\attributes\THasEffectDescription;
use lifecraft\components\avatars\THasAvatar;
use lifecraft\interfaces\artefacts\IArtefactSample;

class ArtefactSample extends Sample implements IArtefactSample
{
    use THasId;
    use THasAvatar;
    use THasClass;
    use THasEffectDescription;

    public function getRequirements(): string
    {
        return $this->config[static::FIELD__REQUIREMENTS] ?? '';
    }

    public function setRequirements(string $text): IArtefactSample
    {
        $this->config[static::FIELD__REQUIREMENTS] = $text;

        return $this;
    }

    protected function getSubjectForExtension(): string
    {
        return static::SUBJECT;
    }
}
