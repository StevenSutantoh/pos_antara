<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $barang = Barang::where('id_kategori', 'LIKE', "%$keyword%")
                ->orWhere('id_stok', 'LIKE', "%$keyword%")
                ->orWhere('nama_barang', 'LIKE', "%$keyword%")
                ->orWhere('merk', 'LIKE', "%$keyword%")
                ->orWhere('kuantitas', 'LIKE', "%$keyword%")
                ->orWhere('harga_jual', 'LIKE', "%$keyword%")
                ->orWhere('stok', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $barang = Barang::latest()->paginate($perPage);
        }

        return view('barang.index', compact('barang'));
    }
    
    public function create()
    {
        return view('barang.create');
    }

    public function store(Request $request)
    {
        $requestData = $request->all();
        
        Barang::create($requestData);

        return redirect('barang')->with('flash_message', 'barang added!');
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }
}
