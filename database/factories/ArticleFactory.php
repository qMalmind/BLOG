<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => $this->faker->title(),
            'previewText' => $this->faker->realText(50),
            'previewImg' => $this->faker->imageUrl(640, 240),
            'colorTheme' => $this->faker->colorName(),
            'text' => $this->faker->realText(500),
            'footer' => $this->faker->realText(150),
        ];
    }
}
