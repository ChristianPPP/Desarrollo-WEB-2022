@extends('layout.main')
@section('title','inicio')
@section('content')
<h1>Bienvenidos</h1>
<hr>
<link rel="stylesheet" href="{{ URL::asset('css/home1.css') }}" />
<link rel="stylesheet" href="{{ URL::asset('css/home2.css') }}" />
<section class="u-align-center u-clearfix u-palette-5-light-2 u-section-1" id="carousel_b3f3">
    <h2 class="u-custom-font u-font-montserrat u-text u-text-1"> Autos de todos los estilos para todas tus necesidades</h2>
    <p class="u-text u-text-2"> Planes de pago amigables y crédito directo sin intereses</p>
    <div class="u-expanded-width u-palette-5-base u-shape u-shape-rectangle u-shape-1"></div>
    <div class="u-layout-horizontal u-list u-list-1">
      <div class="u-repeater u-repeater-1">
          @foreach ($homeData as $info)
          <div class="u-align-center u-container-style u-custom-item u-list-item u-palette-2-light-3 u-radius-50 u-repeater-item u-shape-round">
            <div class="u-container-layout u-similar-container u-valign-middle u-container-layout-1"><span class="u-file-icon u-icon u-text-black u-icon-1"><img src="{{$info['imagen']}}" alt=""></span>
              <h5 class="u-custom-font u-font-montserrat u-text u-text-3"> {{$info['titulo']}}</h5>
              <p class="u-text u-text-4">{{$info['contenido']}}</p>
            </div>
          </div>
          @endforeach
      <a class="u-absolute-vcenter u-gallery-nav u-gallery-nav-prev u-grey-70 u-icon-circle u-opacity u-opacity-70 u-spacing-10 u-text-white u-gallery-nav-1" href="#" role="button">
        <span aria-hidden="true">
          <svg viewBox="0 0 451.847 451.847"><path d="M97.141,225.92c0-8.095,3.091-16.192,9.259-22.366L300.689,9.27c12.359-12.359,32.397-12.359,44.751,0
c12.354,12.354,12.354,32.388,0,44.748L173.525,225.92l171.903,171.909c12.354,12.354,12.354,32.391,0,44.744
c-12.354,12.365-32.386,12.365-44.745,0l-194.29-194.281C100.226,242.115,97.141,234.018,97.141,225.92z"></path></svg>
        </span>
        <span class="sr-only">
          <svg viewBox="0 0 451.847 451.847"><path d="M97.141,225.92c0-8.095,3.091-16.192,9.259-22.366L300.689,9.27c12.359-12.359,32.397-12.359,44.751,0
c12.354,12.354,12.354,32.388,0,44.748L173.525,225.92l171.903,171.909c12.354,12.354,12.354,32.391,0,44.744
c-12.354,12.365-32.386,12.365-44.745,0l-194.29-194.281C100.226,242.115,97.141,234.018,97.141,225.92z"></path></svg>
        </span>
      </a>
      <a class="u-absolute-vcenter u-gallery-nav u-gallery-nav-next u-grey-70 u-icon-circle u-opacity u-opacity-70 u-spacing-10 u-text-white u-gallery-nav-2" href="#" role="button">
        <span aria-hidden="true">
          <svg viewBox="0 0 451.846 451.847"><path d="M345.441,248.292L151.154,442.573c-12.359,12.365-32.397,12.365-44.75,0c-12.354-12.354-12.354-32.391,0-44.744
L278.318,225.92L106.409,54.017c-12.354-12.359-12.354-32.394,0-44.748c12.354-12.359,32.391-12.359,44.75,0l194.287,194.284
c6.177,6.18,9.262,14.271,9.262,22.366C354.708,234.018,351.617,242.115,345.441,248.292z"></path></svg>
        </span>
        <span class="sr-only">
          <svg viewBox="0 0 451.846 451.847"><path d="M345.441,248.292L151.154,442.573c-12.359,12.365-32.397,12.365-44.75,0c-12.354-12.354-12.354-32.391,0-44.744
L278.318,225.92L106.409,54.017c-12.354-12.359-12.354-32.394,0-44.748c12.354-12.359,32.391-12.359,44.75,0l194.287,194.284
c6.177,6.18,9.262,14.271,9.262,22.366C354.708,234.018,351.617,242.115,345.441,248.292z"></path></svg>
        </span>
      </a>
    </div>
  </section>
@endsection()
