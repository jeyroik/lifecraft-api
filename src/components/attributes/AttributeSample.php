<?php
namespace lifecraft\components\attributes;

use extas\components\Item;
use extas\components\THasDescription;
use extas\components\THasId;
use extas\components\THasName;
use lifecraft\components\levels\dispatchers\THasLevelDispatcher;
use lifecraft\interfaces\attributes\IAttributeSample;

class AttributeSample extends Item implements IAttributeSample
{
    use THasId;
    use THasName;
    use THasDescription;
    use THasLevelDispatcher;
    use THasValueMaxMin;

    /**
     * @description_en Current Level
     * @description_ru Текущий уровень
     * @use_in ui
     * @return_min 0
     * @return_max -1
     *
     * @return integer
     * 
     */
    public function getLevel(): int
    {
        return $this->config[static::FIELD__LEVEL] ?? 0;
    }

    public function incLevel(int $increment = 1): int
    {
        $this->config[static::FIELD__LEVEL]++;

        return $this->getLevel();
    }

    protected function getSubjectForExtension(): string
    {
        return static::SUBJECT;
    }
}
