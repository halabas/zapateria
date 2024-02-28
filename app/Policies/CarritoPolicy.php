<?php

namespace App\Policies;

use App\Models\Carrito;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class CarritoPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return !is_null(auth()->user());
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Carrito $carrito): bool
    {
        return !is_null(auth()->user());

    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return !is_null(auth()->user());

    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Carrito $carrito): bool
    {
        return !is_null(auth()->user());

    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Carrito $carrito): bool
    {
        return !is_null(auth()->user());

    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Carrito $carrito): bool
    {
        return !is_null(auth()->user());

    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Carrito $carrito): bool
    {
        return !is_null(auth()->user());

    }

    public function ver(): bool
    {
        return !is_null(auth()->user());

    }
}
