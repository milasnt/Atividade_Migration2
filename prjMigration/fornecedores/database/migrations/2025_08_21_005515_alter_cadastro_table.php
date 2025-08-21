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
        Schema::table('cadastro', function (Blueprint $table) {
            $table->string('RazaoSocial')->nullable()->after('Telefone');
            $table->string('NomeFantasia')->nullable()->after('RazaoSocial');
    

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('cadastro', function (Blueprint $table) {
            $table->dropColumn(['RazaoSocial', 'NomeFantasia']);
        });
    }
};
