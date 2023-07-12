<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableBagianRada extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_bagian_rada', function (Blueprint $table) {
            $table->string('bagianid',10)->primary();
            $table->string('namabagian',45)->nullable();
            $table->string('kepalabagian',45)->nullable();
            $table->string('telp',45)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_bagian_rada');
    }
}
