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
        Schema::connection('iam')->create('user_role', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('role_id');

            $table->primary(['user_id','role_id']);
            $table->index('role_id', 'idx_role_id');
            $table->index('user_id', 'idx_user_id');

            $table->foreign('user_id', 'fk_ur_user_id_u_id')->references('id')->on('users');
            $table->foreign('role_id', 'fk_ur_role_id_r_id')->references('id')->on('roles');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::connection('iam')->dropIfExists('user_role');
    }
};
