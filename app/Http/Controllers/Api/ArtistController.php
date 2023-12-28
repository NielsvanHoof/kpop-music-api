<?php

namespace App\Http\Controllers\Api;

use App\Actions\Artists\StoreArtistAction;
use App\Actions\Artists\UpdateArtistAction;
use App\Data\Artists\StoreArtistData;
use App\Data\Artists\UpdateArtistData;
use App\Http\Controllers\Controller;
use App\Http\Resources\ArtistCollection;
use App\Http\Resources\ArtistResource;
use App\Models\Artist;
use App\Queries\Artists\FetchArtistsQuery;

class ArtistController extends Controller
{

    public function __construct()
    {
//        $this->authorizeResource(Artist::class, 'artist');
    }

    public function index(FetchArtistsQuery $query)
    {
        $artists = $query->handle(
            query: Artist::query(),
        )->paginate();

        return ArtistCollection::make($artists);
    }

    public function store(StoreArtistData $data, StoreArtistAction $action)
    {
        $artist = $action->execute($data);

        return ArtistResource::make($artist);
    }

    public function show(Artist $artist)
    {
        $artist->loadCount('musicVideos');

        return ArtistResource::make($artist);
    }

    public function update(Artist $artist, UpdateArtistData $data, UpdateArtistAction $action)
    {
        $action->execute($artist, $data);

        return ArtistResource::make($artist);
    }

    public function destroy(Artist $artist)
    {
        $artist->delete();

        return response()->noContent();
    }
}
