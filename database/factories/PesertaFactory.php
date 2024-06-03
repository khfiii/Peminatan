<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Peserta>
 */
class PesertaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama_peserta' => fake()->name(),
            'tanggal_lahir' => fake()->dateTime(),
            'nis' => fake()->numberBetween(1, 10),
            'nomor_telepon' => fake()->phoneNumber(),
            'email' => fake()->email(),
            'nisn' => fake()->numberBetween(1, 10),
            'completed_test' => true,
            'sekolah_asal' => fake()->sentence(),
            'tahun_lulus' => fake()->dateTime()
        ];
    }
}
