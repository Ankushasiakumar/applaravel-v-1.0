<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBuildshedsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buildsheds', function (Blueprint $table) {
            $table->id();
            $table->string('shed_builder_content');
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
            $table->string('product_featured_tab_1_section_5_image');
            $table->string('product_featured_tab_1_section_5_icon');
            $table->string('product_featured_tab_1_section_5_title');
            $table->longText('product_featured_tab_1_section_5_content');
            $table->string('product_featured_tab_1_section_6_image');
            $table->string('product_featured_tab_1_section_6_icon');
            $table->string('product_featured_tab_1_section_6_title');
            $table->longText('product_featured_tab_1_section_6_content');
            $table->string('product_featured_tab_1_section_7_image');
            $table->string('product_featured_tab_1_section_7_icon');
            $table->string('product_featured_tab_1_section_7_title');
            $table->longText('product_featured_tab_1_section_7_content');
            $table->string('product_featured_tab_1_section_8_image');
            $table->string('product_featured_tab_1_section_8_title');
            $table->longText('product_featured_tab_1_section_8_content');
            $table->string('product_featured_tab_1_section_9_image');
            $table->string('product_featured_tab_1_section_9_title');
            $table->longText('product_featured_tab_1_section_9_content');
            $table->string('product_featured_tab_1_section_10_image_1');
            $table->string('product_featured_tab_1_section_10_image_2');
            $table->string('product_featured_tab_1_section_10_image_3');
            $table->string('product_featured_tab_1_section_10_image_4');
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
        Schema::dropIfExists('buildsheds');
    }
}
