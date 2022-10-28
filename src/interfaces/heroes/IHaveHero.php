<?php
namespace lifecraft\interfaces\heroes;

interface IHaveHero
{
    public const FIELD__HERO_ID = 'hero_id';

    public function getHeroId(): string;
    public function getHero(): ?IHero;

    public function setHeroId(string $id): IHaveHero;
    public function setHero(IHero $hero): IHaveHero;
}
