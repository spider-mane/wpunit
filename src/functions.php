<?php

use WebTheory\WpTest\SkyHooks;

function sky_hooks(bool $duplicates = false): array
{
    return SkyHooks::get($duplicates);
}

function sky_reset(): void
{
    SkyHooks::reset();
}

function sky_dump(bool $duplicates = false): void
{
    SkyHooks::dump($duplicates);
}

function sky_stop(bool $duplicates = false): void
{
    SkyHooks::stop($duplicates);
}
