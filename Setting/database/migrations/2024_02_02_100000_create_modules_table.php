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
        Schema::connection('setting')->create('modules', function (Blueprint $table) {
            $table->id();
            $table->string('title', 50);
            $table->string('icon', 50)->nullable();
            $table->string('uri', 50)->nullable();
            $table->unsignedTinyInteger('order')->nullable();
            $table->unsignedBigInteger('created_by')->nullable()->default(0);
            $table->unsignedBigInteger('updated_by')->nullable()->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::connection('setting')->dropIfExists('modules');
    }
};
