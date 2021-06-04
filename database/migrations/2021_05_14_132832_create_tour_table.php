<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTourTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tour', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('code')->nullable();
            $table->date('departure')->nullable();
            $table->integer('nr_day')->nullable();
            $table->string('starting_gate')->nullable();
            $table->string('image')->nullable();
            $table->integer('price')->nullable();
            $table->tinyInteger('is_active')->default(0);
            $table->integer('type_id')->nullable();
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
        Schema::dropIfExists('tour');
    }
}
