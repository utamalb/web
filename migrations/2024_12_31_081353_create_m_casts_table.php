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
        Schema::create('m_casts', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('name', 255);
            $table->integer('age');
            $table->text('biodata');
            $table->string('avatar', 255);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('m_casts');
    }
};
