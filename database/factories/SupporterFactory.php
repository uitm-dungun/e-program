<?php

namespace Database\Factories;

use App\Models\Supporter;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class SupporterFactory extends Factory
{
    protected $model = Supporter::class;

    public function definition()
    {
        return [
            'user_id' => User::inRandomOrder()->first()->id
        ];
    }
}
