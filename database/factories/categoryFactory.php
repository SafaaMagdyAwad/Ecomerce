<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\category>
 */
class categoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $category=['Bed','Mirror','sofa','table1','Bed1','Mirror1','sofa1','table1'];
        return [
            'category'=>fake()->unique()->randomElement($category),
        ];
    }
}
