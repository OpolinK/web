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
        Schema::create('docs_type', function (Blueprint $table) {
            $table->id('docs_type_id');
            $table->string('docs_type_name', 64)->unique();
            $table->boolean('active')->default(1);
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('docs_type');
    }
};
