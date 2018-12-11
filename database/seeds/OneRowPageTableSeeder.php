<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class OneRowPageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('one_row_page')->delete();
        DB::table('one_row_page')->insert([
            array(
                'page' => 'aboutUs',
                'header_en' => 'Header eng',
                'header_de' => 'Header de',
                'header_fr' => 'Header fra',
                'header_it' => 'Header italy',
                'header_es' => 'Header es',
                'body_en' => 'Body eng',
                'body_de' => 'Body de',
                'body_fr' => 'Body fra',
                'body_it' => 'Body it',
                'body_es' => 'Body es',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'page' => 'service',
                'header_en' => NULL,
                'header_de' => NULL,
                'header_fr' => NULL,
                'header_it' => NULL,
                'header_es' => NULL,
                'body_en' => 'Body eng',
                'body_de' => 'Body de',
                'body_fr' => 'Body fra',
                'body_it' => 'Body it',
                'body_es' => 'Body es',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'page' => 'solutions',
                'header_en' => 'Header eng',
                'header_de' => 'Header de',
                'header_fr' => 'Header fra',
                'header_it' => 'Header italy',
                'header_es' => 'Header es',
                'body_en' => 'Body eng',
                'body_de' => 'Body de',
                'body_fr' => 'Body fra',
                'body_it' => 'Body it',
                'body_es' => 'Body es',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ),
            array(
                'page' => 'turboToken',
                'header_en' => NULL,
                'header_de' => NULL,
                'header_fr' => NULL,
                'header_it' => NULL,
                'header_es' => NULL,
                'body_en' => 'Body eng',
                'body_de' => 'Body de',
                'body_fr' => 'Body fra',
                'body_it' => 'Body it',
                'body_es' => 'Body es',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            )           
        ]);
    }
}