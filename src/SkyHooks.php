<?php

namespace WebTheory\WpTest;

use Closure;

class SkyHooks
{
    protected static $tags = [];

    public static function init(bool $dumpOnExit = false): void
    {
        add_action('all', Closure::fromCallable([static::class, 'collect']));

        if ($dumpOnExit) {
            add_action('shutdown', [static::class, 'dump']);
        }
    }

    protected static function collect(string $tag)
    {
        static::$tags[] = $tag;
    }

    public static function get(): array
    {
        return static::$tags;
    }

    public static function dump(): void
    {
        function_exists('dump') ? dump(static::$tags) : var_dump(static::$tags);
    }

    public static function dd(): void
    {
        function_exists('dd') ? dd(static::$tags) : exit(var_dump(static::$tags));
    }
}
