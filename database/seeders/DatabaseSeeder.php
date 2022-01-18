<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->create([
            'email' => 'admin@mail.com',
            'password' => '$2y$10$TETT86.6lzJRZJQZ1yWOS.DJxBNci1ntk0Z1d378sOIdG7gp3zz4u',
            'role_type_id' => 1,
        ]);

        $this->call([
            UserSeeder::class,
            PaperworkSeeder::class,
        ]);
    }
}
