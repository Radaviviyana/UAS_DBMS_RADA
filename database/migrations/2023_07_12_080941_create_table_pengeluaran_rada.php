<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTablePengeluaranRada extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_pengeluaran_rada', function (Blueprint $table) {
            $table->string('nobk',10)->primary();
            $table->date('tanggal')->nullable();
            $table->date('noreff')->nullable();
            $table->string('bagianid',10)->nullable();
            $table->string('petugasid',5)->nullable();
            $table->string('keterangan',50)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_pengeluaran_rada');
    }
}
