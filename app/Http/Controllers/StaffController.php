<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Staff;

class StaffController extends Controller
{
    public function index()
    {
    	$title = 'Daftar Staff';
    	$data_staff = \App\Models\Staff::all();

        return view ('staff.index', ['data_staff' => $data_staff],compact('title'));

    	// return view('barang.index',compact('title','data_barang'));
    }

    public function add()
    {
    	$title = 'Tambah Staff';

    	return view('staff.add',compact('title'));
    }

    public function store(Request $request)
    {
    	$this->validate($request,[
    		'staff_nama'=>'required',
    		'staff_alamat'=>'required',
    		'staff_no'=>'required',
    		'staff_gaji'=>'required'
    	]);

    	$data['staff_nama'] = $request->staff_nama;
    	$data['staff_alamat'] = $request->staff_alamat;
    	$data['staff_no'] = $request->staff_no;
    	$data['staff_gaji'] = $request->staff_gaji;
    	$data['created_at'] = date('Y-m-d H:i:s');

    	DB::insert($data);
    	\Session::flash('sukses', 'Staff ditambahkan');
    	return redirect('staff');
    }

    public function edit($id)
    {
    	$title = 'Edit Staff';
    	$data_staff = DB::table('staff')->where('staff_id',$id)->get();

    	return view('staff.edit',compact('title'), ['data_staff' => $data_staff]);
    }

    public function update(Request $request)
    {
    	
    	DB::table('staff')->where('staff_id',$request->id)->update([
		'staff_nama' => $request->staff_nama,
		'staff_alamat' => $request->staff_alamat,
		'staff_no' => $request->staff_no,
		'staff_gaji' => $request->staff_gaji,
		
	]);
	\Session::flash('sukses', 'Barang Diubah');
	return redirect('/barang');
    }

    public function delete($id)
    {
    	DB::table('staff')->where('staff_id',$id)->delete();
		
		\Session::flash('sukses', 'Staff Dihapus');
		return redirect('/staff');
    }
}
