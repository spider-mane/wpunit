<?php

namespace WebTheory\WpTest\Manager\Traits;

trait WpManagerTrait
{
    use WpGlobalsManagerTrait;
    use DatabaseManagerTrait;
    use HttpManagerTrait;

    public static function resetWordPress()
    {
        static::resetHttpGlobals();
        static::resetWpGlobals();
        static::resetDatabase();
    }
}
