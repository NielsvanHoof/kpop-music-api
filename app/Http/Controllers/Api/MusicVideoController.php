<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\MusicVideoCollection;
use App\Http\Resources\MusicVideoResource;
use App\Models\MusicVideo;
use Illuminate\Http\Request;
use Spatie\QueryBuilder\QueryBuilder;

class MusicVideoController extends Controller
{
    public function __construct()
    {
//        $this->authorizeResource(MusicVideo::class, 'musicVideo');
    }

    public function index()
    {
        $musicVideos = QueryBuilder::for(MusicVideo::class)
            ->allowedFilters(['title', 'year'])
            ->allowedSorts(['title', 'year'])
            ->allowedIncludes(['artist'])
            ->paginate();

        return MusicVideoCollection::make($musicVideos);
    }

    public function store(Request $request)
    {
    }

    public function show(MusicVideo $musicVideo)
    {
        return MusicVideoResource::make($musicVideo);
    }

    public function update(Request $request, MusicVideo $musicVideo)
    {
    }

    public function destroy(MusicVideo $musicVideo)
    {
        $musicVideo->delete();

        return response()->noContent();
    }
}
