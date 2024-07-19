<?php

namespace Database\Seeders;

use App\Models\Worker;
use Illuminate\Database\Seeder;

class WorkerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //WARNING: Esto da error cuando haces un seeder,
        // es mejor si cambias un worker a admin en la base de datos

//        Worker::create([
//            'id' => 1,
//            'role' => 'admin',
//            'hours' => 40
//        ]);
    }
}
