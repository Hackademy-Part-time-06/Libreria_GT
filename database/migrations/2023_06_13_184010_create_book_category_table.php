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
        Schema::create('book_category', function (Blueprint $table) {
            $table->id();
            //Book_id
            //category_id
            $table->unsignedBigInteger('book_id');
            $table->unsignedBigInteger('category_id');

            //Integrita referenziale
            $table->foreign('book_id')
                ->references('id')
                ->on('books');

            $table->foreign('category_id')
                ->references('id')
                ->on('categories');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('book_category');
    }
};