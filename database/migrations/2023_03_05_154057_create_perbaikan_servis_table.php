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
        Schema::create('perbaikan_servis', function (Blueprint $table) {
            $table->id();
            $table->string("nam_teknisi");
            $table->string("merk_ac");
            $table->string("hp_teknisi");
            $table->string("kerusakan");
            $table->string("lok_servis");
            $table->string("hp_konsumen");
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
        Schema::dropIfExists('perbaikan_servis');
    }
};
