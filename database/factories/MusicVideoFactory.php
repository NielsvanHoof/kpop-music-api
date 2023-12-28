<?php

namespace Database\Factories;

use App\Models\Artist;
use App\Models\MusicVideo;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class MusicVideoFactory extends Factory
{
    protected $model = MusicVideo::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'release_date' => Carbon::now(),
            'youtube_url' => $this->faker->url(),
            'artist_id' => Artist::factory(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
