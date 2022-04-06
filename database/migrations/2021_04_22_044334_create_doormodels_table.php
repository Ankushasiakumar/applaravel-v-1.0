<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDoormodelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doormodels', function (Blueprint $table) {
            $table->id();
            $table->string('model_name');
            $table->string('model_image');
            $table->string('model_desc');
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
        Schema::dropIfExists('doormodels');
    }
}
