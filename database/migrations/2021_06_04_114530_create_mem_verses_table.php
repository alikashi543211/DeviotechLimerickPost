<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMemVersesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mem_verses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('meme_id')->references('id')->on('mems')->constrained()->onDelete('cascade');
            $table->enum("mem_verse_type", ['1', '2'])
                ->default('1')
                ->comment('1. Library 2. Provided');
            $table->string("mem_verse_library_no")->nullable();
            $table->string("mem_verse_no_of_words");
            $table->string("mem_verse_price");
            $table->text("mem_verse_person_leaving_comment");
            $table->text("mem_verse_message");
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
        Schema::dropIfExists('mem_verses');
    }
}
