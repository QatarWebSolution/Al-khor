<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFixtures extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fixtures', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('date');
            $table->string('stadium_en');
            $table->string('home_team_en');
            $table->text('home_team_logo');
            $table->string('away_team_en');
            $table->text('away_team_logo');
            $table->string('score_en');

            $table->string('stadium_ar');
            $table->string('home_team_ar');
            $table->string('away_team_ar');
            $table->string('score_ar');

            $table->integer('status')->default(1);
            $table->integer('added_by')->default(1);
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
        Schema::dropIfExists('fixtures');
    }
}
