<?php

namespace Database\Factories;

use App\Models\courses;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Questions>
 */
class QuestionsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'question_text' => fake()->sentence(),
            'correct_option' => fake()->randomElement(['A', 'B', 'C', 'D']),
            'options' => json_encode(['A' => fake()->word,
                                            'B' => fake()->word,
                                            'C' => fake()->word,
                                            'D' => fake()->word
            ]),
            'course_id' => courses::inRandomOrder()->value('id')
        ];
    }
}
