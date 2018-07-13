<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMobilsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mobils', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_mobil');
            $table->string('jenis_mobil');
            $table->string('no_plat');
            $table->integer('tahun_keluaran');
            $table->string('warna');
            $table->integer('kapasitas');
            $table->string('perseneling');
            $table->integer('stock');
            $table->integer('harga');
            $table->string('foto');
            $table->UnsignedInteger('merk_id');
            $table->foreign('merk_id')->references('id')->on('merks')->ondelete('cascade');

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
        Schema::dropIfExists('mobils');
    }
}
