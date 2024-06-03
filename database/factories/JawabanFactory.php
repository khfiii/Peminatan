<?php

namespace Database\Factories;

use App\Models\Peserta;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Jawaban>
 */
class JawabanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'peserta_id' => Peserta::factory(),
            'soal_id' => fake()->numberBetween(1, 5),
            'status_jawaban' => true,
            'nilai_peserta' => 100,
        ];
    }
}
