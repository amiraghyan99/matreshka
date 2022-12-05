<?php

namespace App\Traits;

use Illuminate\Database\Eloquent\Builder;

trait HasFilters
{

    /**
     * Get all searchable fields
     *
     * @return array
     */
    public static function getSearchableFields(): array
    {
        $model = new static;

        return $model->searchable_fields ?? $model->getFillable() ?? [];
    }

    /**
     * Get searchable key
     *
     * @return string
     */
    public static function getSearchableKey(): string
    {
        $model = new static;
        return $model->searchable_key ?? 'search';

    }

    public function scopeSearch(Builder $query, array $data, bool $matchAllFields = false)
    {
        $query->when($data[static::getSearchableKey()] ?? null, function ($query, $keyword) use ($matchAllFields) {
            $query->where(function ($query) use ($keyword, $matchAllFields) {
                foreach (static::getSearchableFields() as $field) {
                    if ($matchAllFields) {
                        $query->where($field, 'LIKE', "%$keyword%");
                    } else {
                        $query->orWhere($field, 'LIKE', "%$keyword%");
                    }
                }
            });
        });

        $query->when((array_key_exists('sortBy', $data) && in_array($data['sortBy'], ['asc', 'desc'])) ?? null, function ($query) use ($data) {
            foreach (static::getOrderedFields() as $orderedField) {
                $query->orderBy($orderedField, $data['sortBy']);
            }
        });
    }

    public function scopeSerachInTranslates(Builder $query, bool $matchAllFields = false)
    {
        $query->when($key = request()->query('search'), function (Builder $query, $keyword) use ($matchAllFields, $key) {
            foreach (static::getSearchableFields() as $field) {
                if ($matchAllFields) {
                    $query->where("${field}->", "%$keyword%");
                } else {
                    $query->orWhereTranslationLike($field, "%$keyword%");
                }
            }
        });

        if (request()->query('sort')) {
            $sort_order = 'ASC';
            $attribute = request()->query('sort');
            if (strncmp($attribute, '-', 1) === 0) {
                $sort_order = 'DESC';
                $attribute = substr($attribute, 1);
            }
            $query->orderBy($attribute, $sort_order);
        } else {
            $query->latest();
        }
    }


}