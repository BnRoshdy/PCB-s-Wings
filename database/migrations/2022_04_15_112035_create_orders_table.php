<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
          $table->id();
          $table->integer('userid');
          $table->string('size');
          $table->integer('design_num');
          $table->integer('quantity');
          $table->integer('layers');
          $table->string('min_track');
          $table->string('min_hole_size');
          $table->string('solder_mask');
          $table->string('silkscreen');
          $table->string('stensil');
          $table->string('price');
          $table->string('status');
          $table->string('file_name');
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
        Schema::dropIfExists('orders');
    }
};
