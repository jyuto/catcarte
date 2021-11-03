<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMedicineInformationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medicine_informations', function (Blueprint $table) {
            $table->id();
            $table->string('medicineName');
            $table->string('dosageForm')->nullable();
            $table->text('work')->nullable();
            $table->string('usage')->nullable();
            $table->integer('dose')->nullable();
            $table->text('caution')->nullable();
            $table->text('sideEffect')->nullable();
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
        Schema::dropIfExists('medicine_informations');
    }
}
