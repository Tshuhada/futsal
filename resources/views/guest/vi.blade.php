@extends('layouts.app')
@section('content')
  <br>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h2 class="panel-title">Daftar Yang Akan Sparing</h2>
          </div>
          <div class="panel-body">
            <table class="table table-striped table-hover">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Away</th>
                  <th></th>
                  <th>Lawan</th>
                  <th>Tanggal</th>
                  <th>Jam</th>
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
                    <td>
                      <h1>VS</h1>
                    </td>
                    <td>
                      <img src="{{ asset('image/') }}/{{ object_get($item, 'sparings.users.gambar', '-') }}" width="40">
                      <br>
                      {{ object_get($item, 'sparings.users.name', '-') }}
                    </td>
                    <td>{{ $item->sparings->tanggal }}</td>
                    <td>{{ $item->sparings->jam }}</td>
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
            {{ $sparings->render() }}
            <br>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
