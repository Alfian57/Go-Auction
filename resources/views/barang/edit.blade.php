@extends('layouts.dashboard')

@section('content')
    <div class="page-inner mt--3">
        <form action="{{ route('barang.update', ['barang' => $barang->id_15458]) }}" method="post">
            @method('put')
            @csrf
            <div class="form-group">
                <label for="nama_15458">Nama</label>
                <input type="text" class="form-control @error('nama_15458') is-invalid @enderror" id="nama_15458"
                    name="nama_15458" placeholder="Masukan Nama Barang" value="{{ old('nama_15458', $barang->nama_15458) }}"
                    required autofocus>
                @error('nama_15458')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="form-group">
                <label for="harga_awal_15458">Harga Awal</label>
                <input type="number" class="form-control @error('harga_awal_15458') is-invalid @enderror"
                    id="harga_awal_15458" name="harga_awal_15458" placeholder="Masukan Harga Awal"
                    value="{{ old('harga_awal_15458', $barang->harga_awal_15458) }}" required>
                @error('harga_awal_15458')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="form-group">
                <label for="deskripsi_15458">Deskripsi</label>
                <textarea class="form-control" id="deskripsi_15458" name="deskripsi_15458" rows="3"
                    placeholder="Masukan Deskripsi" required>{{ old('deskripsi_15458', $barang->deskripsi_15458) }}</textarea>
                @error('deskripsi_15458')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="row justify-content-end">
                <a href="{{ route('barang.index') }}" class="btn btn-sm btn-round btn-danger mx-1">Kembali</a>
                <button type="submit" class="btn btn-sm btn-round btn-success mx-1">Submit</button>
            </div>
        </form>
    </div>
@endsection
