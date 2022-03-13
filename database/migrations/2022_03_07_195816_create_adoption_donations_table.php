<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adoption_donations', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->integer('pet_id');
            $table->string('name');
            $table->string('email');
            $table->string('address');
            $table->string('phone');
            $table->string('pet_category');
            $table->integer('pet_quantity');
            $table->integer('pet_age');
            $table->string('health_condition');
            $table->date('vaccine_date');
            $table->string('vaccine_dose');
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
        Schema::dropIfExists('adoption_donations');
    }
};
