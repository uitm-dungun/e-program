<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEpaperworkPaperworksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('epaperwork_paperworks', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('venue');
            $table->tinyInteger('total_participants');
            $table->tinyInteger('target_participants');
            $table->string('objective');

            $table->string('budget_moneybank');
            $table->string('budget_grant');
            $table->string('budget_notes');

            $table->string('status'); // Pending, Reviewed, Accepted, To Review, Rejected

            // $table->boolean('favicon');
            // $table->boolean('title');
            // $table->boolean('image-optimization');

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
