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
        Schema::create('biodatas', function (Blueprint $table) {
            $table->id();

            // Biodata
            $table->string('nama_lengkap');
            $table->string('nama_panggilan');
            $table->string('foto');
            $table->string('status');
            $table->text('deskripsi');
            $table->string('nim');
            $table->string('jurusan');
            $table->string('fakultas');
            $table->string('email');
            $table->date('tgl_lahir');
            $table->string('jenis_kelamin');
            $table->string('agama');
            $table->string('kewarganegaraan');
            $table->string('cita_cita');
            $table->string('alamat');
            $table->string('no_hp');

            // Pendidikan
            $table->string('tk');
            $table->string('sd');
            $table->string('smp');
            $table->string('sma');
            $table->string('kuliah');

            // Data Orang Tua
            $table->string('nama_ayah');
            $table->string('nama_ibu');
            $table->string('pekerjaan_ayah');
            $table->string('pekerjaan_ibu');
            $table->string('alamat_ortu');

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
        Schema::dropIfExists('biodatas');
    }
};
