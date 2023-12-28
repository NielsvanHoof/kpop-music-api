<?php

use App\Models\Artist;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('music_videos', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamp('release_date');
            $table->string('youtube_url')->nullable();
            $table->foreignIdFor(Artist::class)->constrained();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('music_videos');
    }
};
