<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePreviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('previews', function (Blueprint $table) {
            $table->id();
            $table->string('layout_id');
            $table->string('window_modal_id');
            $table->string('window_color_id');
            $table->string('window_position_id');
            $table->string('door_modal_id');
            $table->string('door_color_id');
            $table->string('door_position_id');
            $table->string('preview_image');
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
        Schema::dropIfExists('previews');
    }
}
