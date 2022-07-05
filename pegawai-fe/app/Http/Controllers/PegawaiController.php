<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Http::get('http://localhost:8003/api/pegawai')->json();
        
        $pass  = $data['data'];
        return view('pegawai', [
            "title" => "Data Pegawai | SMK Cendikia"
        ], compact('pass'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('form_pegawai', [
            "title" => "Tambah Data Pegawai| SMK Cendikia"
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Http::post('http://localhost:8003/api/pegawai',[
            'datapribadi'=> [
                'nip' => $request->nip,
                'nik' => $request->nik,
                'nama' => $request->nama,
                'jk'=>$request->jk,
                'tempat_lahir'=>$request->tempat_lahir,
                'tgl_lahir'=>$request->tgl_lahir,
                'status'=>$request->status,
                'no_hp'=>$request->no_hp,
                'email'=>$request->email,
                'alamat'=>$request->alamat,
                'pendidikan_terakhir'=>$request->pendidikan_terakhir,
                'tempat_pendidikan'=>$request->tempat_pendidikan,
                'tahun_masuk'=>$request->tahun_masuk,
                'tahun_lulus'=>$request->tahun_lulus
            ],
            'jabatan' => $request->jabatan,
            'pangkat' => $request->pangkat,
            'gaji_pokok' => $request->gaji_pokok,
            'sumber_gaji'=> $request->sumber_gaji
        ]);

        return redirect('pegawai/view');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Http::get('http://localhost:8003/api/pegawai/'.$id)->json();
        $pass = $data['data'];

        return view('detail_pegawai', [
            "title" => "Detail Data Pegawai | SMK Cendikia"
        ], compact('pass')); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Http::get('http://localhost:8003/api/pegawai/'.$id)->json();
        $pass = $data['data'];

        return view('update_pegawai', [
            "title" => "Edit Data Pegawai | SMK Cendikia"
        ], compact('pass')); 
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
        Http::put('http://localhost:8003/api/pegawai/'.$id, $request->all());

        return redirect('pegawai/view');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Http::delete('http://localhost:8003/api/pegawai/'.$id);

        return redirect('pegawai/view');
    }
}
