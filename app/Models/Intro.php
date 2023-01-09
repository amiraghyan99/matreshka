<?php

namespace App\Models;

use App\Traits\HasActive;
use App\Traits\HasDateFormat;
use App\Traits\HasFilters;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Intro extends Model
{
    use HasFactory, HasTranslations, HasActive, HasDateFormat, HasFilters;

    public array $translatable = ['title', 'description'];

    protected $fillable = ['title', 'description'];
}
