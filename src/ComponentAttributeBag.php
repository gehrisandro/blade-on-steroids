<?php

declare(strict_types=1);

namespace BladeOnSteroids;

use Illuminate\Support\Str;

class ComponentAttributeBag extends \Illuminate\View\ComponentAttributeBag implements \Stringable
{
    /**
     * @var callable
     */
    protected static $classMergeCallback;

    public static function handleClassMerge(callable $callback): void
    {
        static::$classMergeCallback = $callback;
    }

    public function __toString(): string
    {
        /** @var string $delimiter */
        $delimiter = config('blade-on-steroids.prefix_delimiter', '::');

        if ($delimiter === '') {
            return parent::__toString();
        }

        return (new \Illuminate\View\ComponentAttributeBag(array_filter($this->attributes, fn (string $key): bool => !Str::contains($key, $delimiter), ARRAY_FILTER_USE_KEY)))->__toString();
    }

    /**
     * Merge additional attributes / values into the attribute bag.
     *
     * @param  array<string, string>  $attributeDefaults
     * @param  bool  $escape
     * @return static
     */
    public function merge(array $attributeDefaults = [], $escape = true)
    {
        $bag = parent::merge($attributeDefaults, $escape);

        if (isset(static::$classMergeCallback) && $bag->has('class')) {
            $bag->attributes['class'] = call_user_func(static::$classMergeCallback, $bag->attributes['class']);
        }

        return $bag;
    }
}
