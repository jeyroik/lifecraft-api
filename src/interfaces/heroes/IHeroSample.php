<?php
namespace lifecraft\interfaces\heroes;

use extas\interfaces\IHasDescription;
use extas\interfaces\IHasId;
use extas\interfaces\IHasName;
use extas\interfaces\IItem;
use lifecraft\interfaces\attributes\IHaveEnergy;
use lifecraft\interfaces\attributes\IHaveExperience;
use lifecraft\interfaces\attributes\IHaveGold;
use lifecraft\interfaces\attributes\IHaveHealth;
use lifecraft\interfaces\attributes\IHaveLevel;
use lifecraft\interfaces\avatars\IHaveAvatar;

/**
 * Hero sample
 * 
 * @field.id(description="Hero Sample ID",type=uuid,edges=[36])
 * @field.name(description="Hero Sample name",type=string,edges[1,30])
 * @field.title(description="Hero Sample title",type=string,edges[1,30])
 * @field.description(description="Hero Sample description",type=string,edges[1,100])
 * @field.avatar_id(description="Hero Sample avatar ID",type=uuid,edges[36])
 * 
 * @field.health(description="Hero Sample current health",type=int,edges[1,inf])
 * @field.energy(description="Hero Sample current energy",type=int,edges[1,inf])
 * @field.experience(description="Hero Sample current experience",type=int,edges[0,inf])
 * @field.gold(description="Hero Sample current gold",type=int,edges[0,inf])
 * @field.level(description="Hero Sample current level",type=int,edges[1,inf])
 */
interface IHeroSample extends IItem,
    IHasId, IHasName, IHasDescription, IHaveAvatar, 
    IHaveHealth, IHaveEnergy, IHaveExperience, IHaveGold, IHaveLevel
{
    public const SUBJECT = 'lifecraft.hero.sample';
}
