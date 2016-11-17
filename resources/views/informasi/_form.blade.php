<div class="form-group{{ $errors->has('judul') ? ' has-error' : '' }}">
  {!! Form::label('judul', 'Judul', ['class'=>'col-md-2 control-label']) !!}
    <div class="col-md-9">
      {!! Form::text('judul', null, ['class'=>'form-control']) !!}
      {!! $errors->first('judul', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group{{ $errors->has('jenis') ? ' has-error' : '' }}">
  {!! Form::label('jenis', 'Jenis', ['class'=>'col-md-2 control-label']) !!}
    <div class="col-md-9">
      {!! Form::text('jenis', null, ['class'=>'form-control']) !!}
      {!! $errors->first('jenis', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group{{ $errors->has('isi') ? ' has-error' : '' }}">
  {!! Form::label('isi', 'Isi', ['class'=>'col-md-2 control-label']) !!}
    <div class="col-md-9">
      {!! Form::textarea('isi', null,['class'=>'form-control', 'rows' => 10, 'cols' => 40]) !!}
      {!! $errors->first('isi', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-4 col-md-offset-2">
      {!! Form::submit('Simpan', ['class'=>'btn btn-primary']) !!}
    </div>
</div>
