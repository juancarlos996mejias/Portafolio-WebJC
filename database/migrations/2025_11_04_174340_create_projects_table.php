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
    Schema::create('projects', function (Blueprint $table) {
        $table->id();
        $table->string('slug')->unique();
        $table->string('title');
        $table->string('subtitle')->nullable();
        $table->text('summary')->nullable();
        $table->text('role')->nullable();
        $table->text('responsibilities')->nullable(); // puede guardar html o markdown
        $table->text('tech_stack')->nullable();
        $table->text('user_stories')->nullable();
        $table->text('code_snippet')->nullable();
        $table->string('cover_image')->nullable();
        $table->json('gallery')->nullable(); // array de imágenes/diagramas
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
