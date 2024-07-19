<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Appointment;
use App\Models\User;
use App\Models\Worker;

class AppointmentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Appointment::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        $status = ['pending', 'reserved', 'paid', 'cancelled', 'not presented'];

        return [
            'status' => $this->faker->randomElement($status),
            'date' => $this->faker->date(),
            'start_time' => $this->faker->time(),
            'worker_id' => Worker::factory(),
            'user_id' => User::factory(),
        ];
    }
}
