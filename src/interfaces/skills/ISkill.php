<?php
namespace lifecraft\interfaces\skills;

use extas\interfaces\IDispatcherWrapper;
use extas\interfaces\IHasId;
use extas\interfaces\IItem;
use lifecraft\interfaces\attributes\IHaveEffectDescription;
use lifecraft\interfaces\avatars\IHaveAvatar;
use lifecraft\interfaces\attributes\IHaveRequiredLevel;
use lifecraft\interfaces\owners\IHaveOwner;

/**
 * Скилы отвязаны от героев, т.е. могут применяться к чему-угодно.
 * Так, например, скилы могут быть у атрибутов 
 * (скажем, если здоровье 10 уровня, то появляется доп эффект), у построек и т.п.
 */
interface ISkill extends IItem, IHasId, IHaveRequiredLevel, IDispatcherWrapper, 
    IHaveAvatar, IHaveEffectDescription, IHaveOwner
{
    public const SUBJECT = 'lifecraft.skill';

    public const FIELD__STAGE = 'stage';

    public function getStage(): string;
    public function setStage(string $stage): ISkill;
    public function isOnStage(string $stage): bool;
}
