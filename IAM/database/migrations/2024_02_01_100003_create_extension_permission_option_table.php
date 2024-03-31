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
        Schema::connection('iam')->create('extension_permission_option', function (Blueprint $table) {
            $table->unsignedBigInteger('extension_permission_id');
            $table->unsignedBigInteger('option_id');

            $table->primary(['extension_permission_id','option_id']);
            $table->index('option_id', 'idx_option_id');
            $table->index('extension_permission_id', 'idx_extension_permission_id');
            $table->foreign('option_id', 'fk_epo_option_id_o_id')->references('id')->on('options');
            $table->foreign('extension_permission_id', 'fk_epo_extension_permission_id_ep_id')
                ->references('id')->on('extension_permissions');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::connection('iam')->dropIfExists('extension_permission_option');
    }
};
