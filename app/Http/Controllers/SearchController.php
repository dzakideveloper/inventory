<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Barang;

class SearchController extends Controller
{
<<<<<<< HEAD
    public function index(Request $request)
    {
        $barang = Barang::All();
=======
    public function search(Request $request)
    {
        $barang = Barang::all();
>>>>>>> 08a72d14bca86527a3d8f004c71211519ad9d0cd
        $cari = $request->get('keyword');
        if($cari)
        {
            $barang = Barang::where('nama_barang','LIKE',"%$cari%")->paginate(10);
        }
<<<<<<< HEAD
        return view('search', compact('barang','cari'));
=======
        return view('welcome', compact('barang','cari'));
>>>>>>> 08a72d14bca86527a3d8f004c71211519ad9d0cd
    }
}
