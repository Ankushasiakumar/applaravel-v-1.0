<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWindowpositionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('windowpositions', function (Blueprint $table) {
            $table->id();
            $table->string('position_name');
            $table->string('position_image');
            $table->string('position_desc');
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
        Schema::dropIfExists('windowpositions');
    }
}
