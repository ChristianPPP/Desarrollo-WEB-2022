@extends('layout.main')
@section('title','inicio')
@section('content')
<h1>Acerca de nosotros</h1>
<hr>
<link rel="stylesheet" href="{{ URL::asset('css/nosotros1.css') }}" />
<link rel="stylesheet" href="{{ URL::asset('css/nosotros2.css') }}" />
<body class="u-body u-xl-mode">
    <section class="u-clearfix u-valign-middle-md u-valign-middle-sm u-valign-middle-xl u-section-1" id="carousel_a2f1">
        <img class="u-expanded-height-xl u-image u-image-1" src="{{URL::asset('images/weee.jpg')}}" data-image-width="1152" data-image-height="1080" >
        <div class="u-align-left u-container-style u-group u-opacity u-opacity-60 u-shape-rectangle u-white u-group-1">
          <div class="u-container-layout u-valign-middle u-container-layout-1">
            <h2 class="u-text u-text-1">Concesionaria</h2>
            <p class="u-text u-text-2">{{$content}}</p>
            <p class="u-text u-text-3">Contactar con agente de ventas <a href="https://github.com/ChristianPPP" class="u-active-none u-border-1 u-border-active-palette-1-base u-border-black u-border-hover-palette-1-base u-btn u-button-link u-button-style u-hover-none u-none u-text-body-color u-btn-1" target="_blank">Agente</a>
            </p>
            <a href="/" class="u-btn u-btn-round u-button-style u-radius-10 u-btn-2">Saber mas</a>
          </div>
        </div>
      </section>
</body>
@endsection()
