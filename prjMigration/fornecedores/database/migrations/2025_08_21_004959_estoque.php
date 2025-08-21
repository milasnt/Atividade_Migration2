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
        Schema::create('estoque', callback: function(Blueprint $table): void {
            $table->id();
            $table->integer('Quantidade');
            $table->double('ValorUnidade');
            $table->unsignedBigInteger('id_cadastro');
            $table->foreign('id_cadastro')->references('id')->on('cadastro');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema:dropIfExists('estoque');
    }
};
