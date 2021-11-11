<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ModifyMerchandiseListTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('merchandiseList', function (Blueprint $table) {
            $table->id();
            $table->integer('merchandiseid');
            $table->string('name', 100);
            $table->string('maker', 100);
            $table->integer('price');
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
        Schema::table('merchandiseList', function (Blueprint $table) {
            //
        });
    }
}
