<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Biodata extends Model
{
    use HasFactory;

    protected $table = 'biodatas';
    protected $fillable = [
        // Biodata
        'nama_lengkap',
        'nama_panggilan',
        'foto',
        'status',
        'deskripsi',
        'nim',
        'jurusan',
        'fakultas',
        'email',
        'tgl_lahir',
        'jenis_kelamin',
        'agama',
        'kewarganegaraan',
        'cita_cita',
        'alamat',
        'no_hp',

        // Pendidikan
        'tk',
        'sd',
        'smp',
        'sma',
        'kuliah',

        // Data Orang Tua
        'nama_ayah',
        'nama_ibu',
        'pekerjaan_ayah',
        'pekerjaan_ibu',
        'alamat_ortu'
    ];
}
