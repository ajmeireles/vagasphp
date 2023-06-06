<?php

namespace App\Enums\Traits;

trait ToArray
{
    public static function toArray(): array
    {
        return collect(self::cases())->map(fn (self $enum) => $enum->value)->toArray();
    }
}
