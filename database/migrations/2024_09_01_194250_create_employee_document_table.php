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
        Schema::create('employee_document', function (Blueprint $table) {
            $table->foreignId('employee_id')->constrained('employee');
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
        Schema::dropIfExists('employee_document');
    }
};
