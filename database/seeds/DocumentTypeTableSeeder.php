<?php

use Illuminate\Database\Seeder;

class DocumentTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('DocumentType')->insert([
            'idDocumentType' => 1,
            'name' => 'Documento Nacional de Identidad',
            'smallName' => 'DNI',
            'idType' => 1,
        ]);

        DB::table('DocumentType')->insert([
            'idDocumentType' => 4,
            'name' => 'Carnet de Extranjeria',
            'smallName' => 'CARNET EXT.',
            'idType' => 1,
        ]);

        DB::table('DocumentType')->insert([
            'idDocumentType' => 6,
            'name' => 'Registro unico de contribuyentes',
            'smallName' => 'RUC',
            'idType' => 2,
        ]);

        DB::table('DocumentType')->insert([
            'idDocumentType' => 7,
            'name' => 'Pasaporte',
            'smallName' => 'PASAPORTE',
            'idType' => 1,
        ]);

    }
}
