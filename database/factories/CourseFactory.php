<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Course>
 */
class CourseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'uuid' => \Illuminate\Support\Str::uuid(),
            'title' => $this->faker->sentence,
            'sub_title' => $this->faker->sentence,
            'image' => 'course.jpeg',
            'description' => $this->faker->paragraph,
            'category_id' => 1, // Relasi dengan kategori
            'instructor_id' => 1, // Relasi dengan instruktur
        ];
    }
}
