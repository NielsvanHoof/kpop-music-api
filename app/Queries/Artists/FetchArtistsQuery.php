<?php

namespace App\Queries\Artists;

use Illuminate\Database\Eloquent\Builder;
use Spatie\QueryBuilder\QueryBuilder;

class FetchArtistsQuery
{
    public function handle(Builder $query): Builder
    {
        return QueryBuilder::for(
            subject: $query,
        )->allowedFilters(
            filters: ['name'],
        )->allowedSorts(
            sorts: ['name'],
        )->allowedIncludes(
            includes: ['musicVideos'],
        )->getEloquentBuilder();
    }
}
