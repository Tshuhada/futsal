@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-12">

        <ul class="breadcrumb">
          <li><a href="{{ url('/home') }}">Dashboard</a></li>
          <li><a href="{{ url('/admin/sparings') }}">Pertandingan</a></li>
          <li class="active">Ubah Pertandingan</li>
        </ul>

        <div class="panel panel-default">

            <div class="panel-heading">
              <h2 class="panel-title">Ubah Pertandingan</h2>
            </div>

            <div class="panel-body">
              {!! Form::model($sparing, ['url' => route('sparings.update', $sparing->id),
              'method' => 'put', 'files'=>'true', 'class'=>'form-horizontal']) !!}
              @include('sparings._form')
              {!! Form::close() !!}
            </div>
        </div>
      </div>
    </div>
  </div>
@endsection
