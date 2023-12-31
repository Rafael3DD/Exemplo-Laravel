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
        Schema::table('posts', function (Blueprint $table) {
            //Renomeia a coluna body para content
            //$table->renameColumn('body', 'content');
       
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //Renomeia a coluna content para body
        Schema::table('posts', function (Blueprint $table) {
            $table->renameColumn('content', 'body');
        });
    }
};
