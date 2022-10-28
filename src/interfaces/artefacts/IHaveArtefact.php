<?php
namespace lifecraft\interfaces\artefacts;

interface IHaveArtefact
{
    public const FIELD__ARTEFACT_ID = 'artefact_id';

    public function getArtefactId(): string;
    public function setArtefactId(string $id): IHaveArtefact;

    public function getArtefact(): ?IArtefact;
    public function setArtefact(IArtefact $artefact): IHaveArtefact;
}
