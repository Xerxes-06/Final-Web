<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Biodata;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class DashboardController extends Controller
{
    public function index()
    {
        $biodatas = Biodata::all();
        return view('admin.dashboard', ['biodatas' => $biodatas]);
    }

    public function create()
    {
        return view('admin.biodata-create');
    }

    public function edit($id)
    {
        $biodata = Biodata::find($id);
        return view('admin.biodata-edit', ['biodata' => $biodata]);
    }

    public function store(Request $request)
    {
        $data = $request->except('_token');
        $request->validate([
            'nama_lengkap' => 'required|string',
            'nama_panggilan' => 'required|string',
            'foto' => 'required|image|mimes:jpeg,jpg,png',
            'status' => 'required|string',
            'deskripsi' => 'required|string',
            'nim' => 'required|string',
            'jurusan' => 'required|string',
            'fakultas' => 'required|string',
            'email' => 'required|string',
            'tgl_lahir' => 'required|string',
            'jenis_kelamin' => 'required|string',
            'agama' => 'required|string',
            'kewarganegaraan' => 'required|string',
            'cita_cita' => 'required|string',
            'alamat' => 'required|string',
            'no_hp' => 'required|string',

            'tk' => 'required|string',
            'sd' => 'required|string',
            'smp' => 'required|string',
            'sma' => 'required|string',
            'kuliah' => 'required|string',

            'nama_ayah' => 'required|string',
            'nama_ibu' => 'required|string',
            'pekerjaan_ayah' => 'required|string',
            'pekerjaan_ibu' => 'required|string',
            'alamat_ortu' => 'required|string',
        ]);

        $foto = $request->foto;
        $originalFoto = Str::random(10) . $foto->getClientOriginalName();
        $foto->storeAs('public/foto', $originalFoto);
        $data['foto'] = $originalFoto;

        Biodata::create($data);

        return redirect()->route('admin.dashboard')->with('success', 'Biodata berhasil ditambah');
    }

    public function update(Request $request, $id)
    {
        $data = $request->except('_token');
        $request->validate([
            'nama_lengkap' => 'required|string',
            'nama_panggilan' => 'required|string',
            'foto' => 'image|mimes:jpeg,jpg,png',
            'status' => 'required|string',
            'deskripsi' => 'required|string',
            'nim' => 'required|string',
            'jurusan' => 'required|string',
            'fakultas' => 'required|string',
            'email' => 'required|string',
            'tgl_lahir' => 'required|string',
            'jenis_kelamin' => 'required|string',
            'agama' => 'required|string',
            'kewarganegaraan' => 'required|string',
            'cita_cita' => 'required|string',
            'alamat' => 'required|string',
            'no_hp' => 'required|string',

            'tk' => 'required|string',
            'sd' => 'required|string',
            'smp' => 'required|string',
            'sma' => 'required|string',
            'kuliah' => 'required|string',

            'nama_ayah' => 'required|string',
            'nama_ibu' => 'required|string',
            'pekerjaan_ayah' => 'required|string',
            'pekerjaan_ibu' => 'required|string',
            'alamat_ortu' => 'required|string',
        ]);

        $biodata = Biodata::find($id);

        if ($request->foto) {
            $foto = $request->foto;
            $originalFotoName = Str::random(10) . $foto->getClientOriginalName();
            $foto->storeAs('public/foto/', $originalFotoName);
            $data['foto'] = $originalFotoName;

            Storage::delete('public/foto/' . $biodata->foto);
        }

        $biodata->update($data);

        return redirect()->route('admin.dashboard')->with('success', 'Biodata berhasil disimpan');
    }

    public function destroy($id)
    {
        Biodata::find($id)->delete();
        return redirect()->route('admin.dashboard')->with('success', 'Biodata berhasil dihapus');
    }

    public function show($id)
    {
        $biodata = Biodata::find($id);
        return view('admin.biodata-show', ['biodata' => $biodata]);
    }

    public function about()
    {
        return view('admin.about');
    }

    public function profile($id)
    {
        $biodata = Biodata::find($id);
        return view('admin.profile', ['biodata' => $biodata]);
    }
}
