<?php

namespace Database\Factories;

use App\Models\Ong;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class OngFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Ong::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $this->faker->addProvider(new \Faker\Provider\pt_BR\Person($this->faker));
        $this->faker->addProvider(new \Faker\Provider\pt_BR\Company($this->faker));
        $this->faker->addProvider(new \Faker\Provider\pt_BR\Internet($this->faker));
        $this->faker->addProvider(new \Faker\Provider\pt_BR\PhoneNumber($this->faker));

        return [
            'name' => 'ONG - ' . $this->faker->company(),
            'owner' => $this->faker->name(),
            'mail' => $this->faker->email(),
            'phone' => $this->faker->phone(),
            'cellphone' => $this->faker->phone(),
        ];
    }
}
