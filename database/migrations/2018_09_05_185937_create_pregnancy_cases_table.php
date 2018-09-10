<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePregnancyCasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pregnancy_cases', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('household_id');
            $table->integer('patient_id');
            $table->string('name');
            $table->integer('age');
            $table->integer('marital_status_id');
            $table->integer('weeks');
            $table->Text('ANC_visits');
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
        Schema::dropIfExists('pregnancy_cases');
    }
}
