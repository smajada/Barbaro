<?php

namespace Database\Seeders;

use App\Models\Appointment;
use App\Models\Service;
use Illuminate\Database\Seeder;

class AppointmentServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Obtén todas las citas y servicios
        $appointments = Appointment::all();
        $services = Service::all();

        // Itera sobre cada cita y asocia servicios aleatorios
        $appointments->each(function ($appointment) use ($services) {
            // Selecciona un número aleatorio de servicios para asociar
            $randomServices = $services->random(rand(1, 3));

            // Adjunta los servicios a la cita
            $appointment->services()->attach($randomServices->pluck('id'));
        });
    }
}
