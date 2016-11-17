
@extends('layouts.app')

@section('content')
        <br>
          <div class="row">
            <div class="panel panel-default">
              <div class="panel-body">
                <div class="col-md-6 well">
                  {!! Form::open(['url'=>'/register', 'class'=>'form-horizontal', 'files' => true]) !!}
                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                      {!! Form::label('name', 'Nama', ['class'=>'col-md-4 control-label']) !!}
                      <div class="col-md-8">
                        {!! Form::text('name', null, ['class'=>'form-control', 'placeholder' => 'Nama']) !!}
                        {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
                      </div>
                    </div>

                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                      {!! Form::label('email', 'Alamat Email', ['class'=>'col-md-4 control-label']) !!}
                      <div class="col-md-8">
                        {!! Form::email('email', null, ['class'=>'form-control', 'placeholder' => 'Email']) !!}
                        {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
                      </div>
                    </div>
                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                      {!! Form::label('password', 'Password', ['class'=>'col-md-4 control-label']) !!}
                      <div class="col-md-8">
                        {!! Form::password('password', ['class'=>'form-control', 'placeholder' => 'Password']) !!}
                        {!! $errors->first('password', '<p class="help-block">:message</p>') !!}
                      </div>
                    </div>
                    <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                      {!! Form::label('password_confirmation', 'Konfirmasi Password', ['class'=>'col-md-4 control-label']) !!}
                      <div class="col-md-8">
                        {!! Form::password('password_confirmation', ['class'=>'form-control', 'placeholder' => 'Konfirmasi Password']) !!}
                        {!! $errors->first('password_confirmation', '<p class="help-block">:message</p>') !!}
                      </div>
                    </div>
                    <div class="form-group{{ $errors->has('lokasi') ? ' has-error' : '' }}">
                      {!! Form::label('lokasi', 'Lokasi', ['class'=>'col-md-4 control-label']) !!}
                      <div class="col-md-8">
                        {!! Form::text('lokasi', null, ['class'=>'form-control', 'placeholder' => 'Lokasi']) !!}
                        {!! $errors->first('lokasi', '<p class="help-block">:message</p>') !!}
                      </div>
                    </div>
                </div>
                <div class="col-md-6">
                  <div class="row well">
                    <div class="col-sm-12">
                      <div class="form-horizontal">
                        <div class="form-group{{ $errors->has('tentang') ? ' has-error' : '' }}">
                          {!! Form::label(null, 'Keterangan', ['class'=>'col-md-2 control-label']) !!}
                          <div class="col-md-10">
                            {!! Form::text('tentang', null, ['class'=>'form-control', 'placeholder' => 'Tentang', 'rows' => 10, 'cols' => 40]) !!}
                            {!! $errors->first('tentang', '<p class="help-block">:message</p>') !!}
                          </div>
                        </div>
                        <div class="form-group{{ $errors->has('gambar') ? ' has-error' : '' }}">
                            {!! Form::label('gambar', 'Gambar', ['class'=>'col-md-2 control-label']) !!}
                          <div class="col-md-10">
                            {!! Form::file('gambar') !!}
                            {!! $errors->first('gambar', '<p class="help-block">:message</p>') !!}
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="col-md-8 col-md-offset-4">
                            <button type="submit" class="btn btn-primary">
                              <i class="fa fa-btn fa-user"></i> Daftar
                            </button>
                          </div>
                      </div>
                    </div>
                    </div>
                  </div>
                </div>
                <br>

                    <div class="row">
                      <div class="col-md-8 text-justify">
                        <div class="media">
                          <div class="media-left media-middle">
                            <a href="#">
                              <img class="media-object" src="/images/juventus.png" alt="..." width="64">
                            </a>
                          </div>
                          <div class="media-body text-justify">
                            <h4 class="media-heading">Football</h4>
                            istem Pakar (dalam bahasa Inggris :expert system) adalah sistem informasi yang berisi dengan pengetahuan dari pakar sehingga dapat digunakan untuk konsultasi. Pengetahuan dari pakar di dalam sistem ini digunakan sebagi dasar oleh Sistem Pakar untuk menjawab pertanyaan (konsultasi). Kepakaran (expertise) adalah pengetahuan yang ekstensif dan spesifik yang diperoleh melalui rangkaian pelatihan, membaca, dan pengalaman. Pengetahuan membuat pakar dapat mengambil keputusan secara lebih baik
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 text-center">
                        <div class="row">
                          <strong>Silahkan daftarkan tim anda untuk dapat membuat pertandingan atau sparing</strong>
                          <br>
                          <br>
                                <div class="col-md-12">
                                    <a href="{{ 'sparings/create' }}" class="btn btn-primary">Buat Pertandingan</a>
                                </div>
                            </div>
                      </div>
                  </div>
                  <br>
                @include('layouts.gambar')
                <br>
                @include('layouts.footer')

              </div>
            </div>
          </div>
@endsection
