<?php

declare(strict_types=1);

test('service providers')
    ->expect('BladeOnSteroids\BladeOnSteroidsServiceProvider')
    ->toOnlyUse([
        'Illuminate\Support\ServiceProvider',
        'Illuminate\View\ComponentAttributeBag',
        'TailwindMerge',

        // helpers...
        'config',
        'resolve',
    ]);
