<?php
namespace lifecraft\components\repositories;

use extas\components\exceptions\AlreadyExist;
use extas\interfaces\IItem;
use extas\interfaces\repositories\IRepository;

class IsExist
{
    public static function check(IRepository $repo, IItem $item, array $fields): void
    {
        $where = [];

        foreach ($fields as $name) {
            $where[$name] = $item[$name] ?? '';
        }

        $exists = $repo->one($where);

        if ($exists) {
            throw new AlreadyExist($repo->getName());
        }
    }
}
