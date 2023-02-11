@extends('layouts.dashboard')

@section('content')
    <div class="row justify-content-center">
        <div class="col-lg-6 border border-2 rounded bg-light shadow-lg mx-3 mb-5 p-3">
            <div class="text-center">
                <img src="/assets/img/logo-full.png" alt="Logo SMKN 1 Bantul" class="img-fluid w-75 mt-3">
            </div>
            <p class="text-center mt-3">
                Temukan barang impianmu dengan harga terbaik di Go-Auction. Lelang mudah,
                transparan, dan terpercaya. Nikmati proses lelang yang menyenangkan dan dapatkan
                harga terbaik bagi barang yang Anda inginkan. Ayo bergabung dan raih kesempatanmu
                sekarang!
            </p>
            <p class="text-center">
                Email: go-auction@google.com
                <br>
                Telp: (0274) 367156
            </p>
        </div>

        <div class="col-lg-5 border border-2 rounded bg-light mb-5 p-3 align-content-center shadow-lg">
            <div class="row">
                {{-- MURID --}}
                <div class="bg-primary rounded text-white pt-3 mb-3 w-100">
                    <div class="row">
                        <div class="col-7 offset-1">
                            <h5>Total User</h5>
                            <p>{{ $userCount }} User</p>
                        </div>
                        <div class="col-4">
                            <div class="text-center">
                                <img src="/assets/img/masyarakat.png" alt="User" class="img-fluid dashboard-icon">
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Guru --}}
                <div class="bg-warning rounded text-white pt-3 mb-3 w-100">
                    <div class="row">
                        <div class="col-7 offset-1">
                            <h5>Jumlah Petugas</h5>
                            <p>{{ $petugasCount }} Petugas</p>
                        </div>
                        <div class="col-4">
                            <div class="text-center">
                                <img src="/assets/img/petugas.png" alt="Petuags" class="img-fluid dashboard-icon">
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Kelas --}}
                <div class="bg-danger rounded text-white pt-3 mb-3 w-100">
                    <div class="row">
                        <div class="col-7 offset-1">
                            <h5>Jumlah Lelang (Dibuka)</h5>
                            <p>{{ $lelangCount }} Lelang</p>
                        </div>
                        <div class="col-4">
                            <div class="text-center">
                                <img src="/assets/img/lelang.png" alt="Lelang" class="img-fluid dashboard-icon">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
