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
        Schema::create('commentaire_articles', function (Blueprint $table) {
            $table->id();
            $table->text('contenu');
            $table->string('commentateur')->nullable();
            $table->string('email')->nullable();
            $table->string('slug')->nullable();
            $table->integer('like');

            $table->foreignId('article_id')->constrained();

            $table->foreignId('user_id')->constrained();

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
        Schema::dropIfExists('commentaire_articles');
    }
};
