<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRiwayatKinerjasTable extends Migration
{
    public function up()
    {
        Schema::create('riwayat_kinerjas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('guru_id')->constrained('gurus')->onDelete('cascade');
            $table->string('semester');
            $table->string('tahun_ajaran');
            $table->integer('nilai_kinerja');
            $table->text('catatan')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('riwayat_kinerjas');
    }
}
