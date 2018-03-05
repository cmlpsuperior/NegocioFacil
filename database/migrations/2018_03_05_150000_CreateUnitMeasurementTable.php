<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUnitMeasurementTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('UnitMeasurement', function (Blueprint $table) {
            $table->smallInteger('idUnitMeasurement')->autoIncrement();
            
            $table->string('name', 100)->unique();
            $table->string('smallName',3);
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('UnitMeasurement');
    }
}
