<?php
namespace lifecraft\components\artefacts;

use extas\interfaces\repositories\IRepository;
use lifecraft\interfaces\artefacts\IArtefact;
use lifecraft\interfaces\artefacts\IHaveArtefact;

/**
 * @property array $config
 * @method IRepository artefacts()
 */
trait THasArtefact
{
    public function getArtefact(): ?IArtefact
    {
        return $this->artefacts()->one([
            IArtefact::FIELD__ID => $this->getArtefactId()
        ]);
    }

    public function getArtefactId(): string
    {
        return $this->config[IHaveArtefact::FIELD__ARTEFACT_ID] ?? '';
    }

    public function setArtefact(IArtefact $artefact): IHaveArtefact
    {
        $this->config[IHaveArtefact::FIELD__ARTEFACT_ID] = $artefact->getId();
        
        $artefact->setOwner($this);
        $this->artefacts()->update($artefact);

        return $this;
    }

    public function setArtefactId(string $id): IHaveArtefact
    {
        $this->config[IHaveArtefact::FIELD__ARTEFACT_ID] = $id;

        return $this;
    }
}
