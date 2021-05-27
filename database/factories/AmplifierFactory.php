<?php

namespace Database\Factories;

use App\Models\Amplifier;
use App\Models\Manufacturer;
use Illuminate\Database\Eloquent\Factories\Factory;

class AmplifierFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Amplifier::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->words(4, true),
            'manufacturer_id' => Manufacturer::factory(),
            'manufacture_start' => $this->faker->numberBetween(1950, 2020),
            'manufacture_end' => $this->faker->numberBetween(1950, 2020),
            'circuit' => $this->faker->word(),
            'wattage' => $this->faker->numberBetween(5, 100),
            'master_volume' => $this->faker->boolean(75),
            'negative_feedback' => $this->faker->boolean(90),
            'preamp_tubes' => $this->faker->word(),
            'power_amp_tubes' => $this->faker->word(),
            'tone_stack_location' => $this->faker->word(),
            'index_card_text' => $this->faker->sentence(10)
        ];
    }
}
