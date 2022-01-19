<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVersesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('verses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('meme_id')->nullable()->references('id')->on('mems')->constrained()->onDelete('cascade');
            $table->string('lib_no')->nullable();
            $table->string('No_of_words')->nullable();
            $table->string('library_verse_price')->nullable();
            $table->string('message_type')->nullable();
            $table->string('leaving_verse_person')->nullable();
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
        Schema::dropIfExists('verses');
    }
}
