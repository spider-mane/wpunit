<?php

use WebTheory\WpTest\Skyhooks\SkyHooks;

if (!function_exists('sky_hooks')) {
    function sky_hooks(bool $duplicates = false): array
    {
        return SkyHooks::get($duplicates);
    }
}

if (!function_exists('sky_reset')) {
    function sky_reset(): void
    {
        SkyHooks::reset();
    }
}

if (!function_exists('sky_dump')) {
    function sky_dump(bool $duplicates = false): void
    {
        SkyHooks::dump($duplicates);
    }
}

if (!function_exists('sky_stop')) {
    function sky_stop(bool $duplicates = false): void
    {
        SkyHooks::stop($duplicates);
    }
}
