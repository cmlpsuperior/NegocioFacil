<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDocumentTypeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('DocumentType', function (Blueprint $table) {
            $table->smallInteger('idDocumentType');

            $table->string('name', 100);
            $table->string('smallName', 50);
            $table->smallInteger('idType'); //1: person, 2:Company

            $table->primary('idDocumentType');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('DocumentType');
    }
}
