<?php

namespace Database\Factories;
use App\Models\Submission;

use Illuminate\Support\Str;
use Laravel\Jetstream\Features;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Submission>
 */
class SubmissionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = Submission::class;



    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'city' => $this->faker->randomElement(['Caloocan City', 'Las Piñas City', 'Makati City', 'Malabon City', 'Mandaluyong City', 'Manila City', 'Marikina City', 'Muntinlupa City', 'Navotas City', 'Parañaque City', 'Pasay City', 'Pasig City', 'Quezon City', 'San Juan City', 'Taguig City', 'Valenzuela City', 'Non-NCR']),
            'yearlevel' => $this->faker->randomElement(['Grade 7', 'Grade 8', 'Grade 9', 'Grade 10']),
            'image' => 'public/portfolios/nQj3sigByW0nClBcywKF3RHog92pjoInfRwJtMGc.png',
            'form137' => $this->faker->dateTimeBetween('january', 'now'),
            'created_at' => $this->faker->dateTimeBetween('january', 'now'),
        ];
    }
}
