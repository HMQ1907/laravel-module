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
        Schema::connection('setting')->create('menus', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('module_id');
            $table->unsignedBigInteger('parent_id');
            $table->string('title', 50);
            $table->string('icon', 50)->nullable();
            $table->string('uri', 50)->nullable();
            $table->unsignedTinyInteger('order')->nullable();
            $table->unsignedBigInteger('created_by')->nullable()->default(0);
            $table->unsignedBigInteger('updated_by')->nullable()->default(0);
            $table->timestamps();

            $table->index('module_id', 'idx_module_id');
            $table->foreign('module_id', 'fk_m_module_id_m_id')->references('id')->on('modules');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::connection('setting')->dropIfExists('menus');
    }
};
