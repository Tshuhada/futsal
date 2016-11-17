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
                        <img src="/images/slider1.jpg" style="margin: 15% auto;">
                        <div class="carousel-caption">
                          ...
                        </div>
                      </div>
                      <div class="item">
                        <img src="/images/slider2.jpg" style="margin: 15% auto;">
                        <div class="carousel-caption">
                          ...
                        </div>
                      </div>
                      <div class="item">
                        <img src="/images/slider3.jpg" style="margin: 15% auto;">
                        <div class="carousel-caption">
                          ...
                        </div>
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
                        {{-- @include('guest.list'); --}}
                      </div>
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <div class="col-md-offset-5">
                      <a href="{{ url('/register') }}" class="btn btn-danger">Buat Sparing</a>
                      <a href="{{ url('/register') }}" class="btn btn-danger">Cari Lawan</a>
                  </div>
                </div>
                <br>

                    <div class="row">
                      <div class="col-md-6 text-justify">istem Pakar (dalam bahasa Inggris :expert system) adalah sistem informasi yang berisi dengan pengetahuan dari pakar sehingga dapat digunakan untuk konsultasi. Pengetahuan dari pakar di dalam sistem ini digunakan sebagi dasar oleh Sistem Pakar untuk menjawab pertanyaan (konsultasi). Kepakaran (expertise) adalah pengetahuan yang ekstensif dan spesifik yang diperoleh melalui rangkaian pelatihan, membaca, dan pengalaman. Pengetahuan membuat pakar dapat mengambil keputusan secara lebih baik dan lebih cepat daripada non-pakar dalam memecahkan problem yang kompleks. Kepakaran mempunyai sifat berjenjang, pakar top memiliki pengetahuan lebih banyak daripada pakar yunior. Tujuan Sistem Pakar adalah untuk mentransfer kepakaran dari seorang pakar ke komputer, kemudian ke orang lain (yang bukan pakar).

                        Sistem pakar adalah suatu program komputer yang mengandung pengetahuan dari satu atau lebih pakar manusia mengenai suatu bidang spesifik. Jenis program ini pertama kali dikembangkan oleh periset kecerdasan buatan pada dasawarsa 1960-an dan 1970-an dan diterapkan secara komersial selama 1980-an. Bentuk umum sistem pakar adalah suatu program yang dibuat berdasarkan suatu set aturan yang menganalisis informasi (biasanya diberikan oleh pengguna suatu sistem) mengenai suatu kelas masalah spesifik serta analisis matematis dari masalah tersebut. Tergantung dari desainnya, sistem pakar juga mampu merekomendasikan suatu rangkaian tindakan pengguna untuk dapat menerapkan koreksi. Sistem ini memanfaatkan kapabilitas penalaran untuk mencapai suatu simpulan

                      </div>
                      <div class="col-md-6">

                        @include('auth.login')
                      </div>
                  </div>
                @include('layouts.gambar')
                <br>
                @include('layouts.footer')

              </div>
            </div>

          </div>
        </div>


          </div>
        <br>

@endsection
