<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ModifyPurchasingListTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchasingList', function (Blueprint $table) {
            $table->id();
            $table->integer('merchandiseid');
            $table->integer('amount');
            $table->integer('price');
            $table->string('supplier', 100);
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
        Schema::table('purchasingList', function (Blueprint $table) {
            //
        });
    }
}
