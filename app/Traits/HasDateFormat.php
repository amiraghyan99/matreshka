<?php

namespace App\Traits;

use Carbon\Carbon;

trait HasDateFormat
{
    public function initializeHasDateFormat(): void
    {
        //
    }

    public function getCreatedAtAttribute($value): string
    {
        return Carbon::parse($value)->diffForHumans();
    }

    public function getUpdatedAtAttribute($value): string
    {
        return Carbon::parse($value)->diffForHumans();
    }
}
