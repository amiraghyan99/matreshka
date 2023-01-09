<?php

namespace App\Traits;

use App\Models\Image;
use Illuminate\Database\Eloquent\Relations\MorphOne;

trait HasImages
{
    public function initializeHasImages(): void
    {
        $this->setAppends(['url']);
        $this->with[] = ['image:image_id,path'];
    }

    public function getUrlAttribute(): string
    {
        return url('storage', $this->image?->path);
    }

    public function image(): MorphOne
    {
        return $this->morphOne(Image::class, 'image');
    }
}
