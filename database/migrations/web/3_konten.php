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
        Schema::create('konten', function(Blueprint $table) {
            $table -> id('konten_id');
            $table -> string('titleKonten', 255);
            $table -> text('konten');
            $table -> unsignedBigInteger('users_id');
            $table -> foreign('users_id')->references('users_id')->on('users')->onDelete('cascade');
            $table -> timestamps();
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
