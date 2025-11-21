<?php

namespace Database\Factories;

use App\Models\User;
use Carbon\CarbonImmutable;
use Carbon\CarbonInterval;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Shift>
 */
class ShiftFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $start = new CarbonImmutable($this->faker->dateTimeBetween());

        return [
            'user_id' => User::query()->inRandomOrder()->first()->id,
            'start' => $start,
            'end' => $start->add(CarbonInterval::hours($this->faker->numberBetween(0, 8))),
        ];
    }
}
