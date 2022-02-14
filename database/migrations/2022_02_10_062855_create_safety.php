<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSafety extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('safety', function (Blueprint $table) {
            $table->id();

            //PKPD SAFETY
            $table->boolean('PKPD[ch_y]');
            $table->boolean('PKPD[ch_t]');
            $table->boolean('PKPD[ch_tb]');

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
        Schema::dropIfExists('safety');
    }
}
