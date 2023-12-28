<?php

namespace Database\Seeders;

use App\Models\Artist;
use Illuminate\Database\Seeder;

class ArtistSeeder extends Seeder
{
    public function run(): void
    {
        Artist::factory()->hasMusicVideos(1, [
            'name' => 'How You Like That',
            'release_date' => '2020-06-26',
            'youtube_url' => 'https://www.youtube.com/watch?v=ioNng23DkIM',
        ])->create([
            'name' => 'BLACKPINK',
            'debuted_at' => '2016-08-08',
            'is_active' => true,
        ]);

        Artist::factory()->hasMusicVideos(1, [
            'name' => 'HWAA',
            'release_date' => '2021-01-11',
            'youtube_url' => 'https://www.youtube.com/watch?v=z3szNvgQxHo',
        ])->create([
            'name' => '(G)I-DLE',
            'debuted_at' => '2018-05-02',
            'is_active' => true,
        ]);

        Artist::factory()->hasMusicVideos(1, [
            'name' => 'LIKEY',
            'release_date' => '2017-10-30',
            'youtube_url' => 'https://www.youtube.com/watch?v=V2hlQkVJZhE',
        ])->create([
            'name' => 'TWICE',
            'debuted_at' => '2015-10-20',
            'is_active' => true,
        ]);
    }
}
