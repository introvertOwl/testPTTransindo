<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rental_cars', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->enum('ketersediaan', ['tersedia', 'dipinjam'])->default('tersedia');
            $table->date('dipinjam')->nullable();
            $table->date('dikembalikan')->nullable();
            
            // foreign key
            $table->foreignId('user_id')->references('id')->on('users');
            $table->foreignId('mobil_id')->references('id')->on('cars');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rental_cars');
    }
};
