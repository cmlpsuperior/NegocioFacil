<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(DocumentTypeTableSeeder::class);
        $this->call(UnitMeasurementTableSeeder::class);
    }
}
