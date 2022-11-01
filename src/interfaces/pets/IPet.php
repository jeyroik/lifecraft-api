<?php
namespace lifecraft\interfaces\pets;

use lifecraft\interfaces\attributes\IHaveExperience;
use lifecraft\interfaces\owners\IHaveOwner;

interface IPet extends IPetSample, IHaveOwner, IHaveExperience
{
    public const SUBJECT__PET = 'lifecraft.pet';
}
