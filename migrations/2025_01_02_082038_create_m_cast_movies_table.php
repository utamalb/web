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
        Schema::create('m_cast_movies', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('movie_id'); // Use uuid for the role_id column
            $table->foreign('movie_id')->references('id')->on('m_movies')->onDelete('cascade')->onUpdate('cascade');
            $table->uuid('cast_id'); // Use uuid for the role_id column
            $table->foreign('cast_id')->references('id')->on('m_casts')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('m_cast_movies');
    }
};
