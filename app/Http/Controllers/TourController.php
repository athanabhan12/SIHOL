<?php

namespace App\Http\Controllers;

use App\Models\DataTour;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TourController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = auth()->user();
        $data_tour_raw = DB::select("CALL sp_tour($user->id)");
        $data_tour = $data_tour_raw[0];
        $data_tours = DB::select("CALL sp_data_tours($data_tour->id)");

        return view('tour',compact('data_tours'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tambah_tour', compact('data_tours'));   
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = auth()->user(); // Mengambil data user dari database berdasarkan id_user yang login

        $data_tours                                  = new DataTour();
        $data_tours->id_tour_leader                  = $user->id;
        $data_tours->nama_tour                       = $request->nama_tour;
        $data_tours->tgl_berangkat_tour              = $request->tgl_berangkat_tour;
        $data_tours->tgl_selesai_tour                = $request->tgl_selesai_tour;
        $data_tours->destinasi_tour                  = $request->destinasi_tour;
        $data_tours->rombongan_tour                  = $request->rombongan_tour;
        $data_tours->jumlah_peserta_tour             = $request->jumlah_peserta_tour;
        $data_tours->save();
         
        return redirect('tour');
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
