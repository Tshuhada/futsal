@extends('layouts.app')
@section('content')
  <br>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h2 class="panel-title">Ubah Profil</h2>
          </div>
          <div class="panel-body">
            {!! Form::model(auth()->user(), ['url' => url('/settings/profile'),
            'method' => 'post', 'files'=>'true', 'class'=>'form-horizontal']) !!}
          <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
            {!! Form::label('name', 'Nama', ['class'=>'col-md-4 control-label']) !!}
            <div class="col-md-6">
              {!! Form::text('name', null, ['class'=>'form-control']) !!}
              {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
            </div>
          </div>
          <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
            {!! Form::label('email', 'Email', ['class'=>'col-md-4 control-label']) !!}
            <div class="col-md-6">
              {!! Form::email('email', null, ['class'=>'form-control']) !!}
              {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
            </div>
          </div>
          <div class="form-group{{ $errors->has('lokasi') ? ' has-error' : '' }}">
            {!! Form::label('lokasi', 'Lokasi', ['class'=>'col-md-4 control-label']) !!}
            <div class="col-md-6">
              {!! Form::text('lokasi', null, ['class'=>'form-control']) !!}
              {!! $errors->first('lokasi', '<p class="help-block">:message</p>') !!}
            </div>
          </div>
          <div class="form-group{{ $errors->has('tentang') ? ' has-error' : '' }}">
            {!! Form::label('tentang', 'Tentang', ['class'=>'col-md-4 control-label']) !!}
            <div class="col-md-6">
              {!! Form::text('tentang', null, ['class'=>'form-control']) !!}
              {!! $errors->first('tentang', '<p class="help-block">:message</p>') !!}
            </div>
          </div>
          <div class="form-group{{ $errors->has('gambar') ? ' has-error' : '' }}">
            {!! Form::label('gambar', 'Gambar', ['class'=>'col-md-4 control-label']) !!}
            <div class="col-md-3">
              {!! Form::file('gambar') !!}
              {!! $errors->first('gambar', '<p class="help-block">:message</p>') !!}
            </div>
            <img src="{{ asset('image/') }}/{{ auth()->user()->gambar }}" width="75">
          </div>
          <div class="form-group{{ $errors->has('isi') ? ' has-error' : '' }}">
            {!! Form::label('isi', 'Keterangan Tim', ['class'=>'col-md-4 control-label']) !!}
              <div class="col-md-6">
                {!! Form::textarea('isi', null,['class'=>'form-control', 'rows' => 10, 'cols' => 20]) !!}
                {!! $errors->first('isi', '<p class="help-block">:message</p>') !!}
              </div>
          </div>

          <div class="form-group">
            <div class="col-md-6 col-md-offset-4">
            {!! Form::submit('Simpan', ['class'=>'btn btn-primary']) !!}
            </div>
          </div>
            {!! Form::close() !!}
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
