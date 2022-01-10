<?php

namespace Database\Seeders;

use App\Models\Paperwork;
use App\Models\RoleType;
use App\Models\Status;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $statuses = [];
        $statuses['pending']  = Status::create(['name' => 'Pending',      'className' => 'badge-ghost']);
        $statuses['reviewed'] = Status::create(['name' => 'Reviewed',     'className' => 'badge-primary']);
        $statuses['accepted'] = Status::create(['name' => 'Accepted',     'className' => 'badge-success']);
        $statuses['toreview'] = Status::create(['name' => 'To Review',    'className' => 'badge-info']);
        $statuses['rejected'] = Status::create(['name' => 'Rejected',     'className' => 'badge-error']);

        Paperwork::factory()->for($statuses['pending'])->create();
        Paperwork::factory()->for($statuses['reviewed'])->create();
        Paperwork::factory()->for($statuses['accepted'])->create();
        Paperwork::factory()->for($statuses['toreview'])->create();
        Paperwork::factory()->for($statuses['rejected'])->create();

        $role_types = [];
        $role_types['super_admin']      = RoleType::create(['name' => 'admin', 'type' => 'super']);
        $role_types['creator_ptj']      = RoleType::create(['name' => 'creator', 'type' => 'ptj']);
        $role_types['supporter_ptj']    = RoleType::create(['name' => 'supporter', 'type' => 'ptj']);
        $role_types['validator_ptj']    = RoleType::create(['name' => 'validator', 'type' => 'ptj']);
        $role_types['acceptor_ptj']     = RoleType::create(['name' => 'acceptor', 'type' => 'ptj']);

        // TODO: Seed Supporter Table, supporter requirement?

        User::factory()->for($role_types['super_admin'])->create(
            ['email' => 'super@admin.com', 'name' => 'super admin', 'password' => Hash::make('password')]
        );

        User::factory()->for($role_types['creator_ptj'])->create(
            ['email' => 'creator@ptj.com',   'name' => 'creator ptj', 'password' => Hash::make('password')]
        );

        User::factory()->for($role_types['supporter_ptj'])->create(
            ['email' => 'supporter@ptj.com',   'name' => 'supporter ptj', 'password' => Hash::make('password')]
        );

        User::factory()->for($role_types['validator_ptj'])->create(
            ['email' => 'validator@ptj.com',   'name' => 'validator ptj', 'password' => Hash::make('password')]
        );

        User::factory()->for($role_types['acceptor_ptj'])->create(
            ['email' => 'acceptor@ptj.com',   'name' => 'acceptor ptj', 'password' => Hash::make('password')]
        );

        // User::create(['email' => 'ptj@example.com',     'name' => 'ptj', 'password' => Hash::make('password')]);
        // User::create(['email' => 'kerani@example.com',  'name' => 'kerani', 'password' => Hash::make('password')]);
        // User::create(['email' => 'pegawai@example.com', 'name' => 'pegawai', 'password' => Hash::make('password')]);

    }
}
