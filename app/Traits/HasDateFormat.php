<?php

namespace App\Traits;

use Carbon\Carbon;

trait HasDateFormat
{
    public function initializeHasDateFormat(): void
    {
        //
    }

    public function getCreatedAtAttribute($value)
    {
        return Carbon::parse($value)->diffForHumans();
    }

    public function getUpdatedAtAttribute($value)
    {
        return Carbon::parse($value)->diffForHumans();
    }
}
