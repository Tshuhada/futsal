@extends('layouts.app')

@section('content')
  <br>
  <div class="row">
    <div class="panel panel-default">
      <div class="panel-body">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h2 class="panel-title">Tambah Galeri</h2>
            </div>
            <div class="panel-body">
              {!! Form::open(['url' => route('galeri.store'),
              'method' => 'post', 'files'=>'true', 'class'=>'form-horizontal']) !!}
              @include('galeri._form')
              {!! Form::close() !!}
            <br>
            @include('layouts.footer')
            </div>
          </div>
      </div>
    </div>
@endsection
