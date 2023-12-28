<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class MusicVideo extends Model
{
    use SoftDeletes, HasFactory;

    protected $fillable = [
        'name',
        'release_date',
        'youtube_url',
    ];

    protected $casts = [
        'release_date' => 'datetime',
    ];

    public function artist(): BelongsTo
    {
        return $this->belongsTo(Artist::class);
    }
}
