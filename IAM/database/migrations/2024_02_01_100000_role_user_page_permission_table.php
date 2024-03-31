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
        Schema::connection('iam')->create('role_page_permission', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('role_id');
            $table->unsignedBigInteger('page_permission_id');
            $table->json('action')->nullable();
            $table->unsignedBigInteger('created_by')->nullable()->default(0);
            $table->unsignedBigInteger('updated_by')->nullable()->default(0);
            $table->timestamps();

            $table->index('role_id', 'idx_role_id');
            $table->index('page_permission_id', 'idx_page_permission_id');
            $table->foreign('role_id', 'fk_rpp_role_id_r_id')->references('id')->on('roles');
            $table->foreign('page_permission_id', 'fk_upp_page_permission_id')
                ->references('id')->on('page_permissions');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::connection('iam')->dropIfExists('role_page_permission');
    }
};
