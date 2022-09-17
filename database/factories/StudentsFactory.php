<?php

namespace Database\Factories;

use App\Models\Students;
use Illuminate\Database\Eloquent\Factories\Factory;

class StudentsFactory extends Factory
{
    protected $model = Students::class;

    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'age' => $this->faker->numberBetween(15, 20),
            'num' => $this->faker->numberBetween(20110000, 20119999),
            'grade' => $this->faker->randomElement([1,2,3,4]),
            'group' => $this->faker->randomElement(['A','B'])
        ];
    }
}
