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
                    <div id="sidebar-menu" class="ml-2 main_menu_side hidden-print main_menu" enctype="multipart/form-data">
                        <div class="menu_section">
                            <h3>General</h3>
                            <ul class="nav side-menu">
                                <li><a href="/search"><i class="fa fa-search red"></i> Search <span class="fa fa-chevron-down"></span></a>
                                </li>
                                <li><a href="/barang"><i class="fa fa-book"></i> Barang <span class="fa fa-chevron-down"></span></a>
                                </li>
                                <li><a href="/ruangan"><i class="fa fa-home"></i> Ruangan <span class="fa fa-chevron-down"></span></a>
                                </li>
                                <li><a href="/kategori"><i class="fa fa-list"></i> Kategori <span class="fa fa-chevron-down"></span></a>
                                </li>
                            </ul>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-9">
                <div class="content pt-3">
                    <div class="col-md-12">
                        <form action="/" method="get">
                            <div class="input-group">
                                <input type="text" style="height:30px" name="keyword"
                                    value="{{Request::get('keyword')}}" class="form-control" placeholder="Cari apa..?">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="submit">Cari</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-12 ppee">
                        @if(Request::get('keyword'))
                        <div class="card">
                            <div class="card-body">
                                <div class="alert alert-success">
                                    Hasil Pencarian dari {{Request::get('keyword')}}
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-hover">
                                        <thead>
                                            <th>Nama Barang</th>
                                            <th>Nomor Barang</th>
                                            <th>Pilihan</th>
                                        </thead>
                                        <tbody>
                                            @foreach($barang as $row)
                                            <tr>
                                                <td>{{$row->nama_barang}}</td>
                                                <td>{{$row->nomor_barang}}</td>
                                                <td>
                                                    <form>
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
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
