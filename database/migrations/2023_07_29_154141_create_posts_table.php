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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('author');
            $table->unsignedBigInteger('category_title');
            $table->string('title');
            $table->string('slug')->unique();
            $table->string('body');
            $table->string('excerpt');
            $table->timestamps();

            //Relasi
            $table->foreign('author')->references('username')->on('users');
            $table->foreign('category_title')->references('title')->on('categories');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};