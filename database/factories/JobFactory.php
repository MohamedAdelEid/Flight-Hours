<?php

use App\Models\Job;
use Illuminate\Database\Eloquent\Factories\Factory;

class JobFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Job::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->jobTitle,
            'description' => $this->faker->text,
            'location' => $this->faker->city,
            'salary' => $this->faker->numberBetween(30000, 100000),
            'company' => $this->faker->company,
            'posted_at' => $this->faker->dateTimeThisYear,
        ];
    }
}
