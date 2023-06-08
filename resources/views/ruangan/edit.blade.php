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
                            Edit Data Ruangan
                        </div>
                        <div class="card-body">
                            <form action="{{route('ruangan.update', $ruangan->id)}}" method="post">
                                @csrf
                                {{method_field('PUT')}}
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">Nomor Ruangan</span>
                                            </div>
                                            <input type="text" style="height:7vh" name="nomor_ruangan" value="{{$ruangan->nomor_ruangan}}"
                                                class="form-control" placeholder="Nomor Ruangan">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">Nama Ruangan</span>
                                            </div>
                                            <input type="text" style="height:7vh" name="nama_ruangan" value="{{$ruangan->nama_ruangan}}"
                                                class="form-control" placeholder="Nama Ruangan">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">Ukuran Ruangan</span>
                                            </div>
                                            <select class="custom-select" name="ukuran">
                                                <option selected>{{$ruangan->ukuran}}</option>
                                                <option value="small">Small</option>
                                                <option value="medium">Medium</option>
                                                <option value="large">Large</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">Penanggung Jawab</span>
                                            </div>
                                            <select class="custom-select" name="id_user">
                                                <option selected value="{{$ruangan->users->id}}">
                                                    {{$ruangan->users->name}}</option>
                                                @foreach($user as $row)
                                                @if($row->level == 'pic')
                                                <option value="{{$row->id}}">{{$row->name}}</option>
                                                @endif
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-success">Edit Data</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
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
                    Edit Data Ruangan
                </div>
                <div class="card-body">
                    <form action="{{route('ruangan.update', $ruangan->id)}}" method="post">
                        @csrf
                        {{method_field('PUT')}}
                        <div class="row">
                            <div class="col-md-6">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Nomor Ruangan</span>
                                    </div>
                                    <input type="text" name="nomor_ruangan" value="{{$ruangan->nomor_ruangan}}" class="form-control" placeholder="Nama Lengkap">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Nama Ruangan</span>
                                    </div>
                                    <input type="text" name="nama_ruangan" value="{{$ruangan->nama_ruangan}}" class="form-control" placeholder="Username">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Ukuran Ruangan</span>
                                    </div>
                                    <select class="custom-select" name="ukuran">
                                        <option selected>{{$ruangan->ukuran}}</option>
                                        <option value="small">Small</option>
                                        <option value="medium">Medium</option>
                                        <option value="large">Large</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">PIC Ruangan</span>
                                    </div>
                                    <select class="custom-select" name="id_user">
                                        <option selected value="{{$ruangan->users->id}}">{{$ruangan->users->name}}</option>
                                        @foreach($user as $row)
                                            @if($row->level ==  'pic')
                                            <option value="{{$row->id}}">{{$row->name}}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-success">Ubah Data</button>
                                </div>
                            </div>
                        </div>
                    </form>
>>>>>>> 08a72d14bca86527a3d8f004c71211519ad9d0cd
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
