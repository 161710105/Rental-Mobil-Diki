<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama');
            $table->text('alamat');
            $table->string('no_nik');
            $table->string('no_hp');
            $table->UnsignedInteger('mobil_id');
            $table->foreign('mobil_id')->references('id')->on('mobils')->ondelete('cascade');

            $table->UnsignedInteger('supir_id');
            $table->foreign('supir_id')->references('id')->on('supirs')->ondelete('cascade');
            $table->date('tanggal_pengambilan');
            $table->date('tanggal_pengembalian');
            $table->integer('jumlah_hari');
            $table->integer('total_harga');
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
        Schema::dropIfExists('bookings');
    }
}
