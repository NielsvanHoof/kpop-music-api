<?php

namespace App\Data\Artists;

use Spatie\LaravelData\Data;

class StoreArtistData extends Data
{
    public function __construct(
        public string $name,
        public string $debuted_at,
        public bool   $is_active = true,
    )
    {
    }
}
