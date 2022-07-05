<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\DataPribadi;
use App\Models\Pegawai;

class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pegawai = Pegawai::with('datapribadi')->get();

        //$pegawai = DataPribadi::all();

        return response()->json(['message' => 'Succes',
            'data' => $pegawai,
            ], 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
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
        $datapribadi = new DataPribadi();

        $datapribadi->nip = $request->datapribadi['nip'];
        $datapribadi->nik = $request->datapribadi['nik'];
        $datapribadi->nama = $request->datapribadi['nama'];
        $datapribadi->jk = $request->datapribadi['jk'];
        $datapribadi->tempat_lahir = $request->datapribadi['tempat_lahir'];
        $datapribadi->tgl_lahir = $request->datapribadi['tgl_lahir'];
        $datapribadi->status = $request->datapribadi['status'];
        $datapribadi->no_hp = $request->datapribadi['no_hp'];
        $datapribadi->email = $request->datapribadi['email'];
        $datapribadi->alamat = $request->datapribadi['alamat'];
        $datapribadi->pendidikan_terakhir = $request->datapribadi['pendidikan_terakhir'];
        $datapribadi->tempat_pendidikan = $request->datapribadi['tempat_pendidikan'];
        $datapribadi->tahun_masuk = $request->datapribadi['tahun_masuk'];
        $datapribadi->tahun_lulus = $request->datapribadi['tahun_lulus'];
        
        $datapribadi->save();

        $pegawai = array(
            'id_identitas' => $datapribadi->id,
            'jabatan' => $request->jabatan,
            'pangkat' => $request->pangkat,
            'gaji_pokok' => $request->gaji_pokok,
            'sumber_gaji'=> $request->sumber_gaji
        );

        Pegawai::create($pegawai);

        return response()->json([
            'message' => 'Succes'
        ], 200);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pegawai = Pegawai::find($id);       
        //$pegawai = Pegawai::with('datapribadi')->first();
        $pegawai = Pegawai::with('datapribadi')->where('id', $id)->firstOrFail();

        return response()->json([
            'message' => 'Succes',
            'data' => $pegawai
        ], 200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
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
        $pegawai = Pegawai::find($id);

        $pegawai->update([
            'jabatan' => $request->jabatan,
            'pangkat' => $request->pangkat,
            'gaji_pokok' => $request->gaji_pokok,
            'sumber_gaji' => $request->sumber_gaji
        ]);

        DataPribadi::where('id', $pegawai->id_identitas)->update([
            'nip' => $request->nip,
            'nik' => $request->nik,
            'nama' => $request->nama,
            'jk' => $request->jk,
            'tempat_lahir' => $request->tempat_lahir,
            'tgl_lahir' => $request->tgl_lahir,
            'status' => $request->status,
            'no_hp' => $request->no_hp,
            'email' => $request->email,
            'alamat' => $request->alamat,
            'pendidikan_terakhir' => $request->pendidikan_terakhir,
            'tempat_pendidikan' => $request->tempat_pendidikan,
            'tahun_masuk' => $request->tahun_masuk,
            'tahun_lulus' => $request->tahun_lulus
        ]);
        
        /*$datapribadi= array(
            'nip' => $request->nip,
            'nik' => $request->nik,
            'nama' => $request->nama,
            'jk' => $request->jk,
            'tempat_lahir' => $request->tempat_lahir,
            'tgl_lahir' => $request->tgl_lahir,
            'status' => $request->status,
            'no_hp' => $request->no_hp,
            'email' => $request->email,
            'alamat' => $request->alamat,
            'pendidikan_terakhir' => $request->pendidikan_terakhir,
            'tempat_pendidikan' => $request->tempat_pendidikan,
            'tahun_masuk' => $request->tahun_masuk,
            'tahun_lulus' => $request->tahun_lulus
        );

        $datapribadi = DataPribadi::create($datapribadi);*/

        return response()->json([
            'message' => 'Succes',
            'data' => $pegawai
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pegawai = Pegawai::find($id);

        DataPribadi::where('id', $pegawai->id_identitas)->delete();

        return response()->json([
            'message' => 'Deleted'
        ], 200);
    }
}
