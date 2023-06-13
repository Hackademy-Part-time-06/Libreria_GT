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
        Schema::table('books', function (Blueprint $table) {
            //Aggiungere author_id 
            $table->unsignedBigInteger('user_id')->nullable; //viene cancellato con dropColumn
    
            $table->foreign('user_id') //Setto la chiave esterna presente nella tabella books
                ->references('id') //Specifico la chiave primaria di authors
                ->on('users'); //Nome tabella di referenza
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('books', function (Blueprint $table) {
            $table->dropColumn('user_id');
            $table->dropForeign('user_id');
        });
    }
};
