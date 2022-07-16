@extends('admin.layouts.base')

@section('title', 'Dashboard')

@section('content')
    <ul class="box-info">
        <li>
            <i class='bx bx-group' ></i>
            <span class="text">
                <p>Jumlah Anggota</p>
                <h3>5 Orang</h3>
            </span>
        </li>
        <li>
            <i class='bx bx-user'></i>
            <span class="text space">
                <p>3 Laki-laki</p>
                <p>2 Perempuan</p>
            </span>
        </li>
        <a href="{{ route('admin.biodata.create') }}">
            <li>
                <i class='bx bx-add-to-queue' ></i>
                <span class="text">
                    <p>Tambah Data</p>
                    <h3>Anggota</h3>
                </span>
            </li>
        </a>
    </ul>

    @if(session()->has('success'))
        <div class="success-action">
            {{ session('success') }}
        </div>
    @endif
    <div class="table-data">
        <div class="order">
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nama Lengkap</th>
                        <th>NIM</th>
                        <th>Alamat Email</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($biodatas as $biodata)
                        <tr>
                            <td>{{ $biodata->id }}</td>
                            <td>{{ $biodata->nama_lengkap }}</td>
                            <td>{{ $biodata->nim }}</td>
                            <td>{{ $biodata->email }}</td>
                            <td>
                                <a href="{{ route('admin.biodata.show', $biodata->id) }}"><i class='bx bx-show primary'></i></a>
                                <a href="{{ route('admin.biodata.edit', $biodata->id) }}"><i class='bx bx-edit-alt warning'></i></a>
                                <form method="POST" action="{{ route('admin.biodata.destroy', $biodata->id) }}">
                                    @method('delete')
                                    @csrf
                                    <button type="submit"><i class='bx bx-trash danger'></i></button>
                                </form>
                            </td>
                        </tr>    
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection