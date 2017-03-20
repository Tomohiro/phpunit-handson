<?php
declare(strict_types=1);

namespace PHPUnit\Handson;

class Hello
{
    public function sayTo($targetName = null)
    {
        if (is_null($targetName)) {
            throw new \InvalidArgumentException("\$targetName must be required");
        }

        return "Hello, ${targetName}";
    }
}
