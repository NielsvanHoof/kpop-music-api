<?php

namespace App\Policies;

use App\Models\MusicVideo;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class MusicVideoPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user): bool
    {
        return true;
    }

    public function view(User $user, MusicVideo $musicVideo): bool
    {
        return true;
    }

    public function create(User $user): bool
    {
        return true;
    }

    public function update(User $user, MusicVideo $musicVideo): bool
    {
        return true;
    }

    public function delete(User $user, MusicVideo $musicVideo): bool
    {
        return true;
    }

    public function restore(User $user, MusicVideo $musicVideo): bool
    {
        return true;
    }

    public function forceDelete(User $user, MusicVideo $musicVideo): bool
    {
        return true;
    }
}
