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
        Schema::create('purchase', function (Blueprint $table) {
            $table->id();
            $table->string('cod_compra', 120);
            $table->date('fecha_compra');
            $table->decimal('monto_total', 8, 2);
            $table->foreignId('user_id')->constrained('users');
            $table->foreignId('employee_id')->constrained('employee');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('purchase_product');
        Schema::dropIfExists('purchase');
    }
};
