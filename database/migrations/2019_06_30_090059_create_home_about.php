<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHomeAbout extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('home_about', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('about1_en');
            $table->text('about1_ar');
            $table->text('about2_en');
            $table->text('about2_ar');
            $table->integer('status');
            $table->integer('added_by');
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
        Schema::dropIfExists('home_about');
    }
}
