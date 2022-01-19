<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProvidedVersesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('provided_verses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('meme_id')->nullable()->references('id')->on('mems')->constrained()->onDelete('cascade');
            $table->integer("mems_pro_no_of_words");
            $table->double("mems_pro_cost_of_verse");
            $table->text("mems_pro_message_type_comment");
            $table->string("mems_pro_person_leaving_verse");
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
        Schema::dropIfExists('provided_verses');
    }
}
