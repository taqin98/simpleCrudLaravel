<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Siswa;

class SiswaController extends Controller
{
    //
    public function index()
    {
    	# code...
    	//Insert Data
    	//$table = new Siswa;
    	//$table->nama = 'Nurul Muttaqin';
    	//$table->alamat = 'Alamat';
    	//$table->save();

    	$table = Siswa::all();
    	//dd($table);

    	return view('siswa/home', ['datas' => $table]);
    }

    public function create()
    {
    	# code...
    	return view('siswa/create');
    }

    public function store(Request $request)
    {
    	# code...
    	$table = new Siswa;
    	$table->nama 		          	  = $request->nm;
    	$table->alamat	 		          = $request->alm;
    	$table->save();

    	return redirect('/');

    }

    public function edit($id)
    {
    	# code...
    	$table = DB::table('siswa')->findOrFail($id);
    	//dd($table);

    	return view('siswa/edit', ['data' => $table]);

    }

    public function update(Request $request, $id)
    {
    	# code...
    	$table = findOrFail($id);
    	$table->nama 		          	  = $request->nm;
    	$table->alamat	 		          = $request->alm;
    	$table->save();

    	return redirect('/');
    }

    public function destroy($id)
    {
    	# code...
    	$table      = Siswa::findOrFail($id);
      	$table->delete();

      return redirect('/');
    }
}
