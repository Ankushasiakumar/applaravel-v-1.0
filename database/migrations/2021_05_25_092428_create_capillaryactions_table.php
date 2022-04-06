<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCapillaryactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('capillaryactions', function (Blueprint $table) {
            $table->id();
            $table->longText('top_content');
            $table->string('section_1_image');
            $table->longText('section_1_content');
            $table->longText('section1');
            $table->string('section_2_image');
            $table->longText('section_2_content');
            $table->longText('section2');
            $table->string('section_3_image');
            $table->longText('section_3_content');
            $table->longText('section3');
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
        Schema::dropIfExists('capillaryactions');
    }
}
