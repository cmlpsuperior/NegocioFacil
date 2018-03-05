<?php

use Illuminate\Database\Seeder;

class UnitMeasurementTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('UnitMeasurement')->insert([
            'name' => 'bolsa',
            'smallName' => 'bol'
        ]);
        DB::table('UnitMeasurement')->insert([
            'name' => 'caja',
            'smallName' => 'caj'
        ]);
        DB::table('UnitMeasurement')->insert([
            'name' => 'carretilla',
            'smallName' => 'car'
        ]);
        DB::table('UnitMeasurement')->insert([
            'name' => 'envase',
            'smallName' => 'env'
        ]);
        DB::table('UnitMeasurement')->insert([
            'name' => 'kilogramo',
            'smallName' => 'kg'
        ]);


        DB::table('UnitMeasurement')->insert([
            'name' => 'metro cubico',
            'smallName' => 'm3'
        ]);
        DB::table('UnitMeasurement')->insert([
            'name' => 'metro',
            'smallName' => 'm'
        ]);
        DB::table('UnitMeasurement')->insert([
            'name' => 'otro',
            'smallName' => 'otr'
        ]);
        DB::table('UnitMeasurement')->insert([
            'name' => 'par',
            'smallName' => 'par'
        ]);
        DB::table('UnitMeasurement')->insert([
            'name' => 'rollo',
            'smallName' => 'rol'
        ]);

        
        DB::table('UnitMeasurement')->insert([
            'name' => 'unidad',
            'smallName' => 'uni'
        ]);
        DB::table('UnitMeasurement')->insert([
            'name' => 'varilla',
            'smallName' => 'var'
        ]);
        
    }
}
