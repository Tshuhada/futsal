<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Http\Requests;

use Yajra\Datatables\Html\Builder;
use Yajra\Datatables\Datatables;
use App\Dsparing;
use App\sparing;

class DsparingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index()
     {
       $datas = Dsparing::with('sparings', 'users')->orderBy('id','Desc')->paginate(4);
       return view('dsparings.index')->with('datas', $datas);
     }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dsparings.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
     public function store(Request $request)
     {
       $this->validate($request, [ 'sparings_id' => 'required',
                                   'users_id'    => 'required',
                                   'pesan'       => 'required'

                                 ]);
       $dsparing = Dsparing::create($request->all());
       Session::flash("flash_notification", [
         "level"=>"success",
         "message"=>"Berhasil menyimpan Data Daftar Sparing"
       ]);

       return redirect()->route('dsparings.index');
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
      $dsparing = Dsparing::find($id);
      return view ('dsparings.edit')->with(compact('dsparing'));
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
         $this->validate($request, ['sparings_id' => 'required',
                                    'users_id'    => 'required',
                                    'pesan'       => 'required'
                                   ]);
         $dsparing = Dsparing::find($id);
         $dsparing->update($request->all());
         Session::flash("flash_notification", [
          "level"=>"success",
          "message"=>"Data Daftar Tunggu Sparing berhasil diubah"
          ]);
         return redirect()->route('dsparings.index');
     }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      Dsparing::destroy($id);
      Session::flash("flash_notification", [
      "level"=>"success",
      "message"=>"Data Daftar Sparing berhasil dihapus"
      ]);
      return redirect()->route('dsparings.index');
    }
}
