<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCatInformationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cat_informations', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('sex');
            $table->float('weight')->nullable();
            $table->integer('age')->nullable();
            $table->date('protectDate')->nullable();
            $table->string('aids')->nullable();
            $table->string('leukemia')->nullable();
            $table->date('flea')->nullable();
            $table->date('spay')->nullable();
            $table->date('vaccination')->nullable();
            $table->string('image_file')->nullable();
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
        Schema::dropIfExists('cat_informations');
    }
}
