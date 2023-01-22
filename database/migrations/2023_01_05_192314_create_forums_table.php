<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('forums', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('content');
            $table->foreignId('author')->constrained('users');
            $table->foreignId('category')->constrained('forum_categories');
            $table->integer('likes')->default(0);
            $table->integer('dislikes')->default(0);
            $table->string('tags')->nullable();
            //$table->foreignId('level')->constrained('levels');
            $table->uuid('slug')->unique()->generatedAs('uuid_generate_v4()');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('forums');
    }
};
