<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Http\Requests;

use Yajra\Datatables\Html\Builder;
use Yajra\Datatables\Datatables;
use App\Sparing;
use App\Lapangan;
use App\SparingLog;
use Illuminate\Support\Facades\Auth;

class SparingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index()
     {
       $datas = Sparing::with('lapangan', 'users')->where('users_id',auth()->user()->id)->orderBy('id','Desc')->paginate(4);
      //  return dd($datas->toArray());
       return view('sparings.index')->with('datas', $datas);
     }

     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sparings.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $this->validate($request, [ 'users_id'    => 'required',
                                  'lapangan_id' => 'required',
                                  'tanggal'     => 'required',
                                  'jam'         => 'required',
                                  'konsekuensi' => 'required',
                                  'status'      => 'required'
                                ]);
      $sparing = Sparing::create([
          'users_id'    => $request['users_id'],
          'lapangan_id' => $request['lapangan_id'],
          'tanggal'     => $request['tanggal'],
          'jam'         => $request['jam'],
          'konsekuensi' => $request['konsekuensi'],
          'status'      => $request['status'],
      ]);
      Session::flash("flash_notification", [
        "level"=>"success",
        "message"=>"Berhasil menyimpan Data Sparing"
      ]);

      return redirect()->route('sparings.index');
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
      $sparing = Sparing::find($id);
      return view ('sparings.edit')->with(compact('sparing'));
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
         $this->validate($request, ['users_id'    => 'required',
                                    'lapangan_id' => 'required',
                                    'tanggal'     => 'required',
                                    'jam'         => 'required',
                                    'konsekuensi' => 'required',
                                    'status'      => 'required'
                                   ]);
         $sparing = Sparing::find($id);
         $sparing->update([
             'users_id'    => $request['users_id'],
             'lapangan_id' => $request['lapangan_id'],
             'tanggal'     => $request['tanggal'],
             'jam'         => $request['jam'],
             'konsekuensi' => $request['konsekuensi'],
             'status'      => $request['status'],
         ]);
         Session::flash("flash_notification", [
          "level"=>"success",
          "message"=>"Data Sparing berhasil diubah"
          ]);
         return redirect()->route('sparings.index');
     }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      Sparing::destroy($id);
      Session::flash("flash_notification", [
      "level"=>"success",
      "message"=>"Data Sparing berhasil dihapus"
      ]);
      return redirect()->route('sparings.index');
    }

    public function sparing($id)
    {
      try {
          $sparing = Sparing::findOrFail($id);
          SparingLog::create([
          'user_id' => Auth::user()->id,
          'sparing_id' => $id
          ]);
          Session::flash("flash_notification", [
          "level"=>"success",
          "message"=>"Berhasil mengajak sparing $sparing->name"
          ]);
        }
          catch (ModelNotFoundException $e) {
          Session::flash("flash_notification", [
          "level"=>"danger",
          "message"=>"Data Lawan Sparing tidak ditemukan."
          ]);
        }
        return redirect('/jadwal');
    }

    public function status($id)
    {
      $is_returned = request('status');
      $sparing = SparingLog::findOrFail($id);
      $sparing->update(compact('is_returned'));

      return redirect()->back();
    }
}
