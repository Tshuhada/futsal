<div class="form-group{{ $errors->has('sparings_id') ? ' has-error' : '' }}">
  {!! Form::label('sparings_id', 'Tim Lawan', ['class'=>'col-md-2 control-label']) !!}
    <div class="col-md-4">
      {!! Form::select('sparings_id', [''=>'']+App\Sparing::pluck('versus_id','id')->all(), null) !!}
      {!! $errors->first('sparings_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group{{ $errors->has('users_id') ? ' has-error' : '' }}">
  {!! Form::label('users_id', 'Tuan Rumah', ['class'=>'col-md-2 control-label']) !!}
    <div class="col-md-4">
      {!! Form::select('users_id', [Auth::user()->id => Auth::user()->name], null) !!}
      {!! $errors->first('users_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {!! $errors->has('pesan') ? 'has-error' : '' !!}">
  {!! Form::label('pesan', 'Pesan', ['class'=>'col-md-2 control-label']) !!}
    <div class="col-md-4">
      {!! Form::text('pesan', null, ['class'=>'form-control']) !!}
      {!! $errors->first('pesan', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-4 col-md-offset-2">
      {!! Form::submit('Simpan', ['class'=>'btn btn-primary']) !!}
    </div>
</div>
