<?php
namespace lifecraft\components\heroes;

use extas\components\Item;
use extas\components\THasId;
use lifecraft\interfaces\heroes\IHeroStat;

class HeroStat extends Item implements IHeroStat
{
    use THasId;
    use THasHero;

    public function getApproved(): int
    {
        return $this->config[static::FIELD__APPROVED] ?? 0;
    }

    public function setApproved(int $count): IHeroStat
    {
        $this->config[static::FIELD__APPROVED] = $count;

        return $this;
    }

    public function getNotApproved(): int
    {
        return $this->config[static::FIELD__NOT_APPROVED] ?? 0;
    }

    public function setNotApproved(int $count): IHeroStat
    {
        $this->config[static::FIELD__NOT_APPROVED] = $count;

        return $this;
    }

    protected function getSubjectForExtension(): string
    {
        return static::SUBJECT;
    }
}
