<?php

namespace App\Traits;

trait HasActive
{
    protected static function bootHasActive()
    {

    }

    public function scopeActives()
    {
        return $this->where('is_active', true);
    }

}