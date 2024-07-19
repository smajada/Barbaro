<?php

namespace App\JsonApi\V1\Workers;

use Illuminate\Validation\Rule;
use LaravelJsonApi\Laravel\Http\Requests\ResourceRequest;
use LaravelJsonApi\Validation\Rule as JsonApiRule;

class WorkerRequest extends ResourceRequest
{

    /**
     * Get the validation rules for the resource.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'role' => ['required'],
            'hours' => ['required'],
            'appointments' => JsonApiRule::toMany(),
        ];
    }

}
