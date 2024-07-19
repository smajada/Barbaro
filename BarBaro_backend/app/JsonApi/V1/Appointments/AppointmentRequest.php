<?php

namespace App\JsonApi\V1\Appointments;

use Illuminate\Validation\Rule;
use LaravelJsonApi\Laravel\Http\Requests\ResourceRequest;
use LaravelJsonApi\Validation\Rule as JsonApiRule;

class AppointmentRequest extends ResourceRequest
{

    /**
     * Get the validation rules for the resource.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'status' => ['required', Rule::in(['pending', 'reserved', 'paid', 'cancelled', 'not presented'])],
            'date' => ['required'],
            'startTime' => ['required'],
            'worker' => JsonApiRule::toOne(),
            'services' => JsonApiRule::toMany(),
            'user' => JsonApiRule::toOne(),
        ];
    }

}
