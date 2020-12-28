<?php

namespace Database\Factories;

use App\Models\Menu;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class MenuFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Menu::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $date_time = $this->faker->date . ' ' . $this->faker->time;
        return [
            'menu_name' => Str::random(20),
            'description' => $this->faker->text(),
            'is_active' => true,
            'price' => $this->faker->randomFloat(2,0,999),
            'picture' => $this->faker->imageUrl($width=200, $height=200),
            'category_id' => $this->faker->randomDigit,
            'created_at' => $date_time,
            'updated_at' => $date_time,

        ];
    }
}
