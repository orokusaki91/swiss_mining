<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAboutUsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('about_us', function (Blueprint $table) {
            $table->increments('id');
            $table->string('header_en')->nullable(false);
            $table->string('header_de')->nullable(false);
            $table->string('header_fr')->nullable(false);
            $table->string('header_it')->nullable(false);
            $table->string('header_es')->nullable(false);
            $table->text('body_en')->nullable(false);
            $table->text('body_de')->nullable(false);
            $table->text('body_fr')->nullable(false);
            $table->text('body_it')->nullable(false);
            $table->text('body_es')->nullable(false);
            $table->string('picture');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('about_uses');
    }
}
