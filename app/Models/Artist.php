<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Artist extends Model
{
    use SoftDeletes, HasFactory;

    protected $fillable = [
        'name',
        'debuted_at',
        'is_active',
    ];

    protected $casts = [
        'debuted_at' => 'datetime',
    ];

    public function musicVideos(): HasMany
    {
        return $this->hasMany(MusicVideo::class, 'artist_id');
    }
}
