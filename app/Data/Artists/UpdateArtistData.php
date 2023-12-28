<?php

namespace App\Data\Artists;

use Spatie\LaravelData\Data;
use Spatie\LaravelData\Optional;

class UpdateArtistData extends Data
{
    public function __construct(
        public string|Optional $name,
        public string|Optional $debuted_at,
        public bool|Optional   $is_active,
    )
    {
    }
}
