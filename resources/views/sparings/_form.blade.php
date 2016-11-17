<div class="form-group{{ $errors->has('users_id') ? ' has-error' : '' }}">
  {!! Form::label('users_id', 'Tuan Rumah', ['class'=>'col-md-2 control-label']) !!}
    <div class="col-md-9">
      {!! Form::select('users_id', [Auth::user()->id => Auth::user()->name], null) !!}
      {!! $errors->first('users_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group{{ $errors->has('lapangan_id') ? ' has-error' : '' }}">
  {!! Form::label('lapangan_id', 'Lapangan', ['class'=>'col-md-2 control-label']) !!}
    <div class="col-md-9">
      {!! Form::select('lapangan_id', [''=>'']+App\Lapangan::pluck('nama','id')->all(), null) !!}
      {!! $errors->first('lapangan_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group{{ $errors->has('tanggal') ? ' has-error' : '' }}">
  {!! Form::label('tanggal', 'Tanggal', ['class'=>'col-md-2 control-label']) !!}
    <div class="col-md-9">
      {!! Form::date('tanggal', null, ['class'=>'form-control']) !!}
      {!! $errors->first('tanggal', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {!! $errors->has('jam') ? 'has-error' : '' !!}">
  {!! Form::label('jam', 'Jam', ['class'=>'col-md-2 control-label']) !!}
    <div class="col-md-9">
      {!! Form::time('jam', null, ['class'=>'form-control']) !!}
      {!! $errors->first('jam', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group{{ $errors->has('konsekuensi') ? ' has-error' : '' }}">
  {!! Form::label('konsekuensi', 'Konsekuensi', ['class'=>'col-md-2 control-label']) !!}
    <div class="col-md-9">
      {!! Form::text('konsekuensi', null, ['class'=>'form-control']) !!}
      {!! $errors->first('konsekuensi', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group{{ $errors->has('status') ? ' has-error' : '' }}">
  {!! Form::label('status', 'Status', ['class'=>'col-md-2 control-label']) !!}
    <div class="col-md-9">
      {!! Form::text('status', null, ['class'=>'form-control']) !!}
      {!! $errors->first('status', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-4 col-md-offset-2">
      {!! Form::submit('Simpan', ['class'=>'btn btn-primary']) !!}
    </div>
</div>
