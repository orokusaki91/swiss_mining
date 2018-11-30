<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOneRowPageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('one_row_page', function (Blueprint $table) {
            $table->increments('id');
            $table->string('page');
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
        Schema::dropIfExists('one_row_page');
    }
}
