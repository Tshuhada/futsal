<div class="form-group {!! $errors->has('nama') ? 'has-error' : '' !!}">
  {!! Form::label('nama', 'Nama Lapangan', ['class'=>'col-md-2 control-label']) !!}
    <div class="col-md-4">
      {!! Form::text('nama', null, ['class'=>'form-control']) !!}
      {!! $errors->first('nama', '<p class="help-block">:message</p>') !!}
    </div>
</div>


<div class="form-group{{ $errors->has('alamat') ? ' has-error' : '' }}">
  {!! Form::label('alamat', 'Alamat', ['class'=>'col-md-2 control-label']) !!}
    <div class="col-md-8">
      {!! Form::textarea('alamat', null,['class'=>'form-control', 'rows' => 10, 'cols' => 60]) !!}
      {!! $errors->first('alamat', '<p class="help-block">:message</p>') !!}
    </div>
</div>


<div class="form-group">
    <div class="col-md-4 col-md-offset-2">
      {!! Form::submit('Simpan', ['class'=>'btn btn-primary']) !!}
    </div>
</div>
