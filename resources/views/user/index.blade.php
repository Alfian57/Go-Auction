<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Go Auction - Home</title>

    <!-- icon -->
    <link rel="icon" href="/assets/img/logo.png" type="image/x-icon" />

    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">

    <!-- bootstrap css -->
    <link rel="stylesheet" type="text/css" href="/assets/masyarakat/css/bootstrap.min.css">

    <!-- style css -->
    <link rel="stylesheet" type="text/css" href="/assets/masyarakat/css/style.css">

    <!-- Responsive-->
    <link rel="stylesheet" href="/assets/masyarakat/css/responsive.css">

    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="/assets/masyarakat/css/jquery.mCustomScrollbar.min.css">
</head>

<body>
    @include('sweetalert::alert')

    <!--header section start -->
    <div class="header_section">
        <div class="container">
            <nav class="navbar navbar-dark bg-dark">
                <a class="logo" href="#">
                    <img src="/assets/img/logo-full.png">
                </a>
                <div class="d-flex">
                    <ul>
                        <li>
                            <form action="{{ route('logout') }}" method="post">
                                @csrf
                                <button type="submit" class="btn btn-danger border-0">Logout</button>
                            </form>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <!--banner section start -->
        <div class="banner_section layout_padding">
            <div id="my_slider" class="carousel slide" data-ride="carousel">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="taital_main">
                                <h4 class="banner_taital">
                                    Go-Auction
                                </h4>
                                <p class="banner_text">
                                    Temukan barang impianmu dengan harga terbaik di Go-Auction. Lelang mudah,
                                    transparan, dan terpercaya. Nikmati proses lelang yang menyenangkan dan dapatkan
                                    harga terbaik bagi barang yang Anda inginkan. Ayo bergabung dan raih kesempatanmu
                                    sekarang!
                                </p>
                                <div class="book_bt">
                                    <a href="#list">Belanja Sekarang</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div>
                                <img src="/assets/img/illustrator.png" class="image_1">
                            </div>
                        </div>
                    </div>
                    <div class="button_main">
                        <form action="" method="get">
                            <button class="all_text">Semua</button>
                            <input type="text" class="Enter_text" placeholder="Masukan Kata Kunci" name="search"
                                value="{{ request('search') }}">
                            <button type="submit" class="search_text">Cari</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
        <!--banner section end -->
    </div>
    <!--header section end -->

    <!--category section start -->
    <div class="container bg-transparent">
        <h1 class="bed_text mt-5" id="list">List Barang Lelang</h1>
        @if ($lelang->isEmpty())
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <img src="/assets/img/empty-data.svg" alt="Illustration" class="img-fluid mt-5">
                    <h2 class="text-danger text-center mt-3">Data Barang Lelang Tidak Ada</h2>
                </div>
            </div>
        @endif
        <div class="category_section_2">
            <div class="row justify-content-center">
                @foreach ($lelang as $item)
                    {{-- Penawaran Modal --}}
                    <form
                        action="{{ route('penawaran', ['idLelang' => $item->id_15458, 'idBarang' => $item->barang->id_15458]) }}"
                        method="post">
                        @csrf
                        <div class="modal fade" id="penawaran-{{ $item->id_15458 }}" tabindex="-1"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">
                                            {{ $item->barang->nama_15458 }}
                                        </h1>
                                        <button type="button" class="btn-close" data-dismiss="modal"
                                            aria-label="Close">X</button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row justify-content-center align-middle">
                                            <div class="col-md-4">
                                                <img src="{{ asset('storage/' . $item->barang->image_15458) }}"
                                                    alt="Gambar Barang" class="img-thumbnail border-dark">
                                            </div>
                                            <div class="col-md-8">
                                                <span>{{ $item->barang->deskripsi_15458 }}</span>
                                                <br>
                                                <span class="text-primary">Minimal Penawaran:
                                                    {{ $min[$loop->index] }}</span>
                                            </div>
                                            <div class="form-group col-12">
                                                <label for="penawaran_15458"
                                                    class="form-label h3 text-dark mt-3">Penawaran</label>

                                                <input type="number" class="form-control" name="penawaran_15458"
                                                    id="penawaran_15458" placeholder="Masukan Nominal Penawaran"
                                                    min="{{ $min[$loop->index] }}" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger"
                                            data-dismiss="modal">Tutup</button>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>

                    {{-- History Modal --}}
                    <div class="modal fade" id="history-{{ $item->id_15458 }}" tabindex="-1"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">
                                        {{ $item->barang->nama_15458 }}
                                    </h1>
                                    <button type="button" class="btn-close" data-dismiss="modal"
                                        aria-label="Close">X</button>
                                </div>
                                <div class="modal-body">
                                    @if ($item->historyLelang->isEmpty())
                                        <h4 class="text-danger text-center">Belum Ada Penawaran</h4>
                                    @else
                                        <table class="table">
                                            <tr class="table-primary">
                                                <th>Nama</th>
                                                <th>Penawaran</th>
                                                <th>Tanggal</th>
                                            </tr>
                                            @foreach ($item->historyLelang as $subItem)
                                                <tr class="text-dark">
                                                    <td>{{ $subItem->masyarakat->nama_15458 }}</td>
                                                    <td>{{ $subItem->penawaran_15458 }}</td>
                                                    <td>{{ $subItem->created_at->format('d/m/Y') }}</td>
                                                </tr>
                                            @endforeach
                                        </table>
                                    @endif

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-12">
                        <div class="beds_section border rounded px-5">
                            <h1 class="bed_text">{{ $item->barang->nama_15458 }}</h1>
                            <div class="row">
                                <img src="{{ asset('storage/' . $item->barang->image_15458) }}" class="img-fluid">
                            </div>
                            <div class="row justify-content-center">
                                <a href="#" class="col-lg-5 mx-1 btn btn-card-history w-100 mt-3"
                                    data-toggle="modal" data-target="#history-{{ $item->id_15458 }}">
                                    Riwayat
                                </a>
                                <a href="#" class="col-lg-5 mx-1 btn btn-card-tawar btn-card w-100 mt-3"
                                    data-toggle="modal" data-target="#penawaran-{{ $item->id_15458 }}">
                                    Tawar
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- category section end -->

    <!-- footer section start -->
    <div class="footer_section layout_padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-sm-12">
                    <h4 class="information_text">Go-Auction</h4>
                    <p class="dummy_text">Selamat datang di Go-Auction, tempat dimana Anda dapat memenangkan barang
                        impianmu dengan harga terbaik. Kami adalah platform lelang online yang menawarkan proses lelang
                        yang mudah, transparan, dan terpercaya. Dengan interface yang user-friendly dan proses bid yang
                        lancar, Anda dapat memantau barang yang Anda incar tanpa harus terus menerus online.
                        Bergabunglah dengan kami sekarang dan raih kesempatanmu! </p>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="information_main">
                        <h4 class="information_text">Useful Links</h4>
                        <p class="many_text">Contrary to popular belief, Lorem Ipsum is not simply random text. It </p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="information_main">
                        <h4 class="information_text">Kontak Kami</h4>
                        <p class="call_text"><a href="#">+62 895363116378</a></p>
                        <p class="call_text"><a href="#">alfiangadingsaputra@gmail.com</a></p>
                        <div class="social_icon">
                            <ul>
                                <li><a href="https://www.linkedin.com/in/alfian-gading-saputra-ab2861221/"
                                        target="_blank"><img src="/assets/img/linkedin-icon.png"></a></li>
                                <li><a href="https://www.instagram.com/gading.57/" target="_blank"><img
                                            src="/assets/img/instagram-icon.png"></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright_section">
                <h1 class="copyright_text">
                    Copyright 2023 All Right Reserved <a href="https://alfian-gading.com"> Alfian Gading</a>
                </h1>
            </div>
        </div>
    </div>
    <!-- footer section end -->

    <!-- Javascript files-->
    <script src="/assets/masyarakat/js/jquery.min.js"></script>
    <script src="/assets/masyarakat/js/popper.min.js"></script>
    <script src="/assets/masyarakat/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/masyarakat/js/jquery-3.0.0.min.js"></script>
    <script src="/assets/masyarakat/js/plugin.js"></script>

    <!-- sidebar -->
    <script src="/assets/masyarakat/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="/assets/masyarakat/js/user.js"></script>
</body>

</html>
