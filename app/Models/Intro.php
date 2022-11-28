<?php

namespace App\Models;

use App\Traits\HasActive;
use App\Traits\HasImages;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphOne;
use Spatie\Translatable\HasTranslations;

/**
 * get all active intros
 * @method static actives()
 */
class Intro extends Model
{
    use HasFactory, HasTranslations, HasActive, HasImages;

    public array $translatable = ['title', 'description'];

    protected $fillable = ['title', 'description'];

    public function image(): MorphOne
    {
        return $this->morphOne(Image::class, 'image');
    }


}
