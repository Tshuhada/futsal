<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lap_Futsal;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;

use App\Http\Requests;

class Lap_FutsalsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lap_futsal = Lap_Futsal::paginate();
        return view('lap_futsals.index')->with('lap_futsal', $lap_futsal);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('lap_futsals.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
     public function store(Request $request)
     {
       $this->validate($request, [ 'nama'   => 'required',
                                   'alamat' => 'required'
                                 ]);

       $sparing = Lap_Futsal::create([
           'nama'    => $request['nama'],
           'alamat'  => $request['alamat'],
       ]);

       Session::flash("flash_notification", [
         "level"=>"success",
         "message"=>"Berhasil menyimpan Data Lapangan Futsal"
       ]);

       return redirect()->route('lap_futsals.index');
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
      $lap_futsal = Lap_Futsal::find($id);
      return view('lap_futsals.edit')->with('lap_futsal', $lap_futsal);
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
      $this->validate($request, ['nama'    => 'required',
                                 'alamat'  => 'required'
                                ]);
      $lap_futsal = Lap_Futsal::find($id);
      $lap_futsal->update([
          'nama'    => $request['nama'],
          'alamat'  => $request['alamat'],
      ]);
      Session::flash("flash_notification", [
       "level"=>"success",
       "message"=>"Data Lapangan berhasil diubah"
       ]);
      return redirect()->route('lap_futsals.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      Lap_Futsal::destroy($id);
      Session::flash("flash_notification", [
      "level"=>"success",
      "message"=>"Data Lapangan berhasil dihapus"
      ]);
      return redirect()->route('lap_futsals.index');
    }
}
