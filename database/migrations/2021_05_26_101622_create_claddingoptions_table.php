<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCladdingoptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('claddingoptions', function (Blueprint $table) {
            $table->id();
            $table->longText('cladding_options_content');
            $table->string('dip_treated_image');
            $table->string('tanalized_image');
            $table->string('beast_image');
            $table->longText('dip_treated_content');
            $table->longText('dip_treated_list');
            $table->longText('tanalized_content');
            $table->longText('tanalized_list');
            $table->longText('beast_content');
            $table->longText('beast_list');
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
        Schema::dropIfExists('claddingoptions');
    }
}
