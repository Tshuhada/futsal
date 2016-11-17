@extends('layouts.app')
@section('content')
  <br>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="panel panel-default">
          <div class="panel-heading">
          <h2 class="panel-title">Profil</h2>
          </div>
          <div class="panel-body">
            <table class="table">
            <tbody>
            <tr>
            <td class="text-muted">Gambar</td>
            <td>
              {{-- {{ auth()->user()->gambar }} --}}
            <img src="{{ asset('image/') }}/{{ auth()->user()->gambar }}" width="40">
            </td>
            </tr>
            {{-- <img src="image/{{ $image->photo, $image->title }}" alt=""> --}}
            <tr>
            <td class="text-muted">Nama</td>
            <td>{{ auth()->user()->name }}</td>
            </tr>
            <tr>
            <td class="text-muted">Email</td>
            <td>{{ auth()->user()->email }}</td>
            </tr>
            <tr>
            <td class="text-muted">Lokasi</td>
            <td>{{ auth()->user()->lokasi }}</td>
            </tr>
            <tr>
            <td class="text-muted">Tentang Kami</td>
            <td>{{ auth()->user()->tentang }}</td>
            </tr>
            <tr>
            <td class="text-muted">Informasi</td>
            <td>{!! auth()->user()->isi !!}</td>
            </tr>
            </tbody>
            </table>
            <a class="btn btn-primary" href="{{ '/settings/profile/edit'}}">Ubah Profil</a>
            <a class="btn btn-primary" href="{{ url('/settings/password') }}">Ubah Password</a>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
