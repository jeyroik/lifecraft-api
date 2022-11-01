<?php
namespace lifecraft\components\pets;

use lifecraft\components\attributes\THasExperience;
use lifecraft\components\owners\THasOwner;
use lifecraft\interfaces\pets\IPet;

class Pet extends PetSample implements IPet
{
    use THasOwner;
    use THasExperience;

    protected function getSubjectForExtension(): string
    {
        return static::SUBJECT__PET;
    }
}
