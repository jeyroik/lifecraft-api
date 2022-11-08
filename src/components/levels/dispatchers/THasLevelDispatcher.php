<?php
namespace lifecraft\components\levels\dispatchers;

use extas\components\exceptions\MissedOrUnknown;
use lifecraft\interfaces\levels\dispatchers\IHaveLevelDispatcher;
use lifecraft\interfaces\levels\dispatchers\ILevelDispatcher;

/**
 * @property array $config
 */
trait THasLevelDispatcher
{
    /**
     * @description_en Level dispatcher class name
     * @description_ru Имя класса для обработчика уровня
     * @use_in ui
     * @return_min 0
     * @return_max -1
     *
     * @return integer
     */
    public function getLevelDispatcher(): string
    {
        return $this->config[IHaveLevelDispatcher::FIELD__LEVEL_DISPATCHER] ?? '';
    }

    public function buildLevelDispatcher(): ILevelDispatcher
    {
        $className = $this->getLevelDispatcher();

        if (!$className) {
            throw new MissedOrUnknown('level dispatcher class');
        }

        return new $className();
    }

    public function setLevelDispatcher(string $className): IHaveLevelDispatcher
    {
        $this->config[IHaveLevelDispatcher::FIELD__LEVEL_DISPATCHER] = $className;

        return $this;
    }
}
