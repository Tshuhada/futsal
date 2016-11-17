@extends('layouts.app')
@section('content')
  <br>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h2 class="panel-title">Daftar List Lawan Penantang</h2>
          </div>
          <div class="panel-body">
            <table>
              <tbody>
                <tr>
                  <th width="100">
                    Tanggal
                  </th>
                  <td>
                    :
                  </td>
                  <td>
                    {{ $sparings->tanggal}}
                  </td>
                </tr>
                <tr>
                  <th width="100">
                    Jam
                  </th>
                  <td>
                    :
                  </td>
                  <td>
                    {{ $sparings->jam}}
                  </td>
                </tr>
                <tr>
                  <th width="100">
                    Tuan Rumah
                  </th>
                  <td>
                    :
                  </td>
                  <td>
                    {{ $sparings->users->name}}
                  </td>
                </tr>
              </tbody>
            </table>
            <table class="table table-striped table-hover">
              <thead>
                <tr>
                  <th>No</th>
                  {{-- <th>Tuan Rumah</th>
                  <th></th> --}}
                  <th>Penantang</th>
                  {{-- <th>Tanggal</th>
                  <th>Jam</th> --}}

                  <th>Status</th>

                  <th width="220">

                  </th>
                </tr>
              </thead>
              <tbody>
                <?php $no = 0 ; ?>
                	@foreach ($sparings->sparinglog as $data => $item)
                <?php $no++ ;?>

                  <tr>
                    <td>{{ $no }}</td>
                    {{-- <td>
                      <img src="{{ asset('image/') }}/{{ object_get($item, 'sparings.users.gambar', '-') }}" width="40">
                      <br>
                      {{ object_get($item, 'sparings.users.name', '-') }}
                    </td> --}}
                    {{-- <td>
                      <h1>VS</h1>
                    </td> --}}
                    <td>
                      <img src="{{ asset('image/'.$item->users->gambar) }}" width="40">
                      <br>
                      {{ $item->users->name }}
                    </td>
                    {{-- <td>{{ $item->sparings->tanggal }}</td>
                    <td>{{ $item->sparings->jam }}</td> --}}
                    <td>
                      {{ $item->status }}
                    </td>
                    <td>
                      <a href="{{ route('update-status', ['id'=>$item->id, 'status'=>1]) }}" class="btn btn-primary btn-sm">Setuju</a>
                      <a href="{{ route('update-status', ['id'=>$item->id, 'status'=>2]) }}" class="btn btn-danger btn-sm">Tidak</a>
                      <a href="{{ route('update-status', ['id'=>$item->id, 'status'=>3]) }}" class="btn btn-success btn-sm">Batal</a>
                    </td>
                    {{-- <td>
                      <li>
                        {!! Form::open(['url' => route('member.sparings.return', $sparingLog->sparing_id),
                        'method'        => 'put',
                        'class'         => 'form-inline js-confirm',
                        'data-confirm'  => "Anda yakin hendak mengembalikan "  . "?"] ) !!}
                        {{ $borrowLog->book->title }}
                        {!! Form::submit('Kembalikan', ['class'=>'btn btn-xs btn-default']) !!}
                        {!! Form::close() !!}
                      </li>
                    </td> --}}
                @endforeach
              </tbody>
            </table>
            <br>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
