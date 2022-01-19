<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAcknowledgesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('acknowledges', function (Blueprint $table) {
            $table->id();
            $table->string('auto_Date')->nullable();
            $table->string('admin_name')->nullable();
            $table->string('type_1')->nullable();
            $table->string('Insertion_Date_Ack')->nullable();
            $table->string('deceased_name')->nullable();
            $table->string('address')->nullable();
            $table->string('contactName')->nullable();
            $table->string('telNumber')->nullable();
            $table->string('emailAddress')->nullable();
            $table->string('date_time_ack')->nullable();
            $table->longText('message')->nullable();
            $table->string('wordCount')->nullable();
            $table->string('wordCost')->nullable();
            $table->string('add_img_ack')->nullable();
            $table->string('size_ack')->nullable();
            $table->string('total_number_1_ack')->nullable();
            $table->string('images_cost_1_ack')->nullable();
            $table->string('total_number_2_ack')->nullable();
            $table->string('images_cost_2_ack')->nullable();
            $table->string('spcl_ins_permit_ack')->nullable();
            $table->longText('spcl_ins_free_ack')->nullable();
            $table->string('wordsCost')->nullable();
            $table->string('picCost')->nullable();
            $table->string('Total_amount_1_ack')->nullable();
            $table->string('discount_ack')->nullable();
            $table->string('discount_type')->nullable();
            $table->string('discount_rate')->nullable();
            $table->string('discount_amount')->nullable();
            $table->string('final_cost_ack')->nullable();
            $table->string('chruch_ack')->nullable();
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
        Schema::dropIfExists('acknowledges');
    }
}
