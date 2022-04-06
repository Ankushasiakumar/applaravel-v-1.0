<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSecuritypackagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('securitypackages', function (Blueprint $table) {
            $table->id();
            $table->longText('content1');
            $table->string('image1');
            $table->longText('content2');
            $table->string('image2');
            $table->longText('content3');
            $table->longText('video_code');
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
        Schema::dropIfExists('securitypackages');
    }
}
