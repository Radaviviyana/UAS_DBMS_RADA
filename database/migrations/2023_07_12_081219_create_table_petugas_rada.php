<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTablePetugasRada extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_petugas_rada', function (Blueprint $table) {
            $table->integer('petugasid')->primary();
            $table->string('namapetugas',35)->nullable();
            $table->string('alamat',45)->nullable();
            $table->string('handphone',15)->nullable();
            $table->string('password',10)->nullable();
            $table->string('level',20)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_petugas_rada');
    }
}
