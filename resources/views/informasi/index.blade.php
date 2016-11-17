@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <br>
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
                  <th>Judul</th>
                  <th>Kategori</th>
                </tr>
              </thead>
              <tbody>
                <a href="{{ ('informasi/create') }}" class="btn btn-primary">Tambah</a>
                <?php $no = $informasi->firstItem() - 1 ; ?>
                	@foreach ($informasi as $informasi => $item)
                <?php $no++ ;?>
                  <tr>
                    <td>{{ $no }}</td>
                    <td>{{ $item->judul }}</td>
                    <td>{{ $item->jenis }}</td>
                    <td>{!! $item->isi !!}</td>
                    <td>
                    <td><a href="{{ route('informasi.edit', $item->id) }}" class="btn btn-success btn-sm">Ubah</a>
                    </td>
                    <td>
                       <form action="{{ route('informasi.destroy', $item->id) }}" method="post">
                          {{ csrf_field() }}
                          <input type="hidden" name="_method" value="DELETE">
                          <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                       </form>
                    </td>
                  </tr>
                @endforeach
              </tbody>
            </table>
            @include('layouts.gambar')
            <br>
            @include('layouts.footer')
          </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
