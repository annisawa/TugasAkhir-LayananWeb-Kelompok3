<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Materi;
use Http\Message;
use Illuminate\Support\Facades\Http;


class MateriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Materi::all();
        foreach ($data as $tf){
           $var = Http::get('localhost:8005/api/jadwal/'.$tf->id_jadwal)->json();
            $res[] = [
                'id' => $tf->id,
                'id_jadwal' => $tf->id_jadwal,
                'judul_materi' => $tf->judul_materi,
                'isi' => $tf->isi,
                'file' => $tf->file
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

    public function jadwal()
    {
        $data = Http::get('http://localhost:8005/api/jadwal')->json();

        return $data;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $materi = array(
            'id_jadwal' => $request->id_jadwal,
            'judul_materi' => $request->judul_materi,
            'isi' => $request->isi,
            'file' => $request->file
        );

        Materi::create($materi);

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
        $materi = Materi::find($id);
        $materi->delete();

        return response()->json([
            'message' => 'Deleted',
            'data' => $materi
        ],200);
    }
}
