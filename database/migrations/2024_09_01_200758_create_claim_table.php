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
        Schema::create('claim', function (Blueprint $table) {
            $table->id();
            $table->string('description', 255);
            $table->date('fecha_respuesta')->nullable();
            $table->char('modo_respuesta', 1);
            $table->string('cod_compra', 120);
            $table->foreignId('user_id')->constrained('users');
            $table->foreignId('product_id')->constrained('product');
            $table->foreignId('employee_id')->constrained('employee');
            $table->string('documento', 255);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('claim');
    }
};
