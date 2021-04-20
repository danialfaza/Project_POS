<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Barang;

class BarangController extends Controller
{
    public function index()
    {
    	$title = 'Daftar Barang';
    	$data_barang = \App\Models\Barang::all();

        return view ('barang.index', ['data_barang' => $data_barang],compact('title'));

    	// return view('barang.index',compact('title','data_barang'));
    }

    public function add()
    {
    	$title = 'Tambah Barang';

    	return view('barang.add',compact('title'));
    }

    public function store(Request $request)
    {
    	$this->validate($request,[
    		'barang_nama'=>'required',
    		'barang_jumlah'=>'required',
    		'barang_harga'=>'required'
    	]);

    	$data['barang_nama'] = $request->barang_nama;
    	$data['barang_jumlah'] = $request->barang_jumlah;
    	$data['barang_harga'] = $request->barang_harga;
    	$data['created_at'] = date('Y-m-d H:i:s');

    	Barang::insert($data);
    	\Session::flash('sukses', 'Barang ditambahkan');
    	return redirect('barang');
    }

    public function edit($id)
    {
    	$title = 'Edit Barang';
    	$data_barang = DB::table('barang')->where('barang_id',$id)->get();

    	return view('barang.edit',compact('title'), ['data_barang' => $data_barang]);
    }

    public function update(Request $request)
    {
    	
    	DB::table('barang')->where('barang_id',$request->id)->update([
		'barang_nama' => $request->barang_nama,
		'barang_jumlah' => $request->barang_jumlah,
		'barang_harga' => $request->barang_harga,
		
	]);
	\Session::flash('sukses', 'Barang Diubah');
	return redirect('/barang');
    }

    public function delete($id)
    {
    	DB::table('barang')->where('barang_id',$id)->delete();
		
	
		return redirect('/barang');
    }
}
