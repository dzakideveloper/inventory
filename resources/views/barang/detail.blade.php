<<<<<<< HEAD
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">

    <!-- Font Awesome -->
    <link href="{{asset('/vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">

    <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.no-icons.min.css"
        rel="stylesheet">
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{asset('/vendors/custom.min.css')}}" rel="stylesheet">

    <!-- Styles -->
    <style>
        html,
        body {
            background-color: #fff;
            color: #636b6f;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links>a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }

        .ppee {
            margin-bottom: 50vh;
        }

        .pk {
            height: 100vh;
            position: fixed;
            width: 23vw;
            left: 0;
        }

    </style>
</head>

<body>
    <div class="container body">
        <div class="main_container">
            <div class="col-md-3 left_col">
                <div class="left_col scroll-view pk">
                    <div class="navbar nav_title mb-" style="border: 0;">
                        <a href="index.html" class="site_title">
                            <span>Gudang Barang</span></a>
                    </div>

                    <div class="clearfix"></div>

                    <br />

                    <!-- sidebar menu -->
                    <div id="sidebar-menu" class="ml-2 main_menu_side hidden-print main_menu pk"
                        enctype="multipart/form-data">
                        <div class="menu_section">
                            <h3>General</h3>
                            <ul class="nav side-menu">
                                <li>
                                    <a href="/"><i class="fa fa-search"></i> Search </a>
                                </li>
                                <li>
                                    <a class="" href="/barang"><i class="fa fa-book"></i> Barang </a>
                                </li>
                                <li>
                                    <a href="/ruangan"><i class="fa fa-home"></i> Ruangan </a>
                                </li>
                                <li>
                                    <a href="/kategori"><i class="fa fa-list"></i> Kategori </a>
                                </li>
                            </ul>
                            </ul>
                        </div>
                    </div>
                    <!-- /sidebar menu -->


                </div>
            </div>

            <div class="col-md-9 barang">
                <div class="mt-4 mr-3">
                    <div class="card">
                        <div class="card-header">
                            Detail Barang
                        </div>
                        <div class="card-body">
                            <table class="table">
                                <tr>
                                    <td>
                                        <img class="img-thumbnail"
                                            src="{{ asset('/storage/images/barang/'.$barang->gambar) }}"
                                            width="400px" />
                                    </td>
                                </tr>
                                <tr>
                                    <th>Nama Ruangan</th>
                                    <td>{{$barang->ruangan->nama_ruangan}}</td>
                                </tr>
                                <tr>
                                    <th>Kategori/Jenis Barang</th>
                                    <td>{{$barang->kategori->nama_kategori}}</td>
                                </tr>
                                <tr>
                                    <th>Nomor Barang</th>
                                    <td>{{$barang->nomor_barang}}</td>
                                </tr>
                                <tr>
                                    <th>Stok Barang</th>
                                    <td>{{$barang->stok}} {{$barang->satuan}}</td>
                                </tr>
                                <tr>
                                    <th>Kondisi</th>
                                    <td>
                                        @if($barang->kondisi == 'baik')
                                        <span class="badge badge-primary">Baik</span>
                                        @elseif($barang->kondisi == 'rusak')
                                        <span class="badge badge-primary">Rusak</span>
                                        @elseif($barang->kondisi == 'tidak layak')
                                        <span class="badge badge-primary">Tidak Layak</span>
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <th>Spesifikasi</th>
                                    <td>{!!$barang->spek!!}</td>
                                </tr>
                            </table>
                        </div>
                    </div>
 
                    <div class="row mt-4">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">AFKB</div>

                                <div class="card-body">

                                </div>
                            </div>
                        </div>
=======
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Detail Ruangan
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-borderless">
                            <tr>
                                <th>Detail Gambar</th>
                                <td>
                                <img class="img-thumbnail" src="{{ asset('/storage/images/barang/'.$barang->gambar) }}" width="400px" />
                                </td>
                            </tr>
                            <tr>
                                <th>Nama Ruangan</th>
                                <td>{{$barang->ruangan->nama_ruangan}}</td>
                            </tr>
                            <tr>
                                <th>Kategori/Jenis Barang</th>
                                <td>{{$barang->kategori->nama_kategori}}</td>
                            </tr>
                            <tr>
                                <th>Nomor Barang</th>
                                <td>{{$barang->nomor_barang}}</td>
                            </tr>
                            <tr>
                                <th>Stok Barang</th>
                                <td>{{$barang->stok}} {{$barang->satuan}}</td>
                            </tr>
                            <tr>
                                <th>Kondisi</th>
                                <td>
                                    @if($barang->kondisi == 'baik')
                                    <span class="badge badge-primary">Baik</span>
                                    @elseif($barang->kondisi == 'rusak')
                                    <span class="badge badge-warning">Rusak</span>
                                    @else
                                    <span class="badge badge-warning">Tidak Layak</span>
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    Spesifikasi
                                </th>
                                <td>{!!$barang->spek!!}</td>
                            </tr>
                        </table>
>>>>>>> 08a72d14bca86527a3d8f004c71211519ad9d0cd
                    </div>
                </div>
            </div>
        </div>
    </div>
<<<<<<< HEAD
</body>

</html>
=======
</div>
@endsection
>>>>>>> 08a72d14bca86527a3d8f004c71211519ad9d0cd
