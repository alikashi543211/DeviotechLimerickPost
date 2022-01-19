<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mems', function (Blueprint $table) {
            $table->id();
            $table->string('auto_Date')->nullable();
            $table->string('admin_name')->nullable();
            $table->string('type_1')->nullable();
            $table->string('insertion_Date_Mems')->nullable();
            $table->string('first_name')->nullable();
            $table->string('surname')->nullable();
            $table->string('aniversary_number')->nullable();
            $table->string('aniversary_date')->nullable();
            $table->string('deceased_add1')->nullable();
            $table->string('deceased_add2')->nullable();
            $table->string('opening')->nullable();
            $table->string('New_Ref_no')->nullable();
            $table->string('Opening_cost')->nullable();
            $table->string('contact_name')->nullable();
            $table->string('Tel_no')->nullable();
            $table->string('Email_address')->nullable();
            $table->string('pick_issue_date')->nullable();
            $table->string('date_time_mems')->nullable();
            $table->string('chruch_mems')->nullable();
            $table->string('verse_contact_name')->nullable();
            $table->string('verse_tel_no')->nullable();
            $table->string('verse_email_address')->nullable();
            $table->string('pro_lib')->nullable();
            $table->string('first_verse_words')->nullable();
            $table->string('provided_verse_cost')->nullable();
            $table->string('message_type')->nullable();
            $table->string('leaving_verse_person')->nullable();
            $table->string('add_img')->nullable();
            $table->string('two_inches')->nullable();
            $table->string('total_number_2')->nullable();
            $table->string('total_cost_2')->nullable();
            $table->string('one_inches')->nullable();
            $table->string('total_number_1')->nullable();
            $table->string('total_cost_1')->nullable();
            $table->string('verses_permit')->nullable();
            $table->string('spcl_ins_permit_mems')->nullable();
            $table->longText('spcl_ins_free_mems')->nullable();
            $table->string('total_words')->nullable();
            $table->string('Pictures_total')->nullable();
            $table->string('verse_total')->nullable();
            $table->string('Total_amount_1_mems')->nullable();
            $table->string('discount_mems')->nullable();
            $table->string('mems_discount_type')->nullable();
            $table->string('mems_discount_rate')->nullable();
            $table->string('mems_discount_amount')->nullable();
            $table->string('final_cost_mems')->nullable();
            $table->string('payment_method')->nullable();
            $table->string('Receipt_number')->nullable();
            $table->string('Booking_number')->nullable();
            $table->string('counter_taken')->nullable();
            $table->string('machine_no')->nullable();
            $table->string('CC_Receipt_number')->nullable();
            $table->string('m_c_no')->nullable();
            $table->string('comment')->nullable();
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
        Schema::dropIfExists('mems');
    }
}
