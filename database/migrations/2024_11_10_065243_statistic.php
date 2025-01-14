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
        Schema::create('Statistic', function (Blueprint $table) {
            $table->id();
            $table->integer('Training_nbr');
            $table->integer('Student_nbr');
            $table->integer('activitie_nbr');
            $table->integer('Certified_training');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Statistic');
    }
};
