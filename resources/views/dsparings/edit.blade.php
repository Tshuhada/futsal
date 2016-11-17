@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-12">

        <ul class="breadcrumb">
          <li><a href="{{ url('/home') }}">Dashboard</a></li>
          <li><a href="{{ url('/admin/dsparings') }}">Tunggu Pertandingan</a></li>
          <li class="active">Ubah Tunggu Pertandingan</li>
        </ul>

        <div class="panel panel-default">

            <div class="panel-heading">
              <h2 class="panel-title">Ubah Tunggu Pertandingan</h2>
            </div>

            <div class="panel-body">
              {!! Form::model($dsparing, ['url' => route('dsparings.update', $dsparing->id),
              'method' => 'put', 'files'=>'true', 'class'=>'form-horizontal']) !!}
              @include('dsparings._form')
              {!! Form::close() !!}
            </div>
        </div>
      </div>
    </div>
  </div>
@endsection
