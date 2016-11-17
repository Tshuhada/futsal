<?php
namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\User;
use App\Role;
use Validator;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/sparings';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration data.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
            'lokasi' => 'required|max:20',
            'tentang' => 'required|max:255',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'lokasi' => $data['lokasi'],
            'tentang' => $data['tentang'],
        ]);
        $memberRole = Role::where('name', 'member')->first();
        $user->attachRole($memberRole);
        if (request()->hasFile('gambar'))
        {
            // Mengambil file yang diupload
            $uploaded_gambar = request()->file('gambar');

            // mengambil extension file
            $extension = $uploaded_gambar->getClientOriginalExtension();

            // membuat nama file random berikut extension
            $filename = md5(time()) . '.' . $extension;

            // menyimpan gambar ke folder public/img
            $destinationPath = public_path() . DIRECTORY_SEPARATOR . 'image';
            $uploaded_gambar->move($destinationPath, $filename);

            // mengisi field gambar di book dengan filename yang baru dibuat
            $user->gambar = $filename;
            $user->save();
        }

        return $user;
    }
}
