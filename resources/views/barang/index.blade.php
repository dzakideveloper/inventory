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
                    <div id="sidebar-menu" class="ml-2 main_menu_side hidden-print main_menu pk" enctype="multipart/form-data">
                        <div class="menu_section">
                            <h3>General</h3>
                            <ul class="nav side-menu">
                                <li>
                                    <a href="/"><i class="fa fa-search"></i> Search </a>
                                </li>
                                <li>
                                    <a class="" href="/barang"><i class="fa fa-book red"></i> Barang </a>
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
                <div class="mt-4 mr-3 ml-3">
                    <div class="card">
                        <div class="card-header">
                            Tambah Barang
                        </div>
                        <div class="card-body">
                            <form action="{{route('barang.store')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">Kategori Barang</span>
                                            </div>
                                            <select class="custom-select" name="id_kategori">
                                                <option selected>Choose...</option>
                                                @foreach($kategori as $row)
                                                <option value="{{$row->id}}">{{$row->nama_kategori}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">Nama Ruangan</span>
                                            </div>
                                            <select class="custom-select" name="id_ruangan">
                                                <option selected>Choose...</option>
                                                @foreach($ruangan as $row)
                                                <option value="{{$row->id}}">{{$row->nama_ruangan}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">Nomor Barang</span>
                                            </div>
                                            <input type="text" name="nomor_barang" style="height:3em" class="form-control"
                                                placeholder="Nomor Barang">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">Nama Barang</span>
                                            </div>
                                            <input type="text" name="nama_barang" class="form-control"
                                                placeholder="Nama Barang" style="height:3em">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">Stok/Satuan</span>
                                            </div>
                                            <input type="text" name="stok" class="form-control" style="height:3em" placeholder="Stok">
                                            <select class="custom-select" style="height:3em" name="satuan">
                                                <option selected>Choose...</option>
                                                <option value="Meter">Meter</option>
                                                <option value="Roll">Roll</option>
                                                <option value="Liter">Liter</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="input-group mb-3">
                                            <input type="file" name="gambar" style="height: 3em;" class="form-control" id="inputGroupFile0">
                                            <label class="input-group-text" for="inputGroupFile02">Choose file</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">Kondisi</span>
                                            </div>
                                            <select class="custom-select" name="kondisi">
                                                <option selected>Choose...</option>
                                                <option value="baik">Baik</option>
                                                <option value="rusak">Rusak</option>
                                                <option value="tidak layak">Tidak Layak</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="input-group mb-3">
                                            <textarea class="form-control" name="spek" id="konten"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-success">Tambah Barang</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="card mt-4 mb-5">
                        <div class="card-header">
                            afgaf
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-strip" id="myTable">
                                    <thead>
                                        <th>Gambar</th>
                                        <th>Nomor Barang</th>
                                        <th>Nama Barang</th>
                                        <th>Tempat</th>
                                        <th>Pilihan</th>
                                    </thead>
                                    <tbody>

                                        @foreach($barang as $row)
                                        <tr>
                                            <td>
                                                <img class="img-thumbnail"
                                                    src="{{ asset('/storage/images/barang/'.$row->gambar) }}"
                                                    width="100px" />
                                            </td>
                                            <td>{{$row->nomor_barang}}</td>
                                            <td>{{$row->nama_barang}}</td>
                                            <td>{{$row->ruangan->nama_ruangan}}</td>
                                            <td>
                                                <form action="{{route('barang.destroy',$row->id)}}" method="post">
                                                    @csrf
                                                    {{method_field('DELETE')}}
                                                    <button type="submit" class="btn btn-danger"
                                                        onclick="return confirm('Apakah anda akan menghapus {{$row->barang}} ?');">Hapus</button>
                                                    <a href="{{route('barang.edit',$row->id)}}"
                                                        class="btn btn-warning">Edit</a>
                                                    <a href="{{route('barang.show',$row->id)}}"
                                                        class="btn btn-success">Detail</a>
                                                </form>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
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
                    Tambah Data Barang
                </div>
                <div class="card-body">
                    <form action="{{route('barang.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Kategori Barang</span>
                                    </div>
                                    <select class="custom-select" name="id_kategori">
                                        <option selected>Choose...</option>
                                        @foreach($kategori as $row)
                                        <option value="{{$row->id}}">{{$row->nama_kategori}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Nama Ruangan</span>
                                    </div>
                                    <select class="custom-select" name="id_ruangan">
                                        <option selected>Choose...</option>
                                        @foreach($ruangan as $row)
                                        <option value="{{$row->id}}">{{$row->nama_ruangan}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <!-- <div class="col-md-6">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Nomor Barang</span>
                                    </div>
                                    <input type="text" name="nomor_barang" class="form-control"
                                        placeholder="Nomor Barang">
                                </div>
                            </div> -->
                            <div class="col-md-6">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Nama Barang</span>
                                    </div>
                                    <input type="text" name="nama_barang" class="form-control"
                                        placeholder="Nama Barang">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="">Stok/Satuan</span>
                                    </div>
                                    <input type="number" name="stok" class="form-control">
                                    <select class="custom-select" name="satuan">
                                        <option selected>Choose...</option>
                                        <option value="unit">Unit</option>
                                        <option value="kilogram">Kilogram</option>
                                        <option value="butir">Butir</option>
                                        <option value="liter">Liter</option>
                                        <option value="lembar">Lembar</option>
                                        <option value="roll">Roll</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Upload</span>
                                    </div>
                                    <div class="custom-file">
                                        <input type="file" name="gambar" class="custom-file-input"
                                            id="inputGroupFile01">
                                        <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Kondisi</span>
                                    </div>
                                    <select class="custom-select" name="kondisi">
                                        <option selected>Choose...</option>
                                        <option value="baik">Baik</option>
                                        <option value="rusak">Rusak</option>
                                        <option value="tidak layak">Tidak Layak</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="input-group">
                                    
                                    <textarea class="form-control" name="spek" id="konten"></textarea>
                                </div>
                            </div>

                            <div class="col-md-6 mt-4">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-success">Tambah Data</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="card mt-4">
                <div class="card-header">Data Ruangan</div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-strip" id="myTable">
                            <thead>
                                <th>Gambar</th>
                                <th>Nomor Barang</th>
                                <th>Nama Barang</th>
                                <th>Tempat</th>
                                <th>Pilihan</th>
                            </thead>
                            <tbody>

                                @foreach($barang as $row)
                                <tr>
                                    <td>
                                    <img class="img-thumbnail" src="{{ asset('/storage/images/barang/'.$row->gambar) }}" width="100px" />
                                    </td>
                                    <td>{{$row->nomor_barang}}</td>
                                    <td>{{$row->nama_barang}}</td>
                                    <td>{{$row->ruangan->nama_ruangan}}</td>
                                    <td>
                                        <form action="{{route('barang.destroy',$row->id)}}" method="post">
                                            @csrf
                                            {{method_field('DELETE')}}
                                            <button type="submit" class="btn btn-danger"
                                                onclick="return confirm('Apakah anda akan menghapus {{$row->barang}} ?');">Hapus</button>
                                            <a href="{{route('barang.edit',$row->id)}}"
                                                class="btn btn-warning">Edit</a>
                                            <a href="{{route('barang.show',$row->id)}}"
                                                class="btn btn-success">Detail</a>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
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
