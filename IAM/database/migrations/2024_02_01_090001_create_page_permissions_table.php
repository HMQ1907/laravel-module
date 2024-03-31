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
        Schema::connection('iam')->create('page_permissions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('module_id');
            $table->string('name', 255);
            $table->string('slug', 255);
            $table->text('description')->nullable();
            $table->unsignedBigInteger('created_by')->nullable()->default(0);
            $table->unsignedBigInteger('updated_by')->nullable()->default(0);
            $table->timestamps();

            $table->unique(['slug'], 'uq_slug');
            $table->index('module_id', 'idx_module_id');
            $table->foreign('module_id', 'fk_pp_module_id_m_id')->references('id')->on('modules');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::connection('iam')->dropIfExists('page_permissions');
    }
};
