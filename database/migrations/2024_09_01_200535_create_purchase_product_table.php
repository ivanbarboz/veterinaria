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
        Schema::create('purchase_product', function (Blueprint $table) {
            $table->foreignId('purchase_id')->constrained('purchase');
            $table->foreignId('product_id')->constrained('product');
            $table->integer('cantidad');
            $table->decimal('sub_total', 8, 2);
            $table->foreignId('unit_id')->constrained('unit');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('purchase_product');
    }
};
