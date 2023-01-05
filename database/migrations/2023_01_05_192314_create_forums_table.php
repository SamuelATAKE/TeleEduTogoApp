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
            //use  foreignkeu constrained()
            $table->foreignId('author')->constrained('users');
            $table->foreignId('category')->constrained('categories');
            $table->integer('likes')->default(0);
            $table->integer('dislikes')->default(0);
            $table->foreignId('level')->constrained('levels');
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
