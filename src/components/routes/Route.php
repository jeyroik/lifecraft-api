<?php
namespace lifecraft\components\routes;

use extas\components\Item;
use extas\components\THasDescription;
use extas\components\THasId;
use extas\components\THasName;
use lifecraft\interfaces\routes\IRoute;

class Route extends Item implements IRoute
{
    use THasId;
    use THasDescription;
    use THasDispatcher;
    use THasName;

    /**
     * @description_en HTTP method
     * @description_ru HTTP метод
     * @return_min 3
     * @return_max 6
     * @use_in code
     *
     * @return string
     */
    public function getMethod(): string
    {
        return $this->config[static::FIELD__METHOD] ?? '';
    }

    public function setMethod(string $method)
    {
        $this->config[static::FIELD__METHOD] = $method;

        return $this;
    }

    protected function getSubjectForExtension(): string
    {
        return static::SUBJECT;
    }
}
