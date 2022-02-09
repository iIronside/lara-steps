<?php

namespace App\Http\Filters;

use Illuminate\Database\Query\Builder;

class PostFilter extends AbstractFilter
{
    public const TITLE = 'title';
    public const CONTENT = 'content';
    public const CATEGORIES_ID = 'categories_id';

    protected function getCallbacks(): array
    {
       return [
           self::TITLE => [$this, 'title'],
           self::CONTENT => [$this, 'content'],
           self::CATEGORIES_ID => [$this, 'categoriesId'],
       ];
    }

    public function title(Builder $builder, $value)
    {
        $builder->where('title', 'like', "%{$value}%");
    }
    public function content(Builder $builder, $value)
    {
        $builder->where('content', 'like', "%{$value}%");
    }
    public function categoriesId(Builder $builder, $value)
    {
        $builder->where('categories_id',  $value);
    }
}
