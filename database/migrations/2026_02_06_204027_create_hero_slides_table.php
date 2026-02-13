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
        //Eloquent: ORM de laravel
        Schema::create('hero_slides', function (Blueprint $table) {
            $table->id();
            $table->String('title');
            $table->String('subtitle')->nullable();
            $table->String('image_path')->nullable();
            $table->String('cta_text')->nullable();
            $table->String('cta_url')->nullable();
            $table->Integer('sort_order')->nullable();
            $table->Boolean('is_active')->default(1); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hero_slides');
    }
};
