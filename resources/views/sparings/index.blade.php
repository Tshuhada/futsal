@extends('layouts.app')
@section('content')
  <br>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        {{-- <ul class="breadcrumb">
          <li><a href="{{ url('/home') }}">Dashboard</a></li>
          <li class="active">Pertandingan</li>
        </ul> --}}
        <div class="panel panel-default">
          <div class="panel-heading">
            <h2 class="panel-title">Pertandingan</h2>
          </div>
          <div class="panel-body">
            <table class="table table-striped table-hover ">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Tuan Rumah</th>
                  <th>Lapangan</th>
                  <th>Tanggal</th>
                  <th>Waktu</th>
                  <th>Konsekuensi</th>
                  <th>Status</th>
                </tr>
              </thead>
              <tbody>
                <a href="{{ ('sparings/create') }}" class="btn btn-primary">Tambah</a>
                <?php $no = $datas->firstItem() - 1 ; ?>
                	@foreach ($datas as $data => $item)
                <?php $no++ ;?>
                  <tr>
                    <td>{{ $no }}</td>
                    <td>{{ $item->users->name }}</td>
                    <td>{{ $item->lapangan->nama }}</td>
                    <td>{{ $item->tanggal }}</td>
                    <td>{{ $item->jam }}</td>
                    <td>{{ $item->konsekuensi }}</td>
                    <td>{{ $item->status }}</td>
                    <td><a href="{{ route('sparings.edit', $item->id) }}" class="btn btn-success btn-sm">Ubah</a>
                    </td>
                    <td>
                       <form action="{{ route('sparings.destroy', $item->id) }}" method="post">
                          {{ csrf_field() }}
                          <input type="hidden" name="_method" value="DELETE">
                          <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                       </form>
                    </td>
                    <td><a href="{{ url('/lihat', $item->id) }}" class="btn btn-success btn-sm">Lihat List Sparing</a>
                    <td>
                  </tr>
                @endforeach
              </tbody>
            </table>
            {{ $datas->render() }}
            <br>
          </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
