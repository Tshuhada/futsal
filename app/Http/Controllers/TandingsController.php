<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Http\Requests;

use Yajra\Datatables\Html\Builder;
use Yajra\Datatables\Datatables;
use App\Tanding;

class TandingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index(Request $request, Builder $htmlBuilder)
     {
         if ($request->ajax()) {
           $tandings = Tanding::with('author');
           return Datatables::of($tandings)
            ->addColumn('action', function($tanding){
              return view('datatable._action', [
                 'model'            => $tanding,
                 'form_url'         => route('tandings.destroy', $tanding->id),
                 'edit_url'         => route('tandings.edit', $tanding->id),
                 'confirm_message'  => 'Yakin mau menghapus ' . $tanding->nama . '?'
              ]);
            })->make(true);
          }

         $html = $htmlBuilder
           ->addColumn(['data' => 'nama', 'name'=>'nama', 'title'=>'Nama'])
           ->addColumn(['data' => 'author.nama', 'name'=>'author.nama', 'title'=>'Lapangan'])
           ->addColumn(['data' => 'waktu', 'name'=>'waktu', 'title'=>'waktu'])
           ->addColumn(['data' => 'action', 'name'=>'action', 'title'=>'', 'orderable'=>false, 'searchable'=>false]);
          return view('tandings.index')->with(compact('html'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tandings.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $this->validate($request, [ 'nama'      => 'required|unique:tandings',
                                  'author_id' => 'required|exists:authors,id',
                                  'waktu'     => 'required'
                                ]);
      $tanding = Tanding::create($request->all());
      Session::flash("flash_notification", [
        "level"=>"success",
        "message"=>"Berhasil menyimpan $tanding->nama"
      ]);

      return redirect()->route('tandings.index');
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
