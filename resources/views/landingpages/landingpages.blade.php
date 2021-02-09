<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- pake Bootstrap bersi 4.1 CSS -->
    <link rel="stylesheet" href="{{ asset('bootstrap versi 4.1/css/bootstrap.min.css')}}">


    {{--  Font  --}}
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Viga&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Knewave&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Annie+Use+Your+Telescope&display=swap" rel="stylesheet">

    {{--  css sendiri  --}}
    <link rel="stylesheet" href="{{ asset('css/style.css')}}">

    <title>KiraSastra</title>
  </head>
  <body>
    
      {{-- navbar --}}
        @include('.landingpages.part.navbar')
      {{-- akhir navbar --}}
      
      {{--  index  --}}
      @include('.landingpages.part.index')
      {{--  akhir index  --}}

      {{--  kanan  --}}
      @include('.landingpages.part.kanan')
      {{--  akhir kanan      --}}


      {{--  footer  --}}
      @include('.landingpages.part.footer')
      {{--  akhir footer  --}}

    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{ asset('bootstrap versi 4.1/jquery/jquery-3.3.1.slim.min.js')}}"></script>
    <script src="{{ asset('bootstrap versi 4.1/popper/popper.min.js')}}"></script>
    <script src="{{ asset('bootstrap versi 4.1/js/bootstrap.min.js')}}"></script>
  </body>
</html>