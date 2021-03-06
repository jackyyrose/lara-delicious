<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Review;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ReviewFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Review::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $date_time = $this->faker->date . ' ' . $this->faker->time;
        return [
            //
            'content' => $this->faker->text(),
            'created_at' => $date_time,
            'updated_at' => $date_time

        ];
    }
}
