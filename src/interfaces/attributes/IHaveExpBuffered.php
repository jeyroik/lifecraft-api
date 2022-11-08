<?php
namespace lifecraft\interfaces\attributes;

interface IHaveExpBuffered
{
    public const FIELD__EXP_BUFFERED = 'exp_buffered';

    public function getExpBuffered(): IAttribute;
    public function setExpBuffered(IAttribute $attribute): IHaveExpBuffered;

    public function getExpBufferedValue(): int;
    public function setExpBufferedValue(int $expBuffered): IHaveExpBuffered;
}
