<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class KelasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Http::get('http://localhost:8005/api/kelas')->json();
        $pass  = $data['data'];
        return view('kelas/data_kelas', [
            "title" => "Data Kelas | SMK Cendikia"
        ], compact('pass'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kelas/tambah_kelas', [
            "title" => "Tambah Data Kelas | SMK Cendikia"
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
        Http::post('http://localhost:8005/api/kelas',[
            'kelas' => $request->kelas
        ]);

        return redirect('kelas');
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
        $data = Http::get('http://localhost:8005/api/kelas/'.$id)->json();
        $pass = $data['data'];

        return view('kelas/edit_kelas', [
            "title" => "Edit Data Kelas | SMK Cendikia"
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
        Http::put('http://localhost:8005/api/kelas/'.$id, $request->all());

        return redirect('kelas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Http::delete('http://localhost:8005/api/kelas/'.$id);

        return redirect('kelas');
    }
}
