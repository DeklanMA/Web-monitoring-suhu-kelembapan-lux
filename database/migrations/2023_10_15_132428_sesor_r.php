<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Translation\CreatesPotentiallyTranslatedStrings;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        //
         Schema::create('Sensor_r', function (Blueprint $table) {
            $table->id();
            $table->double('suhu');
            $table->integer('kelembaban');
             $table->integer('lux');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
