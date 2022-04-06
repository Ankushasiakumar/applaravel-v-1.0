<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('header_logo');
            $table->string('phone');
            $table->string('timing');
            $table->string('footer_logo');
            $table->string('facebook');
            $table->string('twitter');
            $table->string('google');
            $table->string('copyright');
            $table->string('contact_info_address');
            $table->string('contact_info_email');
            $table->string('contact_info_phone');
            $table->string('contact_form_email');
            $table->longText('google_map');
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
        Schema::dropIfExists('settings');
    }
}
