<?php
namespace lifecraft\interfaces\artefacts;

use extas\interfaces\IHasCreatedAt;
use extas\interfaces\IHasId;
use extas\interfaces\IItem;
use extas\interfaces\samples\IHasSample;
use lifecraft\interfaces\owners\IHaveOwner;

interface IArtefact extends IItem, IHasSample, IHasId, IHasCreatedAt, IHaveOwner
{
    public const SUBJECT = 'lifecraft.artefact';
}
