<?php

namespace Database\Factories;

use App\Models\Goods;
use Illuminate\Database\Eloquent\Factories\Factory;

class GoodsFactory extends Factory {
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Goods::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $pizza = [
            'Маргарита',
            'Маринара',
            'Четыре сезона',
            'Карбонара',
            'C морепродуктами',
            'Четыре сыра',
            'Крудо'
        ];

        $size = [
            'Маленькая',
            'Средняя',
            'Большая',
            'Составная'
        ];

        $imgs = [
          'https://cdn.dodopizza.net/static/Img/Products/2c71cd53e50746279f7aa0f59c7ec50f_292x292.jpeg',
          'https://cdn.dodopizza.net/static/Img/Products/7a0fac09c2264f8e8928f205c7acb5cf_292x292.jpeg'
        ];

        return [
            'name' => $this->faker->randomElement($pizza),
            'description' => $this->faker->randomElement($pizza),
            'price' => 490,
            'img' => $this->faker->randomElement($imgs),
            'size' => $this->faker->randomElement($size)
        ];
    }
}
