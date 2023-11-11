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
       // Check if the table doesn't already exist
       if (!Schema::hasTable('spels')) {
        Schema::create('spels', function (Blueprint $table) {
            // ... table definition ...
            $table->id();
            $table->string('spelnaam');
            $table->string('gokkans');
            $table->string('inzet');
            $table->timestamps();
        
        });
      }

        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
