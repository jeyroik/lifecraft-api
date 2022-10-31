<?php
namespace lifecraft\components\heroes;

use extas\interfaces\repositories\IRepository;
use lifecraft\interfaces\heroes\IHaveHero;
use lifecraft\interfaces\heroes\IHero;

/**
 * @property array $config
 * @method IRepository heroes()
 */
trait THasHero
{
    public function getHero(): ?IHero
    {
        return $this->heroes()->one([
            IHero::FIELD__ID => $this->getHeroId()
        ]);
    }

    public function setHero(IHero $hero): IHaveHero
    {
        $this->setHeroId($hero->getId());

        return $this;
    }

    public function getHeroId(): string
    {
        return $this->config[IHaveHero::FIELD__HERO_ID] ?? '';
    }

    public function setHeroId(string $id): IHaveHero
    {
        $this->config[IHaveHero::FIELD__HERO_ID] = $id;

        return $this;
    }
}
