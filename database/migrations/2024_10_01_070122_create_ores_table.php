<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('ores', function (Blueprint $table) {
            $table->id();
            $table->float('price');
            $table->string('label');
            $table->string('desc');
            $table->date('date_');
            $table->string('image_path')->default('img/ore_default.jpg');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_ores');
    }
};
