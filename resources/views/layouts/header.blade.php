@if (Auth::guest())
<div class="carousel fade-carousel slide" data-ride="carousel" data-interval="4000" id="bs-carousel">
  <!-- Overlay -->
  <div class="overlay"></div>

  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#bs-carousel" data-slide-to="0" class="active"></li>
    <li data-target="#bs-carousel" data-slide-to="1"></li>
    <li data-target="#bs-carousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item slides active">
      <div class="slide-1"></div>
      <div class="hero">
        <hgroup>
            <h1>Indonesia</h1>
            <h3>Generasi Sepak Bola</h3>
        </hgroup>
        <!-- <button class="btn btn-hero btn-lg" role="button">See all features</button> -->
      </div>
    </div>
    <div class="item slides">
      <div class="slide-2"></div>
      <div class="hero">
        <hgroup>
            <h1>Kemenangan</h1>
            <h3>Maju Indonesia Jaya</h3>
        </hgroup>
        <!-- <button class="btn btn-hero btn-lg" role="button">See all features</button> -->
      </div>
    </div>
    <div class="item slides">
      <div class="slide-3"></div>
      <div class="hero">
        <hgroup>
            <h1>Persatuan</h1>
            <h3>Kokoh Dalam Pertahanan</h3>
        </hgroup>
        <!-- <button class="btn btn-hero btn-lg" role="button">See all features</button> -->
      </div>
    </div>
  </div>
</div>
@else
  <br>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="panel panel-default">
          <div class="panel-body">

            <div class="media">
              <div class="media-left">
                <a href="#">
                  <img class="media-object" src="{{ asset('image/') }}/{{ auth()->user()->gambar }}" width="150" alt="...">
                </a>
              </div>
              <div class="media-body">
                <h4 class="media-heading">Team</h4>
                {!! auth()->user()->isi !!}
              </div>
            </div>
            <div class="text-right">
              <a class="btn btn-primary" href="{{ '/settings/profile/edit'}}">Ubah Profil</a>
              <a class="btn btn-primary" href="{{ url('/settings/password') }}">Ubah Password</a>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
@endif
