<?php

namespace App\Enums\Traits;

trait ToTranslate
{
    public function translate(): string
    {
        return __('enums.' . str($this->name)->lower()->slug('_'));
    }
}
