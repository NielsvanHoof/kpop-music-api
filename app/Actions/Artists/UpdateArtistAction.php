<?php

namespace App\Actions\Artists;

use App\Data\Artists\UpdateArtistData;
use App\Models\Artist;

class UpdateArtistAction
{
    public function execute(Artist $artist, UpdateArtistData $data): bool
    {
        return $artist->update($data->toArray());
    }
}
