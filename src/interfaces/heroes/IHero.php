<?php
namespace lifecraft\interfaces\heroes;

use lifecraft\interfaces\players\IHavePlayer;

/**
 * Hero
 * 
 * @field.id(description="Hero ID",type=uuid,edges=[36])
 * @field.name(description="Hero name",type=string,edges[1,30])
 * @field.title(description="Hero title",type=string,edges[1,30])
 * @field.description(description="Hero description",type=string,edges[1,100])
 * @field.avatar_id(description="Hero avatar ID",type=uuid,edges[36])
 * @field.player_id(description="Hero Player ID",type=uuid,edges[36])
 * 
 * @field.health(description="Hero current health",type=int,edges[1,inf])
 * @field.energy(description="Hero current energy",type=int,edges[1,inf])
 * @field.experience(description="Hero current experience",type=int,edges[0,inf])
 * @field.gold(description="Hero current gold",type=int,edges[0,inf])
 * @field.level(description="Hero current level",type=int,edges[1,inf])
 */
interface IHero extends IHeroSample, IHavePlayer
{
    public const SUBJECT__HERO = 'lifecraft.hero';
}
