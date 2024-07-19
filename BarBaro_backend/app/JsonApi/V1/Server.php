<?php

namespace App\JsonApi\V1;

use App\JsonApi\V1\Appointments\AppointmentSchema;
use App\JsonApi\V1\Services\ServiceSchema;
use App\JsonApi\V1\Users\UserSchema;
use App\JsonApi\V1\Workers\WorkerSchema;
use App\Models\Appointment;
use Illuminate\Support\Facades\Auth;
use LaravelJsonApi\Core\Server\Server as BaseServer;

class Server extends BaseServer
{

    /**
     * The base URI namespace for this server.
     *
     * @var string
     */
    protected string $baseUri = '/api/v1';

    /**
     * Bootstrap the server when it is handling an HTTP request.
     *
     * @return void
     */
    public function serving(): void
    {
        Auth::shouldUse('sanctum');

        Appointment::creating(function (Appointment $appointment) {
            if ($appointment->user() === null) {
                $appointment->user()->associate(Auth::user());
            }
        });
    }

    /**
     * Get the server's list of schemas.
     *
     * @return array
     */
    protected function allSchemas(): array
    {
        return [
            UserSchema::class,
            AppointmentSchema::class,
            ServiceSchema::class,
            WorkerSchema::class,
        ];
    }
}
