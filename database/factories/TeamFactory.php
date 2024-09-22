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
    public function definition(): array
    {
        $image=['bed1.jpg','bed2.jpg','bed3.jpg','bed4.jpg','bed5.jpg','mirror1.jpg','mirror2.jpg','mirror3.jpg','mirror4.jpg','mirror5.jpg','sofa1.jpg','sofa2.jpg','sofa3.jpg','sofa4.jpg','sofa5.jpg','table1.jpg','table2.jpg','table3.jpg','table4.jpg','table5.jpg'];
        return [
            'name'=>fake()->name(),
            'job'=>fake()->jobTitle(),
            'image' => fake()->randomElement($image),
            'isPublished'=>fake()->boolean(),
        ];
    }
}
