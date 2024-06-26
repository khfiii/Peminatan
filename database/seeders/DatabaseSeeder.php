<?php

namespace Database\Seeders;

use App\Models\Jawaban;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Peserta;
use Illuminate\Database\Seeder;
use Database\Seeders\JurusanSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        $this->call([
            RoleSeeder::class,
            UserSeeder::class,
            JurusanSeeder::class,

        ]);

        // Peserta::factory(10000)->create();
        // Jawaban::factory(10000)->create();


    }
}
