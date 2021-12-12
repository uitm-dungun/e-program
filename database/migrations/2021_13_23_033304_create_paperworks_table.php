<?php

use App\Models\Status;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaperworksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paperworks', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('venue');
            $table->tinyInteger('total_participants');
            $table->tinyInteger('target_participants');
            $table->string('objective');

            $table->date('begin_date');
            $table->time('begin_time');
            $table->date('end_date');
            $table->time('end_time');

            $table->string('budget_moneybank');
            $table->string('budget_grant');
            $table->string('budget_notes');

            // TODO: Integrate a 'supporter' feature; create todo table as a relation to this

            $table->foreignIdFor(Status::class); // Pending, Reviewed, Accepted, To Review, Rejected

            $table->json('officers');
            $table->json('budgets');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('epaperwork_paperworks');
    }
}