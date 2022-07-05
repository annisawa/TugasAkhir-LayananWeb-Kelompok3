<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pendaftaran;
use App\Models\Siswa;
use App\Models\OrangTua;
use App\Models\Sekolah;
use App\Models\Nilai;
use App\Models\Jurusan;
use App\Models\BuktiPembayaran;
use App\Models\Pengumuman;

class PendaftaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pendaftaran = Pendaftaran::with('siswa', 'ortu', 'nilai', 'sekolah', 'jurusan', 'buktipembayaran', 'pengumuman')->get();

        return response()->json(['message' => 'Succes',
            'data' => $pendaftaran,
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
        $siswa = new Siswa();

        $siswa->nisn = $request->siswa['nisn'];
        $siswa->nik = $request->siswa['nik'];
        $siswa->nama = $request->siswa['nama'];
        $siswa->jk = $request->siswa['jk'];
        $siswa->tempat_lahir = $request->siswa['tempat_lahir'];
        $siswa->tgl_lahir = $request->siswa['tgl_lahir'];
        $siswa->agama = $request->siswa['agama'];
        $siswa->no_hp = $request->siswa['no_hp'];
        $siswa->email = $request->siswa['email'];
        $siswa->alamat = $request->siswa['alamat'];
        $siswa->save();

        $ortu = new OrangTua();
        $ortu->nik_ayah = $request->ortu['nik_ayah'];
        $ortu->nama_ayah = $request->ortu['nama_ayah'];
        $ortu->pendidikan_ayah = $request->ortu['pendidikan_ayah'];
        $ortu->pekerjaan_ayah = $request->ortu['pekerjaan_ayah'];
        $ortu->penghasilan_ayah = $request->ortu['penghasilan_ayah'];
        $ortu->nohp_ayah = $request->ortu['nohp_ayah'];
        $ortu->nik_ibu = $request->ortu['nik_ibu'];
        $ortu->nama_ibu = $request->ortu['nama_ibu'];
        $ortu->pendidikan_ibu = $request->ortu['pendidikan_ibu'];
        $ortu->pekerjaan_ibu = $request->ortu['pekerjaan_ibu'];
        $ortu->penghasilan_ibu = $request->ortu['penghasilan_ibu'];
        $ortu->nohp_ibu = $request->ortu['nohp_ibu'];
        $ortu->save();

        $nilai = new Nilai();
        $nilai->raport_smt1 = $request->nilai['raport_smt1'];
        $nilai->raport_smt2 = $request->nilai['raport_smt2'];
        $nilai->raport_smt3 = $request->nilai['raport_smt3'];
        $nilai->raport_smt4 = $request->nilai['raport_smt4'];
        $nilai->raport_smt5 = $request->nilai['raport_smt5'];
        $nilai->usbn = $request->nilai['usbn'];
        $nilai->un = $request->nilai['un'];
        $nilai->save();

        $sekolah = new Sekolah();
        $sekolah->npsn = $request->sekolah['npsn'];
        $sekolah->nama_sekolah = $request->sekolah['nama_sekolah'];
        $sekolah->status = $request->sekolah['status'];
        $sekolah->alamat = $request->sekolah['alamat'];
        $sekolah->tahun_lulus = $request->sekolah['tahun_lulus'];
        $sekolah->save();

        $jurusan = new Jurusan();
        $jurusan->jurusan = $request->jurusan['jurusan'];
        $jurusan->save();

        $pendaftaran = new Pendaftaran();
        $pendaftaran->id_siswa = $siswa->id;
        $pendaftaran->id_ortu = $ortu->id;
        $pendaftaran->id_nilai = $nilai->id;
        $pendaftaran->id_sekolah = $sekolah->id;
        $pendaftaran->id_jurusan = $jurusan->id;
        $pendaftaran->save();

        $bukti = array(
            'id_pendaftaran' => $pendaftaran->id,
            'id_siswa' => $siswa->id,
            'bukti' => $request->bukti,
            'status' => $request->status
        );

        BuktiPembayaran::create($bukti);

        $pengumuman = array(
            'id_pendaftaran' => $pendaftaran->id,
            'id_siswa' => $siswa->id,
            'keterangan' => $request->keterangan
        );

        Pengumuman::create($pengumuman);

        /*$pendaftaran = array(
            'id_siswa' => $siswa->id,
            'id_ortu' => $ortu->id,
            'id_nilai' => $nilai->id,
            'id_sekolah' => $sekolah->id,
            'id_jurusan' => $jurusan->id
        );

        Pendaftaran::create($pendaftaran);

        
        $bukti = new BuktiPembayaran();
        $bukti->id_pendaftaran = $pendaftaran->id;
        $bukti->bukti = $request->bukti['bukti'];
        $bukti->status = $request->bukti['status'];
        $bukti->save();*/

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
        $pendaftaran = Pendaftaran::find($id);  
        $pendaftaran = Pendaftaran::with('siswa', 'ortu', 'nilai', 'sekolah', 'jurusan', 'buktipembayaran', 'pengumuman')->where('id', $id)->firstOrFail();     

        return response()->json([
            'message' => 'Succes',
            'data' => $pendaftaran
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
        $pendaftaran = Pendaftaran::find($id);

        Siswa::where('id', $pendaftaran->id_siswa)->update([
            'nisn' => $request->nisn,
            'nik' => $request->nik,
            'nama' => $request->nama,
            'jk' => $request->jk,
            'tempat_lahir' => $request->tempat_lahir,
            'tgl_lahir' => $request->tgl_lahir,
            'agama' => $request->agama,
            'no_hp' => $request->no_hp,
            'email' => $request->email,
            'alamat' => $request->alamat
        ]);

        OrangTua::where('id', $pendaftaran->id_ortu)->update([
            'nik_ayah' => $request->nik_ayah,
            'nama_ayah' => $request->nama_ayah,
            'pendidikan_ayah' => $request->pendidikan_ayah,
            'pekerjaan_ayah' => $request->pekerjaan_ayah,
            'penghasilan_ayah' => $request->penghasilan_ayah,
            'nohp_ayah' => $request->nohp_ayah,
            'nik_ibu' => $request->nik_ibu,
            'nama_ibu' => $request->nama_ibu,
            'pendidikan_ibu' => $request->pendidikan_ibu,
            'pekerjaan_ibu' => $request->pekerjaan_ibu,
            'penghasilan_ibu' => $request->penghasilan_ibu,
            'nohp_ibu' => $request->nohp_ibu
        ]);

        Nilai::where('id', $pendaftaran->id_nilai)->update([
            'raport_smt1' => $request->raport_smt1,
            'raport_smt2' => $request->raport_smt2,
            'raport_smt3' => $request->raport_smt3,
            'raport_smt4' => $request->raport_smt4,
            'raport_smt5' => $request->raport_smt5,
            'usbn' => $request->usbn,
            'un' => $request->un
        ]);
        
        Sekolah::where('id', $pendaftaran->id_sekolah)->update([
            'npsn' => $request->npsn,
            'nama_sekolah' => $request->nama_sekolah,
            'status' => $request->status,
            'alamat' => $request->alamat,
            'tahun_lulus' => $request->tahun_lulus
        ]);

        Jurusan::where('id', $pendaftaran->id_jurusan)->update([
            'jurusan' => $request->jurusan
        ]);

        return response()->json([
            'message' => 'Succes',
            'data' => $pendaftaran
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
        $pendaftaran = Pendaftaran::find($id);

        Siswa::where('id', $pendaftaran->id_siswa)->delete();
        OrangTua::where('id', $pendaftaran->id_ortu)->delete();
        Nilai::where('id', $pendaftaran->id_nilai)->delete();
        Sekolah::where('id', $pendaftaran->id_sekolah)->delete();
        Jurusan::where('id', $pendaftaran->id_jurusan)->delete();
        BuktiPembayaran::where('id_pendaftaran', $id )->delete();
        Pengumuman::where('id_pendaftaran', $id)->delete();

        return response()->json([
            'message' => 'Deleted'
        ], 200);
    }
}
