<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\mahasiswa;
use App\Http\Controllers\Controller;
use Session; 

class mahasiswacontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = mahasiswa::all();
        return view('mahasiswa')->with('mahasiswa',$data);   
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function tambahmahasiswa()
    {
        return view('tambah-mahasiswa');
    }
    public function create()
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
        $mahasiswa =new mahasiswa;
        $mahasiswa -> nim = $request->nim;
        $mahasiswa -> nama = $request->nama;
        $mahasiswa -> jenis_kelamin = $request->jenis_kelamin;
        $mahasiswa -> jurusan = $request->jurusan;
        $mahasiswa -> alamat = $request->alamat;
        $this->validate($request,[
                'nim'=>'required',
                'nama'=>'required'
            ]);
        $mahasiswa -> save();
        Session::flash('flash_message','Data Berhasil Dimasukan');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
