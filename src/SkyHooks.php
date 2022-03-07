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

    public static function get(bool $duplicates = false): array
    {
        return $duplicates ? static::$tags : array_unique(static::$tags);
    }

    public static function reset(): void
    {
        static::$tags = [];
    }

    public static function dump(bool $duplicates = false): void
    {
        $tags = static::get($duplicates);

        function_exists('dump') ? dump($tags) : var_dump($tags);
    }

    public static function stop(bool $duplicates = false): void
    {
        $tags = static::get($duplicates);

        function_exists('dd') ? dd($tags) : exit(var_dump($tags));
    }
}
