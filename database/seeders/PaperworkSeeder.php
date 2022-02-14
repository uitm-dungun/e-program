<?php

namespace Database\Seeders;

use App\Models\Paperwork;
use App\Models\PaperworkSupport;
use App\Models\Status;
use App\Models\Supporter;
use App\Models\Risk;
use App\Models\Safety;
use Illuminate\Database\Seeder;

class PaperworkSeeder extends Seeder
{
    public function run()
    {
        $statuses = [];
        $statuses['pending']    = Status::create(['name' => 'Pending',     'className' => 'badge-ghost']); // Created
        $statuses['supported']  = Status::create(['name' => 'Supported',   'className' => 'badge-secondary']); // Supported by supporters
        $statuses['reviewed']   = Status::create(['name' => 'Reviewed',    'className' => 'badge-primary']); // Reviewed by clerk
        $statuses['accepted']   = Status::create(['name' => 'Accepted',    'className' => 'badge-success']); // Accepted by top level officer, end of program
        $statuses['toreview']   = Status::create(['name' => 'To Review',   'className' => 'badge-info']); // Sent to review / make edits from top level officer
        $statuses['rejected']   = Status::create(['name' => 'Rejected',    'className' => 'badge-error']); // Rejected from clerk, from supporters

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
            Paperwork::factory(20)->for($status)
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
