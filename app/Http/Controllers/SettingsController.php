<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class SettingsController extends Controller
{
    public function profile()
    {
      return view('settings.profile');
    }

    public function __contstruct()
    {
      $this->middleware('auth');
    }

    public function editprofile()
    {
      return view('settings.edit-profile');
    }

    public function updateProfile(Request $request)
    {
        $user = Auth::user();
        $this->validate($request, [
        'name' => 'required',
        'email' => 'required|unique:users,email,' . $user->id,
        'lokasi' => 'required',
        'tentang' => 'required',
        'isi' => 'required'
        ]);
        $user->name = $request->get('name');
        $user->email = $request->get('email');
        $user->lokasi = $request->get('lokasi');
        $user->tentang = $request->get('tentang');
        $user->isi = $request->get('isi');

        $user->update($request->all());

        if ($request->hasFile('gambar')) {
        // menambil cover yang diupload berikut ekstensinya
        $filename = null;
        $uploaded_gambar = $request->file('gambar');
        $extension = $uploaded_gambar->getClientOriginalExtension();
        // membuat nama file random dengan extension
        $filename = md5(time()) . '.' . $extension;
        $destinationPath = public_path() . DIRECTORY_SEPARATOR . 'image';
        // memindahkan file ke folder public/img
        $uploaded_gambar->move($destinationPath, $filename);
        // hapus cover lama, jika ada
        if ($user->gambar) {
        $old_gambar = $user->gambar;
        $filepath = public_path() . DIRECTORY_SEPARATOR . 'image'
        . DIRECTORY_SEPARATOR . $user->gambar;
        try {
        File::delete($filepath);
        } catch (FileNotFoundException $e) {
        // File sudah dihapus/tidak ada
        }
        }
        // ganti field cover dengan cover yang baru
        $user->gambar = $filename;

        $user->save();
        }
        Session::flash("flash_notification", [
        "level"=>"success",
        "message"=>"Profil berhasil diubah"
        ]);
        return redirect('settings/profile');
    }

    public function editPassword()
    {
        return view('settings.edit-password');
    }

    public function updatePassword(Request $request)
    {
        $user = Auth::user();
        $this->validate($request, [
        'password' => 'required|passcheck:' . $user->password,
        'new_password' => 'required|confirmed|min:6',
        ], [
        'password.passcheck' => 'Password lama tidak sesuai'
        ]);
        $user->password = bcrypt($request->get('new_password'));
        $user->save();
        Session::flash("flash_notification", [
        "level"=>"success",
        "message"=>"Password berhasil diubah"
        ]);
        return redirect('settings/password');
    }
}
