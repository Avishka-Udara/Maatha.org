<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\Response;

class UserPolicy
{
    use HandlesAuthorization;
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, User $model): bool
    {
        //
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, User $model): bool
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, User $model): bool
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, User $model): bool
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, User $model): bool
    {
        //
    }
        /**
     * Determine whether the user can manage users.
     *
     * @param  \App\Models\User  $user
     * @return bool
     */
    public function manageUsers(User $user): bool
    {
        return $user->role === 1; // Assuming role 1 represents admin
    }
        /**
     * Determine whether the user can manage managers.
     *
     * @param  \App\Models\User  $user
     * @return bool
     */
    public function manageManagers(User $user): bool
    {
        return in_array($user->role, [1, 2]); // Assuming roles 1 and 2 represent admin and manager, respectively
    }
}
