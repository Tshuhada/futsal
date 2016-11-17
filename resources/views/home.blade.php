
@extends('layouts.app')

@section('content')
        <br>
          <div class="row">
            <div class="panel panel-default">
              <div class="panel-body">
                <div class="col-md-6 well">
                  <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                      <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                      <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                      <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                      <div class="item active">
                        <img src="/images/slider1.jpg" style="margin: 0 auto;" width="435">
                        {{-- <div class="carousel-caption">
                          ...
                        </div> --}}
                      </div>
                      <div class="item">
                        <img src="/images/slider2.jpg" style="margin: 0 auto;" width="415">
                        {{-- <div class="carousel-caption">
                          ...
                        </div> --}}
                      </div>
                      <div class="item">
                        <img src="/images/slider3.jpg" style="margin: 0 auto;" width="435">
                        {{-- <div class="carousel-caption">
                          ...
                        </div> --}}
                      </div>
                      ...
                    </div>

                    <!-- Controls -->
                    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                    </a>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="row well">
                    <div class="col-sm-12 text-center">
                      <h4>Tim Futsal Yang Telah Terdaftar</h4>

                      <div class="row">
                        @foreach($sparings as $sparings)
                          <div class="col-xs-6 text-center">
                            <img src="{{ asset('image/'.$sparings->gambar) }}" width="50">
                            <br>
                            {{ $sparings->name }}
                          </div>
                        @endforeach
                      </div>
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <div class="col-md-offset-5">
                      <a href="{{ url('/sparings/create') }}" class="btn btn-danger">Buat Sparing</a>
                      <a href="{{ url('/jadwal') }}" class="btn btn-danger">Cari Lawan</a>
                  </div>
                </div>
                <br>

                    <div class="row">
                      <div class="col-md-12 text-justify">
                        Futsal dipopulerkan di Montevideo, Uruguay pada tahun 1930, oleh Juan Carlos Ceriani. Keunikan futsal mendapat perhatian di seluruh Amerika Selatan, terutamanya di Brasil. Ketrampilan yang dikembangkan dalam permainan ini dapat dilihat dalam gaya terkenal dunia yang diperlihatkan pemain-pemain Brasil di luar ruangan, pada lapangan berukuran biasa. Pele, bintang terkenal Brasil, contohnya, mengembangkan bakatnya di futsal. Sementara Brasil terus menjadi pusat futsal dunia, permainan ini sekarang dimainkan di bawah perlindungan Fédération Internationale de Football Association di seluruh dunia, dari Eropa hingga Amerika Tengah dan Amerika Utara serta Afrika, Asia, dan Oseania.
                        <br>
                        <br>
                        Pertandingan internasional pertama diadakan pada tahun 1965, Paraguay menjuarai Piala Amerika Selatan pertama. Enam perebutan Piala Amerika Selatan berikutnya diselenggarakan hingga tahun 1979, dan semua gelaran juara disapu habis Brasil. Brasil meneruskan dominasinya dengan meraih Piala Pan Amerika pertama tahun 1980 dan memenangkannya lagi pada perebutan berikutnya tahun pd 1984.
                        <br>
                        <br>
                        Pertandingan futsal internasional pertama diadakan di AS pada Desember 1985, di Universitas Negeri Sonoma di Rohnert Park, California.
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
