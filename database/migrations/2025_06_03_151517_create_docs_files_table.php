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
        Schema::create('docs_files', function (Blueprint $table) {
            $table->unsignedBigInteger('doc_id');
            $table->unsignedBigInteger('file_id');

            $table->primary(['doc_id', 'file_id']);
            $table->foreign('doc_id')->references('docs_id')->on('docs');
            $table->foreign('file_id')->references('file_id')->on('files');
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('docs_files');
    }
};
