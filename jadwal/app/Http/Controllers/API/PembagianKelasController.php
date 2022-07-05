<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kelas;
use App\Models\PembagianKelas;
use Http\Message;
use Illuminate\Support\Facades\Http;

class PembagianKelasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$data = PembagianKelas::all();
        $data = PembagianKelas::with('kelas')->get();
        foreach ($data as $tf){
           $var = Http::get('localhost:8001/api/pendaftaran/'.$tf->id_siswa)->json();
            $res[] = [
                'id' => $tf->id,
                'id_siswa' => $tf->id_siswa,
                'id_jurusan' => $tf->id_jurusan,
                'id_kelas' => $tf->id_kelas,
                'kelas' => [
                    'kelas' => $tf->kelas
                ],
                'siswa' => [
                    'nama' => $var['data']['siswa']['nama']
                ],
                'jurusan' => [
                    'jurusan' => $var['data']['jurusan']['jurusan']
                ]
            ];

      }
      return $res;  //$var['data']['siswa']['nama'];
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pembagiankelas = array(
            'id_siswa' => $request->id_siswa,
            'id_kelas' => $request->id_kelas,
            'id_jurusan' => $request->id_jurusan
        );

        PembagianKelas::create($pembagiankelas);

        return response()->json([
            'message' => 'Succes'
        ], 200);
    }

    public function siswa()
    {
        $data = Http::get('http://localhost:8001/api/pengumuman')->json();

        return $data;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = PembagianKelas::find($id);
        $data = PembagianKelas::with('kelas')->where('id', $id)->firstOrFail();  
        $req = Http::get('localhost:8001/api/pendaftaran/'.$data->id_siswa);

        $res[] = [
                'id' => $data->id,
                'id_siswa' => $data->id_siswa,
                'id_jurusan' => $data->id_jurusan,
                'id_kelas' => $data->id_kelas,
                'kelas' => [
                    'kelas' => $data->kelas
                ],
                'siswa' => [
                    'nama' => $req['data']['siswa']['nama']
                ],
                'jurusan' => [
                    'jurusan' => $req['data']['jurusan']['jurusan']
                ]
            ];

        return  $res;
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
        $pembagiankelas = PembagianKelas::find($id);

        $pembagiankelas->update($request->all());

        return response()->json([
            'message' => 'Success',
            'data' => $pembagiankelas
        ],200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pembagiankelas = PembagianKelas::find($id);
        $pembagiankelas->delete();

        return response()->json([
            'message' => 'Deleted',
            'data' => $pembagiankelas
        ],200);
    }
}
