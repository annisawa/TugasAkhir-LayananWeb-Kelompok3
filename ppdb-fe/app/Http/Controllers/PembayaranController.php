<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PembayaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Http::get('http://localhost:8001/api/buktipembayaran')->json();
        
        $pass  = $data['data'];
        return view('admin/pembayaran', [
            "title" => "PPDB Online | Pembayaran"
        ], compact('pass'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    public function tampil(){
        $data = Http::get('http://localhost:8001/api/buktipembayaran')->json();
        
        $pass  = $data['data'];
        return view('peserta/pembayaran', [
            "title" => "PPDB Online | Pembayaran"
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
        $data = Http::get('http://localhost:8001/api/buktipembayaran/'.$id)->json();
        $pass = $data['data'];

        return view('peserta/upload_pembayaran', [
            "title" => "PPDB Online | Upload Bukti Pembayaran"
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
        Http::put('http://localhost:8001/api/buktipembayaran/'.$id, $request->all());

        return redirect('peserta-pembayaran/tampil');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
