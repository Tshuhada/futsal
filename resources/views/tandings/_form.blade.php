<div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
  {!! Form::label('nama', 'Nama', ['class'=>'col-md-2 control-label']) !!}
    <div class="col-md-4">
      {!! Form::text('nama', null, ['class'=>'form-control']) !!}
      {!! $errors->first('nama', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {!! $errors->has('author_id') ? 'has-error' : '' !!}">
  {!! Form::label('author_id', 'Lapangan', ['class'=>'col-md-2 control-label']) !!}
    <div class="col-md-4">
      {!! Form::select('author_id', [''=>'']+App\Author::pluck('nama','id')->all(), null) !!}
      {!! $errors->first('author_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group{{ $errors->has('waktu') ? ' has-error' : '' }}">
  {!! Form::label('waktu', 'Waktu', ['class'=>'col-md-2 control-label']) !!}
    <div class="col-md-4">
      {!! Form::text('waktu', null, ['class'=>'form-control']) !!}
      {!! $errors->first('waktu', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-4 col-md-offset-2">
      {!! Form::submit('Simpan', ['class'=>'btn btn-primary']) !!}
    </div>
</div>

{{-- <div class="form-group{{ $errors->has('cover') ? ' has-error' : '' }}">
  {!! Form::label('cover', 'Jumlah', ['class'=>'col-md-2 control-label']) !!}
    <div class="col-md-4">
      {!! Form::file('cover') !!}
      {!! $errors->first('cover', '<p class="help-block">:message</p>') !!}
    </div>
</div> --}}
