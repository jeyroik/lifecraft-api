<?php
namespace lifecraft\interfaces\levels\dispatchers;

interface IHaveLevelDispatcher
{
    public const FIELD__LEVEL_DISPATCHER = 'level_dispatcher';

    public function getLevelDispatcher(): string;
    public function buildLevelDispatcher(): ILevelDispatcher;
    public function setLevelDispatcher(string $className): self;
}
