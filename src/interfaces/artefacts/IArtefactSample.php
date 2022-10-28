<?php
namespace lifecraft\interfaces\artefacts;

use extas\interfaces\IHasClass;
use extas\interfaces\IHasId;
use extas\interfaces\samples\ISample;
use lifecraft\interfaces\attributes\IHaveEffectDescription;
use lifecraft\interfaces\avatars\IHaveAvatar;

interface IArtefactSample extends ISample, IHasId, IHaveAvatar, IHasClass, IHaveEffectDescription
{
    public const SUBJECT = 'lifecraft.artefact.sample';

    public const FIELD__REQUIREMENTS = 'requirements';

    public function getRequirements(): string;
    public function setRequirements(string $text): IArtefactSample;
}
