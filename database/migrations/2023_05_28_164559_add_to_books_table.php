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
            $table->string('image')->nullable; //nullable vuol dire non obbligatoria
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void //istruisci il rollback
    {
        Schema::table('books', function (Blueprint $table) {
            $table->dropColumn('image');
        });
    }
};

//ogni volta che fai un add_to - ovvero ogni volta che crei una colonna nuova
//devi fare migrate
// per ognu up c'è un down, praticamente stai istruendo il rollback per il futuro, non sis a mai se
//la dovrai eliminare