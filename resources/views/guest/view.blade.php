@extends('layouts.app')
@section('content')
  <br>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h2 class="panel-title">Daftar Sebagai Lawan</h2>
          </div>
          <div class="panel-body">
            <table class="table table-striped table-hover ">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Tuan Rumah</th>
                  <th>Tanggal</th>
                  <th>Jam</th>
                  <th>Lokasi</th>
                  <th>Lapangan</th>
                </tr>
              </thead>
              <tbody>
                <?php $no = $sparings->firstItem() - 1 ; ?>
                	@foreach ($sparings as $data => $item)
                <?php $no++ ;?>
                  <tr>
                    <td>{{ $no }}</td>
                    <td>
                      <img src="{{ asset('image/'.$item->users->gambar) }}" width="40">
                      <br>
                      {{ $item->users->name }}
                    </td>
                    <td>{{ $item->tanggal }}</td>
                    <td>{{ $item->jam }}</td>
                    <td>{{ $item->users->lokasi }}</td>
                    <td>{{ $item->lapangan->lokasi }}, {{ $item->lapangan->nama }}</td>
                    <td>
                      Silahkan Login
                      <br>
                      Untuk Mengajak sparing
                    </td>
                @endforeach
              </tbody>
            </table>
            {{ $sparings->render() }}
            <br>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
