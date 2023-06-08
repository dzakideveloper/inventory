@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Detail User
                </div>
                <div class="card-body">
<<<<<<< HEAD
                    <table class="table">
                        <tr>
                            <th>Nama Lengkap</th>
                            <th>:</th>
=======
                    <table class="table table-borderless">
                        <tr>
                            <th>Nama Lengkap</th>
                            <td>:</td>
>>>>>>> 08a72d14bca86527a3d8f004c71211519ad9d0cd
                            <td>{{$user->name}}</td>
                        </tr>
                        <tr>
                            <th>Username</th>
<<<<<<< HEAD
                            <th>:</th>
=======
                            <td>:</td>
>>>>>>> 08a72d14bca86527a3d8f004c71211519ad9d0cd
                            <td>{{$user->username}}</td>
                        </tr>
                        <tr>
                            <th>Email</th>
<<<<<<< HEAD
                            <th>:</th>
=======
                            <td>:</td>
>>>>>>> 08a72d14bca86527a3d8f004c71211519ad9d0cd
                            <td>{{$user->email}}</td>
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
=======
            <div class="card mt-4">
>>>>>>> 08a72d14bca86527a3d8f004c71211519ad9d0cd
                <div class="card-header">Penanggung Jawab Ruangan</div>

                <div class="card-body">
                    <div class="table-responsive">
                        @if($ruangan)
<<<<<<< HEAD
                        <table class="table table-hover">
=======
                        <table class="table table-hover" id="myTable">
>>>>>>> 08a72d14bca86527a3d8f004c71211519ad9d0cd
                            <thead>
                                <th>Nomor Ruangan</th>
                                <th>Nama Ruangan</th>
                            </thead>
                            <tbody>
                                @foreach($ruangan as $row)
                                <tr>
                                    <td>{{$row->nomor_ruangan}}</td>
                                    <td>{{$row->nama_ruangan}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        @else
                        <div class="alert alert-danger">
                            Petugas Belum Menjadi PIC Ruangan
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
