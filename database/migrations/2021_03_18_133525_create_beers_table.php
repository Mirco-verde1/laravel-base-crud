<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBeersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('beers', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('brand', 100);
            $table->string('type',50);
            $table->string('nationality',100);
            $table->string('manufactoring_plant');
            $table->string('label_image', 2048);
            $table->string('description', 4000);
            $table->float('price', 4,2);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('beers');
    }
}
