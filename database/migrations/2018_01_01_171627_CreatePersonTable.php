<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Person', function (Blueprint $table) {
            $table->bigInteger('idPerson')->autoIncrement();
            
            $table->smallInteger('idDocumentType');
            $table->string('documentNumber', 11);
            $table->string('fatherLastName', 100);
            $table->string('motherLastName', 100);
            $table->string('firstNames', 100);
            $table->dateTime('birthDate');
            $table->string('email', 100);
            $table->dateTime('registerDate');

            $table->unique(['idDocumentType', 'documentNumber']);

            $table->foreign('idDocumentType')->references('idDocumentType')->on('DocumentType');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('Person');
    }
}
