<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGurusTable extends Migration
{
    public function up()
    {
        Schema::create('gurus', function (Blueprint $table) {
            $table->id();
            $table->string('nama_lengkap');
            $table->string('nip')->unique()->nullable(); // Nomor Induk Pegawai
            $table->string('email')->unique()->nullable();
            $table->string('jenis_kelamin'); // misal: L / P
            $table->string('mata_pelajaran'); // mapel yg diampu
            $table->date('tanggal_lahir')->nullable();
            $table->string('alamat')->nullable();
            $table->string('telepon')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('gurus');
    }
}
