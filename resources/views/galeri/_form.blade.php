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
<div class="form-group{{ $errors->has('lokasi_file') ? ' has-error' : '' }}">
    {!! Form::label('lokasi_file', 'Gambar', ['class'=>'col-md-2 control-label']) !!}
  <div class="col-md-3">
    {!! Form::file('lokasi_file') !!}
    @if (isset($galeri) && $galeri->lokasi_file)
    {!! Html::image(asset('image/'.$galeri->lokasi_file), null, ['class'=>'img-rounded img-responsive', 'width' => 75]) !!}
    @endif
    {!! $errors->first('lokasi_file', '<p class="help-block">:message</p>') !!}
  </div>
</div>

<div class="form-group">
    <div class="col-md-4 col-md-offset-2">
      {!! Form::submit('Simpan', ['class'=>'btn btn-primary']) !!}
    </div>
</div>
