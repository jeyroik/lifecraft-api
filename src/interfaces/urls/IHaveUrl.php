<?php
namespace lifecraft\interfaces\urls;

interface IHaveUrl
{
    public const FIELD__URL = 'url';

    public function getUrl(): string;
    public function setUrl(string $url): IHaveUrl;
}
