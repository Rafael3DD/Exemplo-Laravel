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
            $table->foreignId('user_id') //Usa foreign key. 'cascade' apaga todos os relacionados da tabela no momento de deleção
            ->constrained()
            -> onDelete('CASCADE')
            -> onUpdate('CASCADE');
            $table->longText('body');
            $table->string('title');  
            $table->string('tags')->nullable();
            $table->timestampsTz($precision = 0);
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
