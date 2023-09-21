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
        Schema::create('unplanned_tasks', function (Blueprint $table) {
            $table->id();
            $table->string('unplanned_tasks')->nullable();
            $table->string('task_product')->nullable();
            $table->string('factual_time')->nullable();
            $table->date('completion_date')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('unplanned_tasks');
    }
};
