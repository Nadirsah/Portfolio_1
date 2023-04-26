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
        Schema::create('ayarlar_models', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('logo');
            $table->string('image');
            $table->string('favicon');
            $table->string('activ')->default(1);
            $table->string('facebook');
            $table->string('github');
            $table->string('linkedin');
            $table->string('text')->longText();
            $table->string('email')->longText();
            $table->string('city')->longText();
            $table->string('phone')->longText();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ayarlar_models');
    }
};
