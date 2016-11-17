<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Yajra\Datatables\Html\Builder;
use Yajra\Datatables\Datatables;
use App\Sparing;
use App\SparingLog;
use App\User;
use Laratrust\LaratrustFacade as Laratrust;

class GuestController extends Controller
{
  public function index()
  {
    $iduser = object_get(auth()->user(), 'id');
    $idlog = SparingLog::where('user_id', $iduser)->pluck('sparing_id');
    $sparings = Sparing::with('users')->orderBy('id','Desc')->where('users_id', '<>', $iduser)->whereNotIn('id', $idlog)->paginate(5);
    return view('guest.index')->with('sparings', $sparings);
  }

  public function view()
  {
    $iduser = object_get(auth()->user(), 'id');
    $idlog = SparingLog::where('user_id', $iduser)->pluck('sparing_id');
    $sparings = Sparing::with('users')->orderBy('id','Desc')->where('users_id', '<>', $iduser)->whereNotIn('id', $idlog)->paginate(5);
    return view('guest.view')->with('sparings', $sparings);
  }

  public function list()
  {
    $sparings = User::paginate(6);
    return view('auth.login', compact('sparings'));
  }

  public function li()
  {
    $sparings = User::paginate(6);
    return view('home', compact('sparings'));
  }

  public function lihat($id)
  {
    $sparings = Sparing::with('sparinglog')->find($id);
    // $sparings = SparingLog::with('sparings.users', 'users')->where('sparing_id',auth()->user()->id)->orderBy('id','Desc')->paginate(5);
    return view('guest.lihat')->with('sparings', $sparings);
  }

  public function jawab()
  {
    $sparings = SparingLog::with('sparings.users', 'users')->where('user_id',auth()->user()->id)->orderBy('id','Desc')->paginate(5);
    return view('guest.jawab')->with('sparings', $sparings);
  }

  public function vi()
  {
    // $iduser = object_get(auth()->user(), 'id');
    $sparings = SparingLog::with('sparings.users', 'users')->orderBy('id','Desc')->paginate(5);
    return view('guest.vi')->with('sparings', $sparings);
  }
}
