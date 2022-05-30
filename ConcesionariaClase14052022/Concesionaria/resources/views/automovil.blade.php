@extends('layout.main')
@section('title','inicio')
@section('content')
<h1>Bienvenidos</h1>
<hr>
<link rel="stylesheet" href="{{ URL::asset('css/automovil1.css') }}" />
<link rel="stylesheet" href="{{ URL::asset('css/automovil2.css') }}" />
<body data-home-page="Contact.html" data-home-page-title="Contact" class="u-body u-xl-mode">
    <section class="u-align-center u-clearfix u-palette-4-light-2 u-section-1" id="carousel_f332">
      <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <div class="u-clearfix u-expanded-width-sm u-expanded-width-xs u-gutter-0 u-layout-wrap u-layout-wrap-1">
          <div class="u-gutter-0 u-layout">
            <div class="u-layout-row">
              <div class="u-align-left u-container-style u-layout-cell u-size-30 u-white u-layout-cell-1">
                <div class="u-container-layout u-valign-middle u-container-layout-1">
                  <h6 class="u-text u-text-default u-text-grey-50 u-text-1">Autos</h6>
                  <h2 class="u-custom-font u-font-source-sans-pro u-text u-text-2">{{$dataRandom['nombre']}}</h2>
                  <ul class="u-custom-list u-text u-text-3">
                    <li>
                      <div class="u-list-icon u-text-palette-2-base">
                        <svg class="u-svg-content" viewBox="0 0 415.994 415.994" id="svg-aeac" style="font-size: 0.5em; margin: -0.5em;"><path d="m391.645 193.946-352-192c-4.96-2.688-10.976-2.592-15.808.288-4.864 2.88-7.84 8.128-7.84 13.76v384c0 5.664 2.976 10.88 7.84 13.76 2.496 1.504 5.344 2.24 8.16 2.24 2.656 0 5.28-.672 7.648-1.984l352-192c5.152-2.752 8.352-8.16 8.352-14.016s-3.2-11.264-8.352-14.048z" fill="currentColor"></path></svg>
                      </div> {{$dataRandom['anio']}}
                    </li>
                    <li>
                      <div class="u-list-icon u-text-palette-2-base">
                        <svg class="u-svg-content" viewBox="0 0 415.994 415.994" id="svg-aeac" style="font-size: 0.5em; margin: -0.5em;"><path d="m391.645 193.946-352-192c-4.96-2.688-10.976-2.592-15.808.288-4.864 2.88-7.84 8.128-7.84 13.76v384c0 5.664 2.976 10.88 7.84 13.76 2.496 1.504 5.344 2.24 8.16 2.24 2.656 0 5.28-.672 7.648-1.984l352-192c5.152-2.752 8.352-8.16 8.352-14.016s-3.2-11.264-8.352-14.048z" fill="currentColor"></path></svg>
                      </div>{{$dataRandom['msrp']}}
                    </li>
                    <li>
                      <div class="u-list-icon u-text-palette-2-base">
                        <svg class="u-svg-content" viewBox="0 0 415.994 415.994" id="svg-aeac" style="font-size: 0.5em; margin: -0.5em;"><path d="m391.645 193.946-352-192c-4.96-2.688-10.976-2.592-15.808.288-4.864 2.88-7.84 8.128-7.84 13.76v384c0 5.664 2.976 10.88 7.84 13.76 2.496 1.504 5.344 2.24 8.16 2.24 2.656 0 5.28-.672 7.648-1.984l352-192c5.152-2.752 8.352-8.16 8.352-14.016s-3.2-11.264-8.352-14.048z" fill="currentColor"></path></svg>
                      </div>{{$dataRandom['mpg']}} 
                    </li>
                  </ul>
                  <a href="/" class="u-active-grey-80 u-border-none u-btn u-btn-round u-button-style u-hover-grey-80 u-palette-1-base u-radius-10 u-btn-1">Mas Detalles</a>
                </div>
              </div>
              <div class="u-container-style u-layout-cell u-palette-3-light-2 u-shape-rectangle u-size-30 u-layout-cell-2">
                <div class="u-container-layout u-valign-bottom u-container-layout-2">
                  <img class="u-expanded-width-lg u-expanded-width-md u-expanded-width-xl u-image u-image-1" src="{{$dataRandom['img']}}" data-image-width="617" data-image-height="723">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </body>
@endsection()
