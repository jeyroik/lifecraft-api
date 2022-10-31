<?php
namespace lifecraft\interfaces\heroes;

use extas\interfaces\IHasId;

interface IHeroStat extends IHasId, IHaveHero
{
    public const SUBJECT = 'lifecraft.hero.stat';

    public const FIELD__APPROVED = 'approved';
    public const FIELD__NOT_APPROVED = 'not_approved';

    public function getApproved(): int;
    public function setApproved(int $count): IHeroStat;

    public function getNotApproved(): int;
    public function setNotApproved(int $count): IHeroStat;
}
