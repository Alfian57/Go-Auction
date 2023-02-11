<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function index()
    {
        return view('barang.index', [
            'barang' => Barang::latest()->get(),
            'title' => 'Daftar Barang',
            'header' => 'Data Barang',
        ]);
    }

    public function create()
    {
        return view('barang.create', [
            'title' => 'Tambah Barang',
            'header' => 'Tambah Barang',
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama_15458' => 'required|max:255',
            'harga_awal_15458' => 'required',
            'deskripsi_15458' => 'required',
            'image_15458' => 'required|image'
        ]);
        $validatedData['tanggal_15458'] = now();
        $validatedData['image_15458'] = $request->file('image_15458')->store('barang-image');

        Barang::create($validatedData);
        toast('Data Baru Telah Ditambahkan', 'success');

        return redirect()->route('barang.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        return view('barang.edit', [
            'title' => 'Edit Barang',
            'header' => 'Edit Barang',
            'barang' => Barang::where('id_15458', $id)->firstOrFail()
        ]);
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'nama_15458' => 'required|max:255',
            'harga_awal_15458' => 'required',
            'deskripsi_15458' => 'required',
        ]);

        Barang::where('id_15458', $id)->update($validatedData);
        toast('Data Telah Diperbarui', 'success');

        return redirect()->route('barang.index');
    }

    public function destroy($id)
    {
        Barang::where('id_15458', $id)->delete();
        toast('Data Berhasil Dihapus', 'success');

        return redirect()->route('barang.index');
    }
}