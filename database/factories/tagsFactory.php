<?php

namespace Database\Factories;
// mandamos a traer nuestro modelo
use App\Models\tags;
use Illuminate\Database\Eloquent\Factories\Factory;

class tagsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = tags::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'post_id' => rand(1,100),
            'tag_id' => rand(1,100),

        ];
    }
}
