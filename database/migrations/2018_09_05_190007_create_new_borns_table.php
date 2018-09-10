<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewBornsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('new_borns', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('household_id');
            $table->string('name');
            $table->longText('health_status');
            $table->boolean('immunization_status');
            $table->longText('PNC_visits');
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
        Schema::dropIfExists('new_borns');
    }
}
