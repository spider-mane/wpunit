<?php

use WebTheory\WpTest\SkyHooks;

function sky_hooks(): array
{
    return SkyHooks::get();
}

function sky_dump(): void
{
    SkyHooks::dump();
}

function sky_dd(): void
{
    SkyHooks::dd();
}
