<?php

namespace App\Policies;

use App\Models\Artist;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ArtistPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user): bool
    {
        return true;
    }

    public function view(User $user, Artist $artist): bool
    {
        return true;
    }

    public function create(User $user): bool
    {
        return true;
    }

    public function update(User $user, Artist $artist): bool
    {
        return true;
    }

    public function delete(User $user, Artist $artist): bool
    {
        return true;
    }

    public function restore(User $user, Artist $artist): bool
    {
        return true;
    }

    public function forceDelete(User $user, Artist $artist): bool
    {
        return true;
    }
}
