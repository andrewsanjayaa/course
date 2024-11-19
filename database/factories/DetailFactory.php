<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Detail>
 */
class DetailFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name,
            'description' => $this->faker->text,
            'url' => 'https://www.youtube.com/watch?v=' . $this->faker->lexify('???????'),
            'category_id' => \App\Models\Category::inRandomOrder()->first()->id,
            'slug' => Str::slug($this->faker->name),
        ];
    }
}
