<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHallbookTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hallbook', function (Blueprint $table) {
            $table->id();
            $table->string('branchname');
            $table->string('hallname');
            $table->date('date');
            $table->string('start_time');
            $table->string('end_time');
            $table->string('reason');
            $table->string('booked_by');
            $table->string('status')->default(1);
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
        Schema::dropIfExists('hallbook');
    }
}
