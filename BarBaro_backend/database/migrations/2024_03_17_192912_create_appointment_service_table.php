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
        Schema::disableForeignKeyConstraints();

        Schema::create('appointment_service', function (Blueprint $table) {
            $table->foreignId('appointment_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('service_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('appointment_service');
    }
};
