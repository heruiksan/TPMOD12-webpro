<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    public function index()
    {
        $pegawais = Pegawai::all();
        return view('pegawai', ['pegawais' => $pegawais]);
    }

    public function edit($id) 
    {
        $pegawai = Pegawai::find($id);
        return view('edit', compact('pegawai')); 
    }

    public function update(Request $request)
    {
        // Validasi input
        $validated = $request->validate([
            'name' => 'required',
            'posisi' => 'required',
            'gaji' => 'required|integer'
        ]);

        // Ambil data dari input
        $id = $request->input('id'); 
        $name = $request->input('name');
        $posisi = $request->input('posisi'); 
        $gaji = $request->input('gaji');
        
        // Lakukan update data
        $pegawai = Pegawai::findOrFail($id);
        $pegawai->name = $name;
        $pegawai->posisi = $posisi;
        $pegawai->gaji = $gaji;     
        $pegawai->save();

        // Redirect
        return redirect('/')->with('status','Data Pegawai berhasil diupdate!');

    }
}
