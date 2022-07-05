<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kelas;
use App\Models\Mapel;
use App\Models\Jadwal;
use Http\Message;
use Illuminate\Support\Facades\Http;

class JadwalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Jadwal::with('kelas', 'mapel')->get();
        foreach ($data as $tf){
           $var = Http::get('localhost:8003/api/pegawai/'.$tf->id_identitas)->json();
            $res[] = [
                'id' => $tf->id,
                'id_identitas' => $tf->id_identitas,
                'id_kelas' => $tf->id_kelas,
                'id_mapel' => $tf->id_mapel,
                'kelas' => [
                    'kelas' => $tf->kelas
                ],
                'mapel' => [
                    'mapel' => $tf->mapel
                ],
                'guru' => [
                    'nama' => $var['data']['datapribadi']['nama'],
                    'jabatan' => $var['data']['jabatan']
                ],
                'hari' => $tf->hari,
                'jam' => $tf->jam
            ];

      }
      return $res;

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
        $jadwal = array(
            'id_identitas' => $request->id_identitas,
            'id_kelas' => $request->id_kelas,
            'id_mapel' => $request->id_mapel,
            'hari' => $request->hari,
            'jam' => $request->jam
        );

        Jadwal::create($jadwal);

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
        $data = Jadwal::find($id);
        $data = Jadwal::with('kelas', 'mapel')->where('id', $id)->firstOrFail();  
        $req = Http::get('localhost:8003/api/pegawai/'.$data->id_identitas);

        $res[] = [
                'id' => $data->id,
                'id_identitas' => $data->id_identitas,
                'id_kelas' => $data->id_kelas,
                'id_mapel' => $data->id_mapel,
                'kelas' => [
                    'kelas' => $data->kelas
                ],
                'mapel' => [
                    'mapel' => $data->mapel
                ],
                'guru' => [
                    'nama' => $req['data']['datapribadi']['nama'],
                    'jabatan' => $req['data']['jabatan']
                ],
                'hari' => $data->hari,
                'jam' => $data->jam
            ];

        return  $res;
    }

    public function guru()
    {
        $data = Http::get('http://localhost:8003/api/pegawai')->json();

        return $data;
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
        $jadwal = Jadwal::find($id);

        $jadwal->update($request->all());

        return response()->json([
            'message' => 'Success',
            'data' => $jadwal
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
        $jadwal = Jadwal::find($id);
        $jadwal->delete();

        return response()->json([
            'message' => 'Deleted',
            'data' => $jadwal
        ],200);
    }
}
