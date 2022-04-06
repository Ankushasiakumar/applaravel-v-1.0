<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGardenroomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gardenrooms', function (Blueprint $table) {
            $table->id();
            $table->string('gardenroom_content');
            $table->string('product_featured_tab_1_section_1_image');
            $table->string('product_featured_tab_1_section_1_title');
            $table->longText('product_featured_tab_1_section_1_content');
            $table->string('product_featured_tab_1_section_2_image');
            $table->string('product_featured_tab_1_section_2_title');
            $table->longText('product_featured_tab_1_section_2_content');
            $table->string('product_featured_tab_1_section_3_image');
            $table->string('product_featured_tab_1_section_3_icon');
            $table->string('product_featured_tab_1_section_3_title');
            $table->longText('product_featured_tab_1_section_3_content');
            $table->string('product_featured_tab_1_section_4_image');
            $table->string('product_featured_tab_1_section_4_icon');
            $table->string('product_featured_tab_1_section_4_title');
            $table->longText('product_featured_tab_1_section_4_content');
            $table->longText('product_featured_tab_1_section_1_video');
            $table->string('product_featured_tab_2_section_1_image');
            $table->string('product_featured_tab_2_section_1_title');
            $table->longText('product_featured_tab_2_section_1_content');
            $table->string('product_featured_tab_2_section_2_image');
            $table->string('product_featured_tab_2_section_2_title');
            $table->longText('product_featured_tab_2_section_2_content');
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
        Schema::dropIfExists('gardenrooms');
    }
}
