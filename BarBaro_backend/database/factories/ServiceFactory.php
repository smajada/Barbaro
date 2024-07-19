<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Service;

class ServiceFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Service::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        $services = [
            'Haircut' => 'A classic haircut to freshen up your look.',
            'Beard Trim' => 'Keep your beard looking sharp with a professional trim.',
            'Haircut + Beard Trim' => 'Transform your style with a haircut and beard trim combo.',
            'Classic Shave' => 'Relax as our barbers provide a traditional shave.',
            'Head Shave' => 'Get a clean and refreshing head shave with our expert barbers.',
            'Mustache Grooming' => 'Let us groom your mustache to perfection.',
        ];


        $serviceName = $this->faker->randomElement(array_keys($services));
        $serviceDescription = $services[$serviceName];

        return [
            'name' => $serviceName,
            'description' => $serviceDescription,
            'approximate_duration_min' => $this->faker->numberBetween(0, 120),
            'price' => $this->faker->randomFloat(2, 0, 200),
        ];
    }
}
