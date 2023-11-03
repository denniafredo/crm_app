<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('benefits', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('employment_id');
            $table->float('basic_salary')->nullable();
            $table->float('fixed_allowances')->nullable();
            $table->float('meal_allowances')->nullable();
            $table->float('transport_allowances')->nullable();
            $table->float('overtime_allowances')->nullable();
            $table->string('persenpph')->nullable();
            $table->timestamps();

            $table->foreign('employment_id')->references('id')->on('employments');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('benefits');
    }
};
