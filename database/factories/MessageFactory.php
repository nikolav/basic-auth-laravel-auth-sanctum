<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Message>
 */
class MessageFactory extends Factory
{
    // related model
    // protected $model = Message::class;
    //
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "title"   => $this->faker->sentence,
            "content" => $this->faker->paragraph,
            "author"  => $this->faker->uuid,
        ];
    }
}
