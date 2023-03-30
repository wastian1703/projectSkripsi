<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pesan_services', function (Blueprint $table) {
            $table->id();
            $table->string("jum_unit");
            $table->string("merk_ac");
            $table->string("kerusakan");
            $table->string("jenis_bangunan");
            $table->string("hp_konsumen");
            $table->string("pemilik");
            $table->string("alamat");
            $table->string("tgl_servis");
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
        Schema::dropIfExists('pesan_services');
    }
};
