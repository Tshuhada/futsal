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
                  <th width="100">No</th>
                  <th width="100">Nama Lapangan</th>
                  <th width="10">&nbsp;</th>
                  <th width="300">&nbsp;</th>
                </tr>
              </thead>
              <tbody>
                <a href="{{ ('lap_futsals/create') }}" class="btn btn-primary">Tambah</a>
                <?php $no = $lap_futsal->firstItem() - 1 ; ?>
                	@foreach ($lap_futsal as $data => $item)
                <?php $no++ ;?>
                  <tr>
                    <td>{{ $no }}</td>
                    <td>{{ $item->nama }}</td>
                    <td><a href="{{ route('lap_futsals.edit', $item->id) }}" class="btn btn-success btn-sm">Ubah</a></td>
                    <td>
                       <form action="{{ route('lap_futsals.destroy', $item->id) }}" method="post">
                          {{ csrf_field() }}
                          <input type="hidden" name="_method" value="DELETE">
                          <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                       </form>
                    </td>
                  </tr>
                @endforeach
              </tbody>
            </table>
            {{ $lap_futsal->render() }}
            <br>
          </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
