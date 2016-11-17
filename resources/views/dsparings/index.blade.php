@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <ul class="breadcrumb">
          <li><a href="{{ url('/home') }}">Dashboard</a></li>
          <li class="active">Menunggu Pertandingan</li>
        </ul>
        <div class="panel panel-default">
          <div class="panel-heading">
            <h2 class="panel-title">Menunggu Pertandingan</h2>
          </div>
          <div class="panel-body">
            <table class="table table-striped table-hover ">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Tim Tamu</th>
                  <th>Tuan Rumah</th>
                  <th>Pesan</th>
                </tr>
              </thead>
              <tbody>
                <a href="{{ ('dsparings/create') }}" class="btn btn-primary">Tambah</a>
                <?php $no = $datas->firstItem() - 1 ; ?>
                	@foreach ($datas as $data => $item)
                <?php $no++ ;?>
                  <tr>
                    <td>{{ $no }}</td>
                    <td>{{ $item->springs_id }}</td>
                    <td>{{ $item->users->name }}</td>
                    <td>{{ $item->pesan }}</td>
                    <td><a href="{{ route('dsparings.edit', $item->id) }}" class="btn btn-success btn-sm">Ubah</a>
                    </td>
                    <td>
                       <form action="{{ route('dsparings.destroy', $item->id) }}" method="post">
                          {{ csrf_field() }}
                          <input type="hidden" name="_method" value="DELETE">
                          <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                       </form>
                    </td>
                  </tr>
                @endforeach
              </tbody>
            </table>
            {{ $datas->render() }}
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
