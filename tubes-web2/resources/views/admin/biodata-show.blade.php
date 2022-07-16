@extends('admin.layouts.base')

@section('title', 'Profile')

@section('content')
    <div class="bio">
        <div class="bio-img">
            <img src="{{ asset('storage/foto/'.$biodata->foto) }}" />
        </div>
        <div class="bio-section">
            <div class="bio-title">
                <h1>{{ $biodata->nama_lengkap }}</h1>
                <h3>{{ $biodata->status }}</h3>
            </div>
            <p class="bio-subtitle">{{ $biodata->deskripsi }}</p>
            <div class="bio-content">
                <div class="bio-sticky">
                    <div class="bio-tab">
                        <p class="bio-tab-filter bio-active">Biodata</p>
                        <p class="bio-tab-filter">Pendidikan</p>
                        <p class="bio-tab-filter">Data Keluarga</p>
                    </div>
                    <div class="bio-indicator">
                        <div></div>
                    </div>
                </div>
                <div class="bio-data">
                    <div class="bio-data-personal bio-active">
                        <div>
                            <p class="question">Nama Lengkap</p>
                            <p class="answer">{{ $biodata->nama_lengkap }}</p>
                        </div>
                        <div>
                            <p class="question">Nama Panggilan</p>
                            <p class="answer">{{ $biodata->nama_panggilan }}</p>
                        </div>
                        <div>
                            <p class="question">Status</p>
                            <p class="answer">{{ $biodata->status }}</p>
                        </div>
                        <div>
                            <p class="question">NIM</p>
                            <p class="answer">{{ $biodata->nim }}</p>
                        </div>
                        <div>
                            <p class="question">Jurusan</p>
                            <p class="answer">{{ $biodata->jurusan }}</p>
                        </div>
                        <div>
                            <p class="question">Fakultas</p>
                            <p class="answer">{{ $biodata->fakultas }}</p>
                        </div>
                        <div>
                            <p class="question">Alamat Email</p>
                            <p class="answer">{{ $biodata->email }}</p>
                        </div>
                        <div>
                            <p class="question">Jenis Kelamin</p>
                            <p class="answer">{{ $biodata->jenis_kelamin }}</p>
                        </div>
                        <div>
                            <p class="question">Agama</p>
                            <p class="answer">{{ $biodata->agama }}</p>
                        </div>                        
                        <div>
                            <p class="question">Kewarganegaraan</p>
                            <p class="answer">{{ $biodata->kewarganegaraan }}</p>
                        </div>
                        <div>
                            <p class="question">Cita - Cita</p>
                            <p class="answer">{{ $biodata->cita_cita }}</p>
                        </div>
                        <div>
                            <p class="question">Alamat</p>
                            <p class="answer">{{ $biodata->alamat }}</p>
                        </div>
                        <div>
                            <p class="question">No. HP</p>
                            <p class="answer">{{ $biodata->no_hp }}</p>
                        </div>
                    </div>
                    <div class="bio-data-pendidikan">
                        <div>
                            <p class="question">Taman Kanak Kanak</p>
                            <p class="answer">{{ $biodata->tk }}</p>
                        </div>
                        <div>
                            <p class="question">Sekolah Dasar</p>
                            <p class="answer">{{ $biodata->sd }}</p>
                        </div>
                        <div>
                            <p class="question">Sekolah Menengah Pertama</p>
                            <p class="answer">{{ $biodata->smp }}</p>
                        </div>
                        <div>
                            <p class="question">Sekolah Menengah Atas</p>
                            <p class="answer">{{ $biodata->sma }}</p>
                        </div>
                        <div>
                            <p class="question">Perguruan Tinggi</p>
                            <p class="answer">{{ $biodata->kuliah }}</p>
                        </div>
                    </div>
                    <div class="bio-data-keluarga">
                        <div>
                            <p class="question">Nama Ayah</p>
                            <p class="answer">{{ $biodata->nama_ayah }}</p>
                        </div>
                        <div>
                            <p class="question">Nama Ibu</p>
                            <p class="answer">{{ $biodata->nama_ibu }}</p>
                        </div>
                        <div>
                            <p class="question">Pekerjaan Ayah</p>
                            <p class="answer">{{ $biodata->pekerjaan_ayah }}</p>
                        </div>
                        <div>
                            <p class="question">Pekerjaan Ibu</p>
                            <p class="answer">{{ $biodata->pekerjaan_ibu }}</p>
                        </div>
                        <div>
                            <p class="question">Alamat</p>
                            <p class="answer">{{ $biodata->alamat_ortu }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection