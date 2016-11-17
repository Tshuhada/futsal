@extends('layouts.app')

@section('content')
  <br>
  <div class="row">
    <div class="panel panel-default">
      <div class="panel-body">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h2 class="panel-title">Tambah Tempat Futsal</h2>
            </div>
            <div class="panel-body">
              {!! Form::open(['url' => route('lap_futsals.store'),
              'method' => 'post', 'files'=>'true', 'class'=>'form-horizontal']) !!}
              @include('lap_futsals._form')
              {!! Form::close() !!}
            <br>
            </div>
          </div>
      </div>
    </div>
@endsection
