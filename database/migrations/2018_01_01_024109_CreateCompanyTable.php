<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompanyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Company', function (Blueprint $table) {
            $table->bigIncrements('idCompany');
            
            $table->smallInteger('idDocumentType');
            $table->string('documentNumber', 11);
            $table->string('legalName', 100);
            $table->smallInteger('idState');
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
        Schema::drop('Company');
    }
}
