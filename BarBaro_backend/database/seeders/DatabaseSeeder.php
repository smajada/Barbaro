<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Appointment;
use App\Models\Service;
use App\Models\Worker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Service::factory(3)->create();
        Appointment::factory(3)->create();

        $this->call([
            UserSeeder::class,
            WorkerSeeder::class,
            AppointmentServiceSeeder::class,
        ]);



        // for ($i=0; $i < 5; $i++) {
        //     DB::table('appointment_service')->insert([
        //         'appointment_id' => Appointment::all()->random()->id,
        //         'service_id' => Service::all()->random()->id,
        //     ]);
        // }
    }
}
