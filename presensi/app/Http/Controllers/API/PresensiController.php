<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Presensi;
use Http\Message;
use Illuminate\Support\Facades\Http;

class PresensiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Presensi::all();
        return response()->json(['message' => 'Succes',
            'data' => $data,
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
        $presensi = array(
            'id_jadwal' => $request->id_jadwal,
            'id_pembagian_kelas' => $request->id_pembagian_kelas,
            'id_siswa' => $request->id_siswa,
            'keterangan' => $request->keterangan
        );

        Presensi::create($presensi);

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
        $presensi = Presensi::find($id);
        $presensi->delete();

        return response()->json([
            'message' => 'Deleted',
            'data' => $presensi
        ],200);
    }
}
