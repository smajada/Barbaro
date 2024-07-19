<?php

namespace App\Policies;

use App\Models\Appointment;
use App\Models\User;
use App\Models\Worker;

class AppointmentPolicy
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
    public function view(?User $user, Appointment $appointment): bool
    {
        // return $user;
        return true;
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): User
    {
         return $user;
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Appointment $appointment): bool
    {
         return (Worker::find($user->worker_id)->role === 'admin' || Worker::find($user->worker_id)->role === 'worker');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Appointment $appointment): bool
    {
        return (Worker::find($user->worker_id)->role === 'admin' || Worker::find($user->worker_id)->role === 'worker');
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Appointment $appointment)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Appointment $appointment)
    {
        //

    }

    public function viewServices(User $user, Appointment $appointment){
        return true;
    }
}
