<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHallTbl extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hall_tbl', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('b_id');
            $table->foreign('b_id')->references('id')->on('branch_tbl');
            $table->string('hall_name');
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
        Schema::dropIfExists('hall_tbl');
    }
}
