<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWindowcolorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('windowcolor', function (Blueprint $table) {
            $table->id();
            $table->string('color_name');
            $table->string('color_val');
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
        Schema::dropIfExists('windowcolor');
    }
}
