<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailTourTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_tour', function (Blueprint $table) {
            $table->id();
            $table->string('transfer_info');
            $table->string('hotel_info');
            $table->string('tour_guide_info');
            $table->string('generate_address');
            $table->string('generate_time');
            $table->string('note');
            $table->integer('tour_id');
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
        Schema::dropIfExists('detail_tour');
    }
}
