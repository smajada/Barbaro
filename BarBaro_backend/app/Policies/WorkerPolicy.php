<?php

namespace App\Policies;

use App\Models\Worker;
use App\Models\User;

class WorkerPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(?User $user): bool
    {
        return true;
    }

    /**
     * Determine whether the user can view the model.
     * @param  \App\Models\User|null  $user
     */
    public function view(?User $user, Worker $worker): bool
    {
        return true;
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return Worker::find($user->worker_id)->role === 'admin';
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Worker $worker): bool
    {
        return Worker::find($user->worker_id)->role === 'admin';
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Worker $worker): bool
    {
       return Worker::find($user->worker_id)->role === 'admin';
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Worker $worker)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Worker $worker)
    {
        //
    }

    public function viewAppointments(User $user, Worker $worker)
    {
        return true;
    }
}
