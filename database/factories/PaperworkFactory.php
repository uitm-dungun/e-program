<?php

namespace Database\Factories;

use App\Models\Paperwork;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

class PaperworkFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Paperwork::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => "{$this->faker->catchPhrase} {$this->faker->catchPhrase} {$this->faker->catchPhrase} {$this->faker->catchPhrase}",
            'venue' => 'abc',
            'total_participants' => 2,
            'target_participants' => 2,
            'objective' => $this->faker->realText(),

            'begin_date' => new Carbon('2021-01-01'),
            'begin_time' => '12:00:00',
            'end_date' => new Carbon('2021-01-01'),
            'end_time' => '12:00:00',

            'budget_moneybank' => 'abc',
            'budget_grant' => 'abc',
            'budget_notes' => 'abc',

            'officers' => [
                $this->faker->name(),
                $this->faker->name(),
                $this->faker->name(),
            ],
            'budgets' => [
                [
                    'detail' => $this->faker->catchPhrase(),
                    'price_per_unit' => $this->faker->numberBetween(1,200),
                    'quantity' => $this->faker->numberBetween(1,200),
                ],
                [
                    'detail' => $this->faker->catchPhrase(),
                    'price_per_unit' => $this->faker->numberBetween(1,200),
                    'quantity' => $this->faker->numberBetween(1,200),
                ],
                [
                    'detail' => $this->faker->catchPhrase(),
                    'price_per_unit' => $this->faker->numberBetween(1,200),
                    'quantity' => $this->faker->numberBetween(1,200),
                ],
            ],

            'creator_id' => User::ofRole('creator')->inRandomOrder()->first()->id,
        ];
    }
}
