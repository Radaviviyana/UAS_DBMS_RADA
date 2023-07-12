<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableBarangRada extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_barang_rada', function (Blueprint $table) {
            $table->string('bagianid',10)->primary();
            $table->string('namabarang',45)->nullable();
            $table->string('satuan',45)->nullable();
            $table->string('harga',45)->nullable();
            $table->string('kategoriid',5)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_barang_rada');
    }
}
