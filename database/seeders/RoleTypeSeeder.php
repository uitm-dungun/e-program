<?php

namespace Database\Seeders;

use App\Models\RoleType;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class RoleTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $role_types = [];
        $role_types['super_admin']      = RoleType::create(['name' => 'admin', 'type' => 'super']);
        $role_types['creator_ptj']      = RoleType::create(['name' => 'creator', 'type' => 'ptj']);
        $role_types['supporter_ptj']    = RoleType::create(['name' => 'supporter', 'type' => 'ptj']);
        $role_types['validator_ptj']    = RoleType::create(['name' => 'validator', 'type' => 'ptj']);
        $role_types['acceptor_ptj']     = RoleType::create(['name' => 'acceptor', 'type' => 'ptj']);

        // TODO: Seed Supporter Table, supporter requirement?

        User::factory()->for($role_types['super_admin'])->create(
            ['email' => 'super@admin.com', 'name' => 'super admin', 'password' => '$2y$10$ikf043vwIiF8rpGuXmLmPuxig6tKnQYauXbZNM7Zwvms/ef49YD3K']
        );

        User::factory()->for($role_types['creator_ptj'])->create(
            ['email' => 'creator@ptj.com',   'name' => 'creator ptj', 'password' => '$2y$10$ikf043vwIiF8rpGuXmLmPuxig6tKnQYauXbZNM7Zwvms/ef49YD3K']
        );

        User::factory()->for($role_types['supporter_ptj'])->create(
            ['email' => 'supporter@ptj.com',   'name' => 'supporter ptj', 'password' => '$2y$10$ikf043vwIiF8rpGuXmLmPuxig6tKnQYauXbZNM7Zwvms/ef49YD3K']
        );

        User::factory()->for($role_types['validator_ptj'])->create(
            ['email' => 'validator@ptj.com',   'name' => 'validator ptj', 'password' => '$2y$10$ikf043vwIiF8rpGuXmLmPuxig6tKnQYauXbZNM7Zwvms/ef49YD3K']
        );

        User::factory()->for($role_types['acceptor_ptj'])->create(
            ['email' => 'acceptor@ptj.com',   'name' => 'acceptor ptj', 'password' => '$2y$10$ikf043vwIiF8rpGuXmLmPuxig6tKnQYauXbZNM7Zwvms/ef49YD3K']
        );
    }
}
