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
        Schema::connection('iam')->create('options', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255);
            $table->string('slug', 255);
            $table->text('description')->nullable();
            $table->json('value')->nullable();
            $table->unsignedBigInteger('created_by')->nullable()->default(0);
            $table->unsignedBigInteger('updated_by')->nullable()->default(0);
            $table->timestamps();

            $table->unique(['slug'], 'uq_slug');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::connection('iam')->dropIfExists('options');
    }
};
