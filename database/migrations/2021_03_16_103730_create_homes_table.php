<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHomesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('homes', function (Blueprint $table) {
            $table->id();
            $table->string('banner_background');
            $table->string('banner_title');
            $table->string('banner_link');
            $table->string('why_choose_title');
            $table->string('choose_grid_icon_1');
            $table->string('choose_grid_title_1');
            $table->string('choose_grid_icon_2');
            $table->string('choose_grid_title_2');
            $table->string('choose_grid_icon_3');
            $table->string('choose_grid_title_3');
            $table->string('choose_grid_icon_4');
            $table->string('choose_grid_title_4');
            $table->string('build_shed_title');
            $table->longText('build_shed_content');
            $table->string('build_shed_link');
            $table->string('build_shed_image');
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
        Schema::dropIfExists('homes');
    }
}
