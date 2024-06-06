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
        Schema::create('rental', function (Blueprint $table) {
            $table->id();
            $table->string('tanggal_peminjaman');
            $table->string('tanggal_pengembalian');

            $table->unsignedBigInteger('customer_id');
            $table->unsignedBigInteger('car_id');
            $table->foreign('customer_id')->references('id')->on('customer');
            $table->foreign('car_id')->references('id')->on('car');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rental');
    }
};
