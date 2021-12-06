<?php

namespace Database\Seeders;

use App\Models\EpaperworkPaperwork;
use App\Models\Status;
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
        $statusPending  = Status::create(['name' => 'Pending',      'className' => 'badge-ghost']);
        $statusReviewed = Status::create(['name' => 'Reviewed',     'className' => 'badge-primary']);
        $statusAccepted = Status::create(['name' => 'Accepted',     'className' => 'badge-success']);
        $statusToReview = Status::create(['name' => 'To Review',    'className' => 'badge-info']);
        $statusRejected = Status::create(['name' => 'Rejected',     'className' => 'badge-error']);

        EpaperworkPaperwork::factory()->for($statusPending)->create();
        EpaperworkPaperwork::factory()->for($statusReviewed)->create();
        EpaperworkPaperwork::factory()->for($statusAccepted)->create();
        EpaperworkPaperwork::factory()->for($statusToReview)->create();
        EpaperworkPaperwork::factory()->for($statusRejected)->create();

        // EpaperworkPaperwork::factory(6)
        //     ->state(new Sequence(
        //         ['status' => 'Pending'],
        //         ['status' => 'Reviewed'],
        //         ['status' => 'Accepted'],
        //         ['status' => 'Accepted'],
        //         ['status' => 'To Review'],
        //         ['status' => 'Rejected']
        //     ))
        //     ->create();
        User::create(['email' => 'admin@example.com', 'name' => 'admin', 'password' => Hash::make('password'), 'type'=> 'admin']);
        User::create(['email' => 'ptj@example.com', 'name' => 'ptj', 'password' => Hash::make('password'), 'type'=> 'ptj']);
        User::create(['email' => 'kerani@example.com', 'name' => 'kerani', 'password' => Hash::make('password'), 'type'=> 'kerani']);
        User::create(['email' => 'pegawai@example.com', 'name' => 'pegawai', 'password' => Hash::make('password'), 'type'=> 'pegawai']);

    }
}
