<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Item', function (Blueprint $table) {
            $table->bigInteger('idItem')->autoIncrement();
            
            $table->string('name', 100);
            $table->decimal('price', 8,2);
            $table->smallInteger('state');
            $table->smallInteger('idUnitMeasurement');

            $table->unique(['name', 'idUnitMeasurement']);

            $table->foreign('idUnitMeasurement')->references('idUnitMeasurement')->on('UnitMeasurement');
        });
    }

    public function down()
    {
        Schema::drop('Item');
    }
}
