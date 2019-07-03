<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContacts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('title_en');
            $table->text('phone_en')->nullable();
            $table->text('email_en')->nullable();
            $table->text('address_en')->nullable();

            $table->text('title_ar');
            $table->text('phone_ar')->nullable();
            $table->text('email_ar')->nullable();
            $table->text('address_ar')->nullable();

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
        Schema::dropIfExists('contacts');
    }
}
