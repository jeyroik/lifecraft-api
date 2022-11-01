<?php
namespace lifecraft\components\skills;

use extas\interfaces\repositories\IRepository;
use lifecraft\interfaces\skills\IHaveSkill;
use lifecraft\interfaces\skills\ISkill;

/**
 * @property array $config
 * @method IRepository skills()
 */
trait THasSkill
{
    public function getSkill(): ?ISkill
    {
        return $this->skills()->one([
            ISkill::FIELD__ID => $this->getSkillId()
        ]);
    }

    public function setSkill(ISkill $skill): IHaveSkill
    {
        $skill->setOwner($this);
        $skill = $this->skills()->create($skill);

        $this->setSkillId($skill->getId());

        return $this;
    }

    public function getSkillId(): string
    {
        return $this->config[IHaveSkill::FIELD__SKILL_ID] ?? '';
    }

    public function setSkillId(string $id): IHaveSkill
    {
        $this->config[IHaveSkill::FIELD__SKILL_ID] = $id;

        return $this;
    }
}
