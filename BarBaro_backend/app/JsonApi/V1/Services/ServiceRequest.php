<?php

namespace App\JsonApi\V1\Services;

use LaravelJsonApi\Laravel\Http\Requests\ResourceRequest;
use LaravelJsonApi\Validation\Rule as JsonApiRule;

class ServiceRequest extends ResourceRequest
{

    /**
     * Get the validation rules for the resource.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'name' => ['required'],
            'price' => ['required'],
            'appointments' => JsonApiRule::toMany(),
            'approximateDurationMin' => ['integer'],
            'description' => ['required'],
        ];
    }
}
