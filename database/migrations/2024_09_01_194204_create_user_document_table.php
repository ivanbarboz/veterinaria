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
        Schema::create('user_document', function (Blueprint $table) {
            $table->foreignId('user_id')->constrained();
            $table->foreignId('document_type_id')->constrained('document_type');
            $table->string('nro_documento', 20);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_document');
    }
};
