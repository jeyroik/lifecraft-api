<?php
namespace lifecraft\components\artefacts;

use lifecraft\components\owners\THasOwner;
use lifecraft\interfaces\artefacts\IArtefact;

class Artefact extends ArtefactSample implements IArtefact
{
    use THasOwner;

    protected function getSubjectForExtension(): string
    {
        return static::SUBJECT__ARTEFACT;
    }
}
