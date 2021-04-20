<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KasirController extends Controller
{
    public function index()
    {
    	$title = 'Kasir';
    	$data_barang = \App\Models\Barang::all();

    	return view('kasir.index', compact('title'), ['data_barang' => $data_barang]);
    }
}
