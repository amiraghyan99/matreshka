<?php

namespace App\Traits;

trait HasImages
{
    public static function bootHasImages()
    {
       (new static)->append('url');
    }
    public function getUrlAttribute()
    {
        return ($this->image()->first('path')->path);
    }


}