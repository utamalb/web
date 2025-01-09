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
        Schema::create('m_movies', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('title', 255);
            $table->text('synopsis');
            $table->string('poster', 255)->nullable();
            $table->string('year', 8);
            $table->boolean('available')->default(true);
            $table->uuid('genre_id'); // Use uuid for the role_id column
            $table->foreign('genre_id')->references('id')->on('m_genres')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('m_movies');
    }
};
