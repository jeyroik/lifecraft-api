<?php
namespace lifecraft\components\attributes;

use lifecraft\interfaces\attributes\IHaveUrl;

/**
 * @property array $config
 */
trait THasUrl
{
    public function getUrl(): string
    {
        return $this->config[IHaveUrl::FIELD__URL] ?? '';
    }

    public function setUrl(string $url): IHaveUrl
    {
        $this->config[IHaveUrl::FIELD__URL] = $url;

        return $this;
    }
}
