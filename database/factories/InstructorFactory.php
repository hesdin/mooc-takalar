<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Faker\Generator as Faker;
use App\Models\Instructor;
use Illuminate\Support\Facades\Hash;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Instructor>
 */
class InstructorFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Instructor::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */

    public function definition()
    {
        return [
            'uuid' => Str::uuid(),
            'name' => $this->faker->name,
            'username' => $this->faker->userName,
            'password' => Hash::make('password'),
            'image' => 'user.jpg',
            'bio' => $this->faker->paragraph,
            'expertise' => $this->faker->word,
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
