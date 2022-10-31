<?php
namespace lifecraft\interfaces\attributes;

interface IHaveExpBuffered
{
    public const FIELD__EXP_BUFFERED = 'exp_buffered';

    public function getExpBuffered(): IAttribute;
    public function setExpBuffered(IAttribute $attribute): IHaveExpBuffered;

    public function getExpBufferedValue(): int;
    public function setExpBufferedValue(int $expBuffered): IHaveExpBuffered;

    public function incExpBuffered(int $increment): int;
    public function decExpBuffered(int $decrement): int;

    public function canIncExpBuffered(int $increment): bool;
    public function canDecExpBuffered(int $decrement): bool;
}
