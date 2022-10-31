<?php
namespace lifecraft\interfaces\artefacts;

use lifecraft\interfaces\owners\IHaveOwner;

interface IArtefact extends IArtefactSample, IHaveOwner
{
    public const SUBJECT__ARTEFACT = 'lifecraft.artefact';
}
