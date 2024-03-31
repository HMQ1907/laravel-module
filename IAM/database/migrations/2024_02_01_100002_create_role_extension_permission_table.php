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
        Schema::connection('iam')->create('role_extension_permission', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('role_id');
            $table->unsignedBigInteger('extension_permission_id');
            $table->json('options')->nullable();
            $table->unsignedBigInteger('created_by')->nullable()->default(0);
            $table->unsignedBigInteger('updated_by')->nullable()->default(0);
            $table->timestamps();

            $table->index('role_id', 'idx_role_id');
            $table->index('extension_permission_id', 'idx_extenstion_permission_id');
            $table->foreign('role_id', 'fk_rrp_role_id_r_id')->references('id')->on('roles');
            $table->foreign('extension_permission_id', 'fk_urp_extension_permission_id_ep_id')
                ->references('id')->on('extension_permissions');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::connection('iam')->dropIfExists('role_extension_permission');
    }
};
