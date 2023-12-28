<?php

namespace App\Actions\Artists;

use App\Data\Artists\StoreArtistData;
use App\Models\Artist;
use Carbon\Carbon;

class StoreArtistAction
{
    public function execute(StoreArtistData $data): Artist
    {
        return Artist::create([
            'name' => $data->name,
            'debuted_at' => Carbon::parse($data->debuted_at),
            'is_active' => $data->is_active,
        ]);
    }
}
