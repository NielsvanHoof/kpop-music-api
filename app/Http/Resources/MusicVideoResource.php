<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/** @mixin \App\Models\MusicVideo */
class MusicVideoResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'release_date' => $this->release_date,
            'youtube_url' => $this->youtube_url,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,

            'artist_id' => $this->artist_id,

            'artist' => ArtistResource::make($this->whenLoaded('artist')),
        ];
    }
}
