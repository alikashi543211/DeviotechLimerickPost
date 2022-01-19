<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterMemsTableForChangeInIsActiveDefaultOne extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('is_active_default_one', function (Blueprint $table) {
            DB::statement("ALTER TABLE `mems` CHANGE `is_active` `is_active` TINYINT(1) NOT NULL DEFAULT '1'");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('is_active_default_one', function (Blueprint $table) {
            //
        });
    }
}
