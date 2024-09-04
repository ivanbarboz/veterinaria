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
        Schema::create('claims', function (Blueprint $table) {
            $table->id();
            $table->string('description', 255);
            $table->date('response_date')->nullable();
            $table->char('response_mode', 1);
            $table->string('purchase_code', 120);
            $table->foreignId('user_id')->constrained();
            $table->foreignId('product_id')->constrained();
            // $table->foreignId('employee_id')->constrained();
            // $table->string('document', 255);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('claims');
    }
};
