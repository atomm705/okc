<?php

namespace App\Casts;

use Illuminate\Contracts\Database\Eloquent\CastsAttributes;
use Illuminate\Database\Eloquent\Model;
use InvalidArgumentException;

class UnescapedJsonCast implements CastsAttributes
{
    /**
     * Cast the given value.
     *
     * @param  Model  $model
     * @param  string  $key
     * @param  mixed  $value
     * @param  array  $attributes
     * @return array
     */
    public function get($model, string $key, mixed $value, array $attributes): array
    {
        if (is_null($value)) {
            return [];
        }

        return json_decode($value, true) ?? [];
    }

    /**
     * Prepare the given value for storage.
     *
     * @param  Model  $model
     * @param  string  $key
     * @param  array  $value
     * @param  array  $attributes
     * @return string
     */
    public function set($model, string $key, mixed $value, array $attributes): string
    {
        if (is_null($value)) {
            return '[]';
        }

        if (! is_array($value)) {
            throw new InvalidArgumentException('The '.$key.' attribute must be an array.');
        }

        return json_encode($value, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
    }
}
