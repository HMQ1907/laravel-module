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
        Schema::connection('iam')->create('page_permission_action', function (Blueprint $table) {
            $table->unsignedBigInteger('page_permission_id');
            $table->unsignedBigInteger('action_id');

            $table->primary(['page_permission_id','action_id']);
            $table->index('page_permission_id', 'idx_action_id');
            $table->index('action_id', 'idx_page_permission_id');
            $table->foreign('action_id', 'fk_ppa_action_id_a_id')->references('id')->on('actions');
            $table->foreign('page_permission_id', 'fk_ppa_page_permission_id_pp_id')
                ->references('id')->on('page_permissions');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::connection('iam')->dropIfExists('page_permission_action');
    }
};
