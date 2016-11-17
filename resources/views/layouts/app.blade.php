<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet" type='text/css'>
    <link href="{{asset('css/gambar.css')}}" rel="stylesheet">
    <link href="{{asset('css/dropzone.css')}}" rel="stylesheet">
    <link href="{{asset('css/header.css')}}" rel="stylesheet">
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/jquery.dataTables.css')}}" rel="stylesheet">
    <link href="{{asset('css/dataTables.bootstrap.css')}}" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>

</head>
<body>
  <div class="flex-center position-ref full-height">
      {{-- @if (Route::has('login'))
          <div class="top-right links">
              <a href="{{ url('/login') }}">Login</a>
              <a href="{{ url('/register') }}">Register</a>
          </div>
      @endif --}}

@include('layouts.header')
<br>
          <div class="links text-center">
            <div class="btn-group btn-group-lg" role="group" aria-label="...">
              @if (Auth::guest())
                <a href="{{ url('/') }}" type="button" class="btn btn-default">Beranda</a>
                <a href="{{ url('/register') }}" type="button" class="btn btn-default">Team</a>
                <a href="{{ url('/vi') }}" type="button" class="btn btn-default">Jadwal Sparing</a>
                <a href="{{ url('/view') }}" type="button" class="btn btn-default">Cari Lawan</a>
                <a href="{{ url('/login') }}" type="button" class="btn btn-default">Login</a>
                {{-- <a href="https://github.com/laravel/laravel" type="button" class="btn btn-default">Informasi</a>
                <a href="https://github.com/laravel/laravel" type="button" class="btn btn-default">Galeri</a> --}}
              @else
                {{-- <a href="{{ url('/') }}" type="button" class="btn btn-default">Beranda</a> --}}
                {{-- <a href="{{ url('/settings/profile') }}" type="button" class="btn btn-default">Profil</a> --}}
                <a href="{{ url('/sparings') }}" type="button" class="btn btn-default">Jadwalku</a>
                {{-- <a href="{{ url('/lihat') }}" type="button" class="btn btn-default">List Sparing</a> --}}
                <a href="{{ url('/jawab') }}" type="button" class="btn btn-default">Konfirmasi Sparing</a>
                <a href="{{ url('/jadwal') }}" type="button" class="btn btn-default">Cari Lawan</a>
                {{-- <a href="https://github.com/laravel/laravel" type="button" class="btn btn-default">Informasi</a>
                <a href="https://github.com/laravel/laravel" type="button" class="btn btn-default">Galeri</a> --}}
                <a href="{{ url('/logout') }}" type="button" class="btn btn-default"
                    onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
                    Logout
                </a>

                <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
              @endif
            </div>
          </div>

      </div>
  </div>
    <div class="container">
      @include('layouts._flash')
      @yield('content')
    </div>
    <!-- Scripts -->
    {{-- <script src="/js/app.js"></script> --}}

    <script type="text/javascript" src="{{ asset('/js/tinymce/js/tinymce/tinymce.min.js ') }}"></script>
    <script type="text/javascript">
    tinymce.init({
                selector : "textarea",
       plugins : [  "advlist autolink lists link image charmap print preview anchor",
                    "searchreplace visualblocks code fullscreen",
                    "insertdatetime media table contextmenu paste jbimages"
                 ],

       toolbar : "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image jbimages",

       image_advtab: true ,
    });
    </script>
    <script src="{{asset('js/dropzone.js')}}"></script>
    <script src="{{asset('js/jquery-3.1.1.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('js/dataTables.bootstrap.min.js')}}"></script>
    <script src="{{asset('js/custom.js')}}"></script>
    @yield('scripts')
</body>
</html>
