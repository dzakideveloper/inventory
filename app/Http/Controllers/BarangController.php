<?php

namespace App\Http\Controllers;

use App\Barang;
<<<<<<< HEAD
use App\Ruangan;
use App\Kategori;
=======
use App\Kategori;
use App\Ruangan;
>>>>>>> 08a72d14bca86527a3d8f004c71211519ad9d0cd
use Illuminate\Http\Request;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $barang = Barang::all();
<<<<<<< HEAD
        $ruangan = Ruangan::all();
        $kategori = Kategori::all();
        return view('barang.index', compact('barang', 'ruangan', 'kategori'));
=======
        $kategori = Kategori::all();
        $ruangan = Ruangan::all();
        return view('barang.index', compact('barang','kategori','ruangan'));
>>>>>>> 08a72d14bca86527a3d8f004c71211519ad9d0cd
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
<<<<<<< HEAD

=======
>>>>>>> 08a72d14bca86527a3d8f004c71211519ad9d0cd
        if($request->hasFile('gambar'))
        {
            $destination_path = 'public/images/barang';
            $image = $request->file('gambar');
            $name = $image->getClientOriginalName();
            $path = $request->file('gambar')->storeAs($destination_path, $name);
            $input['gambar'] = $name;
        }
<<<<<<< HEAD

        Barang::create($input);
        return redirect('/');
=======
        $input['nomor_barang'] = 'Barang'.' '.random_int(100,9999);
        Barang::create($input);
        return redirect('/barang');
>>>>>>> 08a72d14bca86527a3d8f004c71211519ad9d0cd
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Barang  $barang
     * @return \Illuminate\Http\Response
     */
<<<<<<< HEAD
    public function show($id) 
    {
        $barang = Barang::findOrFail($id);
        // $ruangan = Ruangan::all();
=======
    public function show($id)
    {
        $barang = Barang::find($id);
>>>>>>> 08a72d14bca86527a3d8f004c71211519ad9d0cd
        return view('barang.detail', compact('barang'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
<<<<<<< HEAD
        $barang = Barang::findOrFail($id);
        // $user = User::all();
=======
        $barang = Barang::find($id);
>>>>>>> 08a72d14bca86527a3d8f004c71211519ad9d0cd
        $kategori = Kategori::all();
        $ruangan = Ruangan::all();
        return view('barang.edit', compact('barang', 'kategori', 'ruangan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
<<<<<<< HEAD
        $barang = Barang::findOrFail($id);
        $data = $request->all();

=======
        $data = $request->all();
        $barang = Barang::find($id);
>>>>>>> 08a72d14bca86527a3d8f004c71211519ad9d0cd
        if($request->hasFile('gambar'))
        {
            $destination_path = 'public/images/barang';
            $image = $request->file('gambar');
            $name = $image->getClientOriginalName();
            $path = $request->file('gambar')->storeAs($destination_path, $name);
            $data['gambar'] = $name;
        }
<<<<<<< HEAD

        $barang->update($data);
        return redirect('/');
=======
        $barang->update($data);
        return redirect('/barang');
>>>>>>> 08a72d14bca86527a3d8f004c71211519ad9d0cd
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
<<<<<<< HEAD
        $data = Barang::find($id);
=======
        $data = Barang::findOrFail($id);
>>>>>>> 08a72d14bca86527a3d8f004c71211519ad9d0cd
        $data->delete();
        return redirect('barang');
    }
}
