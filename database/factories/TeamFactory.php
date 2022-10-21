<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Team>
 */
class TeamFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->word,
            'user_id' => 1,
            'category' => $this->faker->text(30),
            'description' => $this->faker->text(200),
            'team_image' => "public\images\team_placeholder.jpg",
            'sponsor' => $this->faker->name
        ];
    }
}
