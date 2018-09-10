<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHouseHoldsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('house_holds', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('chw_id');
            $table->string('hospital_id');
            $table->string('head of household');
            $table->integer('number_of_children');
            $table->integer('number_of_adults');
          
         });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('house_holds');
    }
}
