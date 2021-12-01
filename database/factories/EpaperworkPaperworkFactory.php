<?php

namespace Database\Factories;

use App\Models\EpaperworkPaperwork;
use Illuminate\Database\Eloquent\Factories\Factory;

class EpaperworkPaperworkFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = EpaperworkPaperwork::class;

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
            'budget_moneybank' => 'abc',
            'budget_grant' => 'abc',
            'budget_notes' => 'abc',
            'status' => 'Pending',
            'officers' => "[]",
            'budgets' => "[]",
        ];
    }
}
