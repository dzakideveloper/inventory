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
                    <table class="table table-borderless">
                        <tr>
                            <th>Nomor Ruangan</th>
<<<<<<< HEAD
                            <th>:</th>
=======
                            <td>:</td>
>>>>>>> 08a72d14bca86527a3d8f004c71211519ad9d0cd
                            <td>{{$ruangan->nomor_ruangan}}</td>
                        </tr>
                        <tr>
                            <th>Nama Ruangan</th>
<<<<<<< HEAD
                            <th>:</th>
                            <td>{{$ruangan->nama_ruangan}}</td>
                        </tr>
                        <tr>
                            <th>Ukuran Ruangan</th>
                            <th>:</th>
                            <td>{{$ruangan->ukuran}}</td>
                        </tr>
                        <tr>
                            <th>Penanggung Jawab</th>
                            <th>:</th>
=======
                            <td>:</td>
                            <td>{{$ruangan->nama_ruangan}}</td>
                        </tr>
                        <tr>
                            <th>Penanggung Jawab</th>
                            <td>:</td>
>>>>>>> 08a72d14bca86527a3d8f004c71211519ad9d0cd
                            <td>{{$ruangan->users->name}}</td>
                        </tr>
                    </table>
                </div>
            </div>
<<<<<<< HEAD
        </div>
    </div>
</div>

<div class="container pt-3">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">AFKB</div>

                <div class="card-body">
                    
=======
            <div class="card mt-4">
                <div class="card-header">Barang yang Tersedia</div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover" id="myTable">
                            <thead>
                                <th>Nomor Barang</th>
                                <th>Nama Barang</th>
                                <th>Detail</th>
                            </thead>
                            <tbody>
                                @foreach($barang as $row)
                                <tr>
                                    <td>{{$row->nomor_barang}}</td>
                                    <td>{{$row->nama_barang}}</td>
                                    <td>
                                        <a href="{{route('barang.show', $row->id)}}" class="btn btn-primary">Detail</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
>>>>>>> 08a72d14bca86527a3d8f004c71211519ad9d0cd
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
