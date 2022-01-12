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
        $role_types['super_admin']              = RoleType::create(['name' => 'admin', 'type' => 'super']);
        $role_types['creator_ptj']              = RoleType::create(['name' => 'creator', 'type' => 'ptj']);
        $role_types['supporter_officer_ptj']    = RoleType::create(['name' => 'supporter', 'type' => 'officer_ptj']);
        $role_types['validator_clerk_staff']    = RoleType::create(['name' => 'validator', 'type' => 'clerk_staff']);
        $role_types['acceptor_officer']         = RoleType::create(['name' => 'acceptor', 'type' => 'officer']);

        // TODO: Seed Supporter Table, supporter requirement?

        User::factory()->for($role_types['super_admin'])->create(
            ['email' => 'super@admin.com', 'name' => 'super admin', 'password' => '$2y$10$ikf043vwIiF8rpGuXmLmPuxig6tKnQYauXbZNM7Zwvms/ef49YD3K'] // password
        );

        User::factory()->for($role_types['creator_ptj'])->create(
            ['email' => 'creator@ptj.com',   'name' => 'creator ptj', 'password' => '$2y$10$ikf043vwIiF8rpGuXmLmPuxig6tKnQYauXbZNM7Zwvms/ef49YD3K']
        );

        User::factory()->for($role_types['supporter_officer_ptj'])->create(
            ['email' => 'supporter@officerptj.com',   'name' => 'supporter officer ptj', 'password' => '$2y$10$ikf043vwIiF8rpGuXmLmPuxig6tKnQYauXbZNM7Zwvms/ef49YD3K']
        );

        User::factory()->for($role_types['validator_clerk_staff'])->create(
            ['email' => 'validator@clerkstaff.com',   'name' => 'validator clerk staff', 'password' => '$2y$10$ikf043vwIiF8rpGuXmLmPuxig6tKnQYauXbZNM7Zwvms/ef49YD3K']
        );

        User::factory()->for($role_types['acceptor_officer'])->create(
            ['email' => 'acceptor@pegawai.com',   'name' => 'acceptor pegawai', 'password' => '$2y$10$ikf043vwIiF8rpGuXmLmPuxig6tKnQYauXbZNM7Zwvms/ef49YD3K']
        );
    }
}
