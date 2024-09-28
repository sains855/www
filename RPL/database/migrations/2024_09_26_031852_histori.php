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
        Schema::create(table:'histori',callback: function (Blueprint $table): void{
            $table -> integerIncrements('id');
            $table -> string ('pemakaian');
            $table -> decimal ('budget');
            $table -> timestamps('waktu');
        });
    }

    /**
     * Reverse the migrations
     */
    public function down(): void
    {
        //
    }
};
