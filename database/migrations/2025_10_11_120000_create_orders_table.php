<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            // Recipient info from checkout form
            $table->string('full_name');
            $table->string('email');
            $table->string('phone');
            $table->string('province');
            $table->string('regency');
            $table->string('district');
            $table->string('village');

            // Summary
            $table->unsignedBigInteger('subtotal')->default(0);
            $table->unsignedBigInteger('shipping')->default(0);
            $table->unsignedBigInteger('tax')->default(0);
            $table->unsignedBigInteger('total')->default(0);

            // Status: diproses, dikirim, selesai, batal
            $table->enum('status', ['diproses', 'dikirim', 'selesai', 'batal'])->default('diproses');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};