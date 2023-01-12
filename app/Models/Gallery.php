<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Spatie\Image\Exceptions\InvalidManipulation;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Gallery extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;

    protected $guarded = [];

    protected $appends = ['img_tag'];

    const POSITION_GAP = 60000;

    const POSITION_MIN = 0.00002;

    public static function booted()
    {

        static::creating(function ($model) {
            $model->position = self::query()->orderByDesc('position')->first()?->position + self::POSITION_GAP;
        });


        static::saved(function ($model) {
            if ($model->position < self::POSITION_MIN) {
                DB::statement('SET @previousPosition := 0');

                DB::statement(<<<'SQL'
                    UPDATE ?
                    SET position = (@previousPosition := @previousPosition + ? )
                    ORDER BY position
                SQL
                    ,
                    [$model->getTable(), self::POSITION_GAP]
                );
            }
        });
        static::addGlobalScope(function (Builder $query) {
            $query->orderBy('position');
        });
    }

    public function ImgTag(): Attribute
    {
        return Attribute::make(
            get: fn() => $this->getFirstMedia('gallery')->toHtml()
        );
    }

    /**
     * @throws InvalidManipulation
     */
    public function registerMediaConversions(Media $media = null): void
    {
        $this->addMediaConversion('optimized')
            ->withResponsiveImages()
            ->width(1200)->height(1200)
            ->performOnCollections('gallery');
    }
}
