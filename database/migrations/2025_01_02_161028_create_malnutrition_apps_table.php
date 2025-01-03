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
        Schema::create('malnutrition_apps', function (Blueprint $table) {
            $table->id();
            $table->integer('child_idc')->unique();
            $table->string('child_full_name');
            $table->string('child_sex');
            $table->string('child_birthday');
            $table->integer('parent_idc');
            $table->integer('status_id')->nullable();
            $table->boolean('can_delete')->default(true);
            $table->string('created_by')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('malnutrition_apps');
    }
};
