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
            'title' => 'abc',
            'venue' => 'abc',
            'total_participants' => 2,
            'target_participants' => 2,
            'objective' => 'abc',

            'begin_date' => new Carbon('2021-01-01'),
            'begin_time' => '12:00:00',
            'end_date' => new Carbon('2021-01-01'),
            'end_time' => '12:00:00',

            'budget_moneybank' => 'abc',
            'budget_grant' => 'abc',
            'budget_notes' => 'abc',

            'officers' => "[]",
            'budgets' => "[]",

            'creator_id' => User::ofRole('creator')->inRandomOrder()->first()->id,
        ];
    }
}
