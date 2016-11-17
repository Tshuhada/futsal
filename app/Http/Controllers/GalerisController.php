<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Galeri;
use App\Http\Requests;
use Session;
use Illuminate\Support\Facades\File;

class GalerisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $galeri = Galeri::orderBy('id','Desc')->paginate(4);
      return view('galeri.index')->with('galeri', $galeri);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('galeri.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $this->validate($request, [ 'judul'       => 'required',
                                  'jenis'       => 'required',
                                  'lokasi_file' => 'image|max:2048'
                                ]);

      $galeri = Galeri::create($request->except('lokasi_file'));
      // isi field cover jika ada cover yang diupload
      if ($request->hasFile('lokasi_file')) {
      // Mengambil file yang diupload
      $uploaded_cover = $request->file('lokasi_file');
      // mengambil extension file
      $extension = $uploaded_cover->getClientOriginalExtension();
      // membuat nama file random berikut extension
      $filename = md5(time()) . '.' . $extension;
      // menyimpan cover ke folder public/img
      $destinationPath = public_path() . DIRECTORY_SEPARATOR . 'image';
      $uploaded_cover->move($destinationPath, $filename);
      // mengisi field cover di book dengan filename yang baru dibuat
      $galeri->lokasi_file = $filename;
      $galeri->save();
      }
      Session::flash("flash_notification", [
      "level"=>"success",
      "message"=>"Berhasil menyimpan $galeri->judul"
      ]);
      return redirect()->route('galeri.index');
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
      $galeri = Galeri::find($id);
      return view('galeri.edit')->with(compact('galeri'));
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
      $this->validate($request, [ 'judul'       => 'required',
                                  'jenis'       => 'required',
                                  'lokasi_file' => 'image|max:2048'
                                ]);
      $galeri = Galeri::find($id);
      $galeri->update($request->all());

      if ($request->hasFile('lokasi_file')) {
      // menambil cover yang diupload berikut ekstensinya

      $filename = null;
      $uploaded_cover = $request->file('lokasi_file');
      $extension = $uploaded_cover->getClientOriginalExtension();
      // membuat nama file random dengan extension

      $filename = md5(time()) . '.' . $extension;
      $destinationPath = public_path() . DIRECTORY_SEPARATOR . 'image';
      // memindahkan file ke folder public/img

      $uploaded_cover->move($destinationPath, $filename);
      // hapus cover lama, jika ada

      if ($galeri->lokasi_file) {
      $old_lokasi_file = $galeri->lokasi_file;
      $filepath = public_path() . DIRECTORY_SEPARATOR . 'image'
      . DIRECTORY_SEPARATOR . $galeri->lokasi_file;

      try {
      File::delete($filepath);
      } catch (FileNotFoundException $e) {
      // File sudah dihapus/tidak ada
      }
      }
      // ganti field cover dengan cover yang baru
      $galeri->lokasi_file = $filename;
      $galeri->save();
      }
      Session::flash("flash_notification", [
      "level"=>"success",
      "message"=>"Berhasil menyimpan $galeri->judul"
      ]);
      return redirect()->route('galeri.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $galeri = Galeri::find($id);
      // hapus cover lama, jika ada

      if ($galeri->lokasi_file) {
      $old_lokasi_file = $galeri->lokasi_file;
      $filepath = public_path() . DIRECTORY_SEPARATOR . 'image'
      . DIRECTORY_SEPARATOR . $galeri->lokasi_file;
      try {
      File::delete($filepath);
      } catch (FileNotFoundException $e) {
      // File sudah dihapus/tidak ada
      }
      }
      $galeri->delete();
      Session::flash("flash_notification", [
      "level"=>"success",
      "message"=>"Gambar berhasil dihapus"
      ]);
      return redirect()->route('galeri.index');
          }
    }
