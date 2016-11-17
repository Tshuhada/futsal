@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="panel panel-default">

            <div class="panel-heading">
              <h2 class="panel-title">Ubah Galeri</h2>
            </div>

            <div class="panel-body">
              {!! Form::model($galeri, ['url' => route('galeri.update', $galeri->id),
              'method' => 'put', 'files'=>'true', 'class'=>'form-horizontal']) !!}
              @include('galeri._form')
              {!! Form::close() !!}
            </div>
        </div>
      </div>
    </div>
  </div>
@endsection
