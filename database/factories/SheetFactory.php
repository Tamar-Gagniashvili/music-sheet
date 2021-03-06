<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class SheetFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => User::factory(),
            'category_id' => $this->faker->numberBetween(1, 4),
            'title' => ucwords($this->faker->words(4, true)),
            'description' => $this->faker->paragraph(5),
            'thumbnail'=>'images/sheet.jpg',
        ];
    }
}
