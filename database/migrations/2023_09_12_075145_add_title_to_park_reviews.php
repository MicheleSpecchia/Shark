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
        Schema::table('park_reviews', function (Blueprint $table) {
            if (!Schema::hasColumn('park_reviews', 'title')) {
                $table->string('title')->after('rating');
            }
        });
    }

    public function down()
    {
        Schema::table('park_reviews', function (Blueprint $table) {
            $table->dropColumn('title');
        });
    }
};
