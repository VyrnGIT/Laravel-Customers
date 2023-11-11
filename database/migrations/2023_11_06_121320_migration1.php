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
        Schema::create('Spels', function (Blueprint $table) {
                $table->id();
                $table->string('spelnaam');
                $table->string('gokkans');
                $table->string('inzet');
                $table->timestamps();
                // $table->foreignId('casinoid')->constrained();


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
