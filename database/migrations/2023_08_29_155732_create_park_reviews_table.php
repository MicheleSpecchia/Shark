<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('park_reviews', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->foreignId('park_id')->constrained()->onDelete('cascade');
            $table->unsignedTinyInteger('rating'); // Valutazione da 1 a 5 stelle
            $table->string('title');  // Aggiungi questa riga per la colonna del titolo
            $table->text('feedback');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('park_reviews');
    }
};
