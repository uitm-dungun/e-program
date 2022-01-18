<?php

namespace Database\Seeders;

use App\Models\Paperwork;
use App\Models\PaperworkSupport;
use App\Models\Status;
use App\Models\Supporter;
use Illuminate\Database\Seeder;

class PaperworkSeeder extends Seeder
{
    public function run()
    {
        $statuses = [];
        $statuses['pending']  = Status::create(['name' => 'Pending',      'className' => 'badge-ghost']);
        $statuses['reviewed'] = Status::create(['name' => 'Reviewed',     'className' => 'badge-primary']);
        $statuses['accepted'] = Status::create(['name' => 'Accepted',     'className' => 'badge-success']);
        $statuses['toreview'] = Status::create(['name' => 'To Review',    'className' => 'badge-info']);
        $statuses['rejected'] = Status::create(['name' => 'Rejected',     'className' => 'badge-error']);

        // Only for pending
        Paperwork::factory()->for($statuses['pending'])
        ->has(PaperworkSupport::factory()
            ->has(Supporter::factory()->state([
                'user_id' => 4,
            ])), 'support')
        ->create();

        // Pop the pending status to seed for other statuses
        unset($statuses['pending']);

        // Other than pending; after all supporter supported the paperworks
        foreach ($statuses as $status) {
            Paperwork::factory()->for($status)
            ->has(PaperworkSupport::factory()
                ->has(Supporter::factory()->state([
                    'user_id' => 4,
                    'has_supported' => true,
                ])) /* PaperworkSupport */,
                'support'
            )
            ->create();
        }
    }
}
