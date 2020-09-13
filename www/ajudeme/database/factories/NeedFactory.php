<?php

namespace Database\Factories;

use App\Models\Need;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class NeedFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Need::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->words(3, true),
            'summary' => $this->faker->words(10, true),
            'text' => $this->faker->text(),
            'user_id' => 1
        ];
    }
}
