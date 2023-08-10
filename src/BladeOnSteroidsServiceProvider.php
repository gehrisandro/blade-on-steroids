<?php

declare(strict_types=1);

namespace BladeOnSteroids;

use Illuminate\Support\ServiceProvider as BaseServiceProvider;
use Illuminate\View\ComponentAttributeBag;
use TailwindMerge\TailwindMerge;

class BladeOnSteroidsServiceProvider extends BaseServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        ComponentAttributeBag::macro('for', function (string $prefix): \BladeOnSteroids\ComponentAttributeBag {
            /** @var ComponentAttributeBag $this */
            $attributes = $this->whereStartsWith($prefix . config('blade-on-steroids.prefix_delimiter', '::'));

            $newAttributes = [];
            foreach ($attributes as $key => $value) {
                $newAttributes[substr($key, strlen($prefix) + 2)] = $value;
            }

            return new \BladeOnSteroids\ComponentAttributeBag($newAttributes);
        });

        ComponentAttributeBag::macro('onSteroids', function (): \BladeOnSteroids\ComponentAttributeBag {
            /** @var ComponentAttributeBag $this */
            return new \BladeOnSteroids\ComponentAttributeBag($this->getAttributes());
        });

        \BladeOnSteroids\ComponentAttributeBag::handleClassMerge(function (string $classes): string {
            return resolve(TailwindMerge::class)->merge($classes);
        });
    }
}
