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
        Schema::create('about_stats', function (Blueprint $table) {
            $table->id();
            $table->string("teams_trained");
            $table->string("graduated_teams");
            $table->string("active_teams");
            $table->string("funds_raised");
            $table->string("total_valuation");
            $table->string("photo_1");
            $table->string("photo_2");
            $table->string("photo_3");
            $table->string("photo_4");
            $table->string("photo_5");
            $table->string("photo_6");
            $table->timestamp("created_at")->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('about_stats');
    }
};
