<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('images', function (Blueprint $table) {
            $table->id();
            $table->foreignId('acknowledge_id')->nullable()->references('id')->on('acknowledges')->constrained()->onDelete('cascade');
            $table->foreignId('meme_id')->nullable()->references('id')->on('mems')->constrained()->onDelete('cascade');
            $table->string('img_type_1_ack')->nullable();
            $table->string('img_cost_1_ack')->nullable();
            $table->string('img_type_2_ack')->nullable();
            $table->string('img_cost_2_ack')->nullable();

            $table->string('img_type_1')->nullable();
            $table->string('img_cost_1')->nullable();
            $table->string('img_type_2')->nullable();
            $table->string('img_cost_2inch')->nullable();
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
        Schema::dropIfExists('images');
    }
}
