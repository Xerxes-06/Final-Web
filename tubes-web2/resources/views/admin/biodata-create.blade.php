@extends('admin.layouts.base')

@section('title', 'Buat Biodata')

@section('content')
    <form enctype="multipart/form-data" method="POST" action="{{ route('admin.biodata.store') }}">
        @csrf
        <span class="title">Data Personal</span>
        <div class="fields">
            <div class="input-field">
                <label>Nama Lengkap</label>
                <input type="text" name="nama_lengkap" value="{{ old('nama_lengkap') }}"placeholder="Masukkan nama lengkap Anda">
                <span class="error-input">{{ $errors->first('nama_lengkap') }}</span>
            </div>

            <div class="input-field">
                <label>Nama Panggilan</label>
                <input type="text" name="nama_panggilan" value="{{ old('nama_panggilan') }}"placeholder="Masukkan nama panggilan Anda">
                <span class="error-input">{{ $errors->first('nama_panggilan') }}</span>
            </div>

            <div class="input-field">
                <label>Foto</label>
                <input type="file" name="foto" value="{{ old('foto') }}">
                <span class="error-input">{{ $errors->first('foto') }}</span>
            </div>

            <div class="input-field">
                <label>Status</label>
                <input type="text" name="status" value="{{ old('status') }}" placeholder="Masukkan status Anda">
                <span class="error-input">{{ $errors->first('status') }}</span>
            </div>

            <div class="input-field input-2">
                <label>Deskripsi</label>
                <input type="text" name="deskripsi" value="{{ old('deskripsi') }}" placeholder="Masukkan deskripsi diri Anda">
                <span class="error-input">{{ $errors->first('deskripsi') }}</span>
            </div>

            <div class="input-field">
                <label>NIM</label>
                <input type="text" name="nim" value="{{ old('nim') }}" placeholder="Masukkan NIM Anda">
                <span class="error-input">{{ $errors->first('nim') }}</span>
            </div>

            <div class="input-field">
                <label>Jurusan</label>
                <input type="text" name="jurusan" value="{{ old('jurusan') }}" placeholder="Masukkan jurusan Anda">
                <span class="error-input">{{ $errors->first('jurusan') }}</span>
            </div>

            <div class="input-field">
                <label>Fakultas</label>
                <input type="text" name="fakultas" value="{{ old('fakultas') }}" placeholder="Masukkan fakultas Anda">
                <span class="error-input">{{ $errors->first('fakultas') }}</span>
            </div>

            <div class="input-field">
                <label>Email</label>
                <input type="email" name="email" value="{{ old('email') }}" placeholder="Masukkan alamat email Anda">
                <span class="error-input">{{ $errors->first('email') }}</span>
            </div>

            <div class="input-field">
                <label>Tanggal Lahir</label>
                <input type="date" name="tgl_lahir" value="{{ old('tgl_lahir') }}">
                <span class="error-input">{{ $errors->first('tgl_lahir') }}</span>
            </div>

            <div class="input-field">
                <label>Jenis Kelamin</label>
                <input type="text" name="jenis_kelamin" value="{{ old('jenis_kelamin') }}" placeholder="Masukkan jenis kelamin Anda">
                <span class="error-input">{{ $errors->first('jenis_kelamin') }}</span>
            </div>

            <div class="input-field">
                <label>Agama</label>
                <input type="text" name="agama" value="{{ old('agama') }}" placeholder="Masukkan agama Anda">
                <span class="error-input">{{ $errors->first('agama') }}</span>
            </div>

            <div class="input-field">
                <label>Kewarganegaraan</label>
                <input type="text" name="kewarganegaraan" value="{{ old('kewarganegaraan') }}" placeholder="Masukkan kewarganegaraan Anda">
                <span class="error-input">{{ $errors->first('kewarganegaraan') }}</span>
            </div>

            <div class="input-field">
                <label>Cita - Cita</label>
                <input type="text" name="cita_cita" value="{{ old('cita_cita') }}" placeholder="Masukkan cita-cita Anda">
                <span class="error-input">{{ $errors->first('cita_cita') }}</span>
            </div>

            <div class="input-field input-2">
                <label>Alamat</label>
                <input type="text" name="alamat" value="{{ old('alamat') }}" placeholder="Masukkan alamat Anda">
                <span class="error-input">{{ $errors->first('alamat') }}</span>
            </div>

            <div class="input-field">
                <label>Nomor Telepon</label>
                <input type="text" name="no_hp" value="{{ old('no_hp') }}" placeholder="Masukkan nomor telepon Anda">
                <span class="error-input">{{ $errors->first('no_hp') }}</span>
            </div>
        </div>
        <hr>
        <span class="title">Pendidikan</span>
        <div class="fields">
            <div class="input-field">
                <label>Taman Kanak - Kanak</label>
                <input type="text" name="tk" value="{{ old('tk') }}" placeholder="Masukkan nama TK Anda">
                <span class="error-input">{{ $errors->first('tk') }}</span>
            </div>

            <div class="input-field">
                <label>Sekolah Dasar</label>
                <input type="text" name="sd" value="{{ old('sd') }}" placeholder="Masukkan nama SD Anda">
                <span class="error-input">{{ $errors->first('sd') }}</span>
            </div>

            <div class="input-field">
                <label>Sekolah Menengah Pertama</label>
                <input type="text" name="smp" value="{{ old('smp') }}" placeholder="Masukkan nama SMP Anda">
                <span class="error-input">{{ $errors->first('smp') }}</span>
            </div>

            <div class="input-field">
                <label>Sekolah Menengah Atas</label>
                <input type="text" name="sma" value="{{ old('sma') }}" placeholder="Masukkan nama SMA Anda">
                <span class="error-input">{{ $errors->first('sma') }}</span>
            </div>

            <div class="input-field input-2">
                <label>Perguruan Tinggi</label>
                <input type="text" name="kuliah" value="{{ old('kuliah') }}" placeholder="Masukkan nama Perguruan Tinggi Anda">
                <span class="error-input">{{ $errors->first('kuliah') }}</span>
            </div>
        </div>
        <hr>
        <span class="title">Data Orang Tua / Wali</span>
        <div class="fields">
            <div class="input-field">
                <label>Nama Ayah / Wali</label>
                <input type="text" name="nama_ayah" value="{{ old('nama_ayah') }}" placeholder="Masukkan nama ayah atau wali Anda">
                <span class="error-input">{{ $errors->first('nama_ayah') }}</span>
            </div>

            <div class="input-field">
                <label>Nama Ibu / Wali</label>
                <input type="text" name="nama_ibu" value="{{ old('nama_ibu') }}" placeholder="Masukkan nama ibu atau wali Anda">
                <span class="error-input">{{ $errors->first('nama_ibu') }}</span>
            </div>

            <div class="input-field">
                <label>Pekerjaan Ayah / Wali</label>
                <input type="text" name="pekerjaan_ayah" value="{{ old('pekerjaan_ayah') }}" placeholder="Masukkan pekerjaan ayah atau wali Anda">
                <span class="error-input">{{ $errors->first('pekerjaan_ayah') }}</span>
            </div>

            <div class="input-field">
                <label>Pekerjaan Ibu / Wali</label>
                <input type="text" name="pekerjaan_ibu" value="{{ old('pekerjaan_ibu') }}" placeholder="Masukkan pekerjaan ibu atau wali Anda">
                <span class="error-input">{{ $errors->first('pekerjaan_ibu') }}</span>
            </div>

            <div class="input-field input-2">
                <label>Alamat Orang Tua / Wali</label>
                <input type="text" name="alamat_ortu" value="{{ old('alamat_ortu') }}" placeholder="Masukkan alamat orang tua atau wali Anda">
                <span class="error-input">{{ $errors->first('alamat_ortu') }}</span>
            </div>
        </div>
        <button class="btn">Tambah</button>
    </form>
@endsection