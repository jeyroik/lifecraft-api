<?php
namespace lifecraft\interfaces\skills;

interface IHaveSkill
{
    public const FIELD__SKILL_ID = 'skill_id';

    public function getSkillId(): string;
    public function getSkill(): ?ISkill;

    public function setSkillId(string $id): IHaveSkill;
    public function setSkill(ISkill $skill): IHaveSkill;
}
