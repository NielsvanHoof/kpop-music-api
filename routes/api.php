<?php

use App\Http\Controllers\Api\ArtistController;
use App\Http\Controllers\Api\MusicVideoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});


Route::as('artists:')->group(
    base_path('routes/resources/artists.php')
);


Route::as('music-videos:')->group(
    base_path('routes/resources/music-videos.php')
);
