<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PendaftaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Http::get('http://localhost:8001/api/pendaftaran')->json();
        
        $pass  = $data['data'];
        return view('admin/peserta', [
            "title" => "PPDB Online | Peserta"
        ], compact('pass'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('peserta/pendaftaran', [
            "title" => "PPDB Online | Peserta"
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
        Http::post('http://localhost:8001/api/pendaftaran',[
            'siswa'=> [
                'nisn' => $request->nisn,
                'nik' => $request->nik,
                'nama' => $request->nama,
                'jk'=>$request->jk,
                'tempat_lahir'=>$request->tempat_lahir,
                'tgl_lahir'=>$request->tgl_lahir,
                'agama'=>$request->agama,
                'no_hp'=>$request->no_hp,
                'email'=>$request->email,
                'alamat'=>$request->alamat
            ],
            'ortu'=> [
                'nik_ayah' => $request->nik_ayah,
                'nama_ayah' => $request->nama_ayah,
                'pendidikan_ayah' => $request->pendidikan_ayah,
                'pekerjaan_ayah'=>$request->pekerjaan_ayah,
                'penghasilan_ayah'=>$request->penghasilan_ayah,
                'nohp_ayah'=>$request->nohp_ayah,
                'nik_ibu' => $request->nik_ibu,
                'nama_ibu' => $request->nama_ibu,
                'pendidikan_ibu' => $request->pendidikan_ibu,
                'pekerjaan_ibu'=>$request->pekerjaan_ibu,
                'penghasilan_ibu'=>$request->penghasilan_ibu,
                'nohp_ibu'=>$request->nohp_ibu
            ],
            'nilai'=> [
                'raport_smt1' => $request->raport_smt1,
                'raport_smt2' => $request->raport_smt2,
                'raport_smt3' => $request->raport_smt3,
                'raport_smt4'=>$request->raport_smt4,
                'raport_smt5'=>$request->raport_smt5,
                'usbn'=>$request->usbn,
                'un'=>$request->un
            ],
            'sekolah'=> [
                'npsn' => $request->npsn,
                'nama_sekolah' => $request->nama_sekolah,
                'status' => $request->status,
                'alamat'=>$request->alamat_sekolah,
                'tahun_lulus'=>$request->tahun_lulus
            ],
            'jurusan'=> [
                'jurusan' => $request->jurusan
            ],
            'bukti' => $request->bukti,
            'status' => $request->status_pembayaran,
            'keterangan' => $request->keterangan
        ]);

        return redirect('admin-peserta/create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Http::get('http://localhost:8001/api/pendaftaran/'.$id)->json();
        $pass = $data['data'];

        return view('admin/detail_peserta', [
            "title" => "PPDB Online | Detail Peserta"
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
        $data = Http::get('http://localhost:8001/api/pendaftaran/'.$id)->json();
        $pass = $data['data'];

        return view('admin/update_peserta', [
            "title" => "PPDB Online | Ubah Data Peserta"
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
        //dd($request);
        Http::put('http://localhost:8001/api/pendaftaran/'.$id, $request->all());

        return redirect('admin-peserta');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Http::delete('http://localhost:8001/api/pendaftaran/'.$id);

        return redirect('admin-peserta');
    }
}
