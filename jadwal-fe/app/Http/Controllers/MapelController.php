<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class MapelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Http::get('http://localhost:8005/api/mapel')->json();
        $pass  = $data['data'];
        return view('mapel/data_mapel', [
            "title" => "Data Mata Pelajaran | SMK Cendikia"
        ], compact('pass'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('mapel/tambah_mapel', [
            "title" => "Tambah Data Mata Pelajaran | SMK Cendikia"
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
        Http::post('http://localhost:8005/api/mapel',[
            'mapel' => $request->mapel
        ]);

        return redirect('mapel');
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
        $data = Http::get('http://localhost:8005/api/mapel/'.$id)->json();
        $pass = $data['data'];

        return view('mapel/edit_mapel', [
            "title" => "Edit Data Mata Pelajaran | SMK Cendikia"
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
        Http::put('http://localhost:8005/api/mapel/'.$id, $request->all());

        return redirect('mapel');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Http::delete('http://localhost:8005/api/mapel/'.$id);

        return redirect('mapel');
    }
}
