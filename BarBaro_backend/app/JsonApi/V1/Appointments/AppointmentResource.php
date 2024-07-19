<?php

namespace App\JsonApi\V1\Appointments;

use App\Models\Appointment;
use Illuminate\Http\Request;
use LaravelJsonApi\Core\Resources\JsonApiResource;

/**
 * @property Appointment $resource
 */
class AppointmentResource extends JsonApiResource
{

    /**
     * Get the resource's attributes.
     *
     * @param Request|null $request
     * @return iterable
     */
    public function attributes($request): iterable
    {
        return [
            'status' => $this->status,
            'startTime' => $this->start_time,
            'date' => $this->date,
            'createdAt' => $this->resource->created_at,
            'updatedAt' => $this->resource->updated_at,
        ];
    }

    /**
     * Get the resource's relationships.
     *
     * @param Request|null $request
     * @return iterable
     */
    public function relationships($request): iterable
    {
        return [
            'worker' => $this->relation('worker')->showDataIfLoaded(),
            'services' => $this->relation('services')->showDataIfLoaded(),
            'user' => $this->relation('user')->showDataIfLoaded(),
        ];
    }

}
