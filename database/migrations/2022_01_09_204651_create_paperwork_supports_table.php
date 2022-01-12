<?php

use App\Models\Paperwork;
use App\Models\Supporter;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaperworkSupportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paperwork_supports', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Paperwork::class); // Which paperwork is this for
            $table->boolean('is_complete')->default(false); // Everyone has already supported; cached value instead of a query
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
        Schema::dropIfExists('paperwork_supports');
    }
}
