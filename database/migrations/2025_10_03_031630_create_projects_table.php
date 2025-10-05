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
        
        Schema::create('projects', function (Blueprint $table) {
        $table->id();
        $table->string('title');
        $table->string('slug')->unique();
        $table->text('short_description')->nullable();
        $table->longText('description')->nullable();
        $table->string('featured_image')->nullable();
        $table->json('tech_stack')->nullable(); // store as json ['Laravel','Android']
        $table->string('project_url')->nullable();
        $table->string('repo_url')->nullable();
        $table->boolean('is_published')->default(true);
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
