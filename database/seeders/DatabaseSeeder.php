<?php

namespace Database\Seeders;

use App\Models\EpaperworkPaperwork;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

use function PHPSTORM_META\type;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        // Paperwork -> status
        // Epaperwork::where('status', 'Pending');

        // Paperwork <=> Status
        // Status::all();
        // Status::where('name', 'Pending')->paperworks;
        // $status->name;
        // $status->translation;
        // $status->description;

        EpaperworkPaperwork::factory(6)
            ->state(new Sequence(
                ['status' => 'Pending'],
                ['status' => 'Reviewed'],
                ['status' => 'Accepted'],
                ['status' => 'Accepted'],
                ['status' => 'To Review'],
                ['status' => 'Rejected']
            ))
            ->create();
        User::create(['email' => 'admin@example.com', 'name' => 'admin', 'password' => Hash::make('password'), 'type'=> 'admin']);
        User::create(['email' => 'ptj@example.com', 'name' => 'ptj', 'password' => Hash::make('password'), 'type'=> 'ptj']);
        User::create(['email' => 'kerani@example.com', 'name' => 'kerani', 'password' => Hash::make('password'), 'type'=> 'kerani']);
        User::create(['email' => 'pegawai@example.com', 'name' => 'pegawai', 'password' => Hash::make('password'), 'type'=> 'pegawai']);

    }
}
