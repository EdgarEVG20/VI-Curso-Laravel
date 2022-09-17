<?php

namespace Database\Factories;

use App\Models\Books;
use Illuminate\Database\Eloquent\Factories\Factory;

class BooksFactory extends Factory
{
    protected $model = Books::class;

    public function definition()
    {
        return [
            'title' => $this->faker->title(),
            'gender' => $this->faker->randomElement(['terror','comedy','love','spy']),
            'description' => $this->faker->paragraph()
        ];
    }
}
