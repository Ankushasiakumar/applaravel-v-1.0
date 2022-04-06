<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLayoutTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('layout', function (Blueprint $table) {
            $table->id();
            $table->string('layout_name');
            $table->string('layout_image');
            $table->string('layout_desc');
            $table->string('price');
            $table->enum('is_active', ['Y','N']);
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
        Schema::dropIfExists('layout');
    }
}
