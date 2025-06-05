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
        Schema::create('docs_employee', function (Blueprint $table) {
            $table->unsignedBigInteger('docs_id');
            $table->unsignedBigInteger('employee_id');
            $table->unsignedBigInteger('position_id')->nullable();
            $table->boolean('signed')->default(0);

            $table->primary(['docs_id', 'employee_id']);
            $table->foreign('docs_id')->references('docs_id')->on('docs');
            $table->foreign('employee_id')->references('employee_id')->on('employee');
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('docs_employee');
    }
};
