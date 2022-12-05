<?php

namespace App\Traits;

trait HasImages
{

    public function initializeHasImages(): void
    {
        $this->setAppends(['url']);
    }

    public function getUrlAttribute(): string
    {
        return url('storage', $this->image?->path);
    }
}
