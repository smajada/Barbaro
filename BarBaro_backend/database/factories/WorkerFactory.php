<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Worker;

class WorkerFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Worker::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'role' => 'worker',
            'hours' => $this->faker->numberBetween(20, 40),
        ];
    }
}
