<?php
namespace lifecraft\interfaces\pets;

interface IHavePet
{
    public const FIELD__PET_ID = 'pet_id';

    public function getPet(): ?IPet;
    public function setPet(IPet $pet): IHavePet;
    public function getPetId(): string;
    public function setPetId(string $id): IHavePet;
}
