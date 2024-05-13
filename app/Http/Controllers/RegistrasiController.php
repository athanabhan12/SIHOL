<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\Peserta;
use App\Models\Kehadiran;

class RegistrasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('registrasi');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    public function scan($id)
    {
        $peserta = Peserta::findOrFail($id);
        return response()->json(['peserta' => $peserta]);
    }

    public function qrcode(Request $request)
    {
        dd($request->qr_code);
    }

    public function detailscan(Request $request)
    {
        $peserta = $request->input('nama_peserta');
        var_dump($peserta);die;
        return response()->json($peserta);
    }

    public function handleScan(Request $request)
{
    $decodedText = $request->input('decodedText');
    
    // Lakukan apa pun yang diperlukan dengan data yang didekode
    // Misalnya, simpan ke database, dll.
    
    // Berikan respons ke klien jika diperlukan
    return response()->json(['status' => 'success', 'message' => 'Data berhasil diproses']);
}


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $kehadiran                                = new Kehadiran();
        $kehadiran->nama_peserta                  = $request->nama_peserta;
        $kehadiran->save();
         
        return redirect('registrasi');
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
        //
    }
}
