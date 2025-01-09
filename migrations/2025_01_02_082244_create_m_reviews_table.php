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
        Schema::create('m_reviews', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->text('review');
            $table->integer('rating');
            $table->uuid('movie_id'); // Use uuid for the role_id column
            $table->foreign('movie_id')->references('id')->on('m_movies')->onDelete('cascade')->onUpdate('cascade');
            $table->uuid('user_id'); // Use uuid for the role_id column
            $table->foreign('user_id')->references('id')->on('m_users')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('m_reviews');
    }
};
