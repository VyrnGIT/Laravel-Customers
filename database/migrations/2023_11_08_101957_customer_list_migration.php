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
        Schema::create('CustomerLists', function (Blueprint $table) {
            $table->id();
            $table->string('Naam');
            $table->string('Bank_Account_Number');
            $table->string('Social_Security_Number');
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
