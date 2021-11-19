<?php

namespace Database\Factories;

use App\Models\Gender;
use App\Models\Staff;
use Illuminate\Database\Eloquent\Factories\Factory;

class StaffFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Staff::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        return [
            'name' =>  $this->faker->firstName,
            'surname' => $this->faker->lastName,
            'patronymic' => ucwords($this->faker->word),
            'salary' => $this->faker->numberBetween(1000, 10000),
            'gender_id' => Gender::all()->random()->id
        ];
    }
}
