<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTablePengeluaranitemRada extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_pengeluaranitem_rada', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->string('nobk',10)->nullable();
            $table->string('barangid',10)->nullable();
            $table->integer('jumlah')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_pengeluaranitem_rada');
    }
}
