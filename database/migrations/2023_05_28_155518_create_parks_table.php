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
        Schema::create('parks', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('address');
            $table->string('cap');
            $table->string('location');
            $table->longText('description');
            $table->string('foto') -> nullable();
            $table->float('stars')->nullable();
            $table->integer('automobili');
            $table->integer('motocicli');
            $table->integer('camper');
            $table->integer('camere');
            $table->integer('tastierino');
            $table->integer('aperto');
            $table->integer('chiuso');
            $table->integer('totem');
            $table->integer('privato');
            $table->integer('scambio');
            $table->integer('shark');
            $table->float('price');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('parks');
    }

};
