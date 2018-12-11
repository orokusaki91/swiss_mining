<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class MissionVissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mission_vision')->delete();
        DB::table('mission_vision')->insert([
            array(
                'name' => '01',
                'body_en' => 'Description 1 eng',
                'body_de' => 'Description 1 de',
                'body_fr' => 'Description 1 fra',
                'body_it' => 'Description 1 it',
                'body_es' => 'Description 1 es',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'name' => '02',
                'body_en' => 'Description 2 eng',
                'body_de' => 'Description 2 de',
                'body_fr' => 'Description 2 fra',
                'body_it' => 'Description 2 it',
                'body_es' => 'Description 2 es',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'name' => '03',
                'body_en' => 'Description 3 eng',
                'body_de' => 'Description 3 de',
                'body_fr' => 'Description 3 fra',
                'body_it' => 'Description 3 it',
                'body_es' => 'Description 3 es',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'name' => '04',
                'body_en' => 'Description 4 eng',
                'body_de' => 'Description 4 de',
                'body_fr' => 'Description 4 fra',
                'body_it' => 'Description 4 it',
                'body_es' => 'Description 4 es',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            )
        ]);
    }
}