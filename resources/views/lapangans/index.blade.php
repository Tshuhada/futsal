@extends('layouts.app')
@section('content')
  <br>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h2 class="panel-title">Daftar List Jawaban Diajak Sparing</h2>
          </div>
          <div class="panel-body">
            <table class="table table-striped table-hover">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nama</th>
                  <th>Alamat</th>
                  <th>Informasi</th>
                </tr>
              </thead>
              <tbody>
                <?php $no = 0; ?>
                	@foreach ($datas as $data => $item)
                <?php $no++ ;?>
                  <tr>
                    <td>{{ $no }}</td>
                    <td>
                      {{ $item->nama }}
                    </td>
                    <td>{{ $item->lokasi }}</td>
                    <td>{{ $item->informasi }}</td>
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
