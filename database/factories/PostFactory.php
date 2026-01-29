<?php

namespace Database\Factories;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'titulo' => fake()->words(rand(2,5), true),
            'contenido' => implode("\n\n", fake()->paragraphs(3)),
            'user_id' => User::factory(),  // esto es por si desde el seeder no se agrega el usuario aleatorio, para que no falle le agregamos esto.
        ];
    }
}
