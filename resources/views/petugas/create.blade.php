@extends('layouts.dashboard')

@section('content')
    <div class="page-inner mt--3">
        <form action="{{ route('petugas.store') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="nama_15458">Nama</label>
                <input type="text" class="form-control @error('nama_15458') is-invalid @enderror" id="nama_15458"
                    name="nama_15458" placeholder="Masukan Nama Lengkap" value="{{ old('nama_15458') }}" required autofocus>
                @error('nama_15458')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="form-group">
                <label for="username_15458">Username</label>
                <input type="text" class="form-control @error('username_15458') is-invalid @enderror" id="username_15458"
                    name="username_15458" placeholder="Masukan Username" value="{{ old('username_15458') }}" required>
                @error('username_15458')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="form-group">
                <label for="id_level_15458">Level</label>
                <select class="form-control text-capitalize" id="id_level_15458" name="id_level_15458" required>
                    @foreach ($level as $item)
                        @if ($item->id_15458 == old('id_level_15458'))
                            <option value="{{ $item->id_15458 }}" class="text-capitalize" selected>{{ $item->nama_15458 }}
                            </option>
                        @else
                            <option value="{{ $item->id_15458 }}" class="text-capitalize">{{ $item->nama_15458 }}</option>
                        @endif
                    @endforeach
                </select>
                @error('id_level_15458')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="row justify-content-end">
                <a href="{{ route('petugas.index') }}" class="btn btn-sm btn-round btn-danger mx-1">Kembali</a>
                <button type="submit" class="btn btn-sm btn-round btn-success mx-1">Submit</button>
            </div>
        </form>
    </div>
@endsection
